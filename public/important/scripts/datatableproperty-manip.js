$(document).ready(function () {
    var myTable = $('#DataTables_Table_0').DataTable();

    function parsedata(selecteddata) {
        $('#user_id').val(selecteddata[0]);
        $('#name').val(selecteddata[1]);
        $('#name-user').val(selecteddata[1]);
        $('#last_name').val(selecteddata[2]);
        $('#email').val(selecteddata[3]);
        $('#role').val(selecteddata[4]);
    }

    /*
    showing update modal
     */

    $(document).on('click', '#edit-user', function () {
        $('.modal-titleEdit').text("Modifier un Utilisateur ");
        $('#save_user').attr("id", "update_user");
        var alldata = $(this).data('info').split(',');
        var trim = $.trim(alldata)
        console.log(alldata)
        $.trim(parsedata(alldata));
    });

    /*
    Showing delete modal
     */
    $(document).on('click', '#delete-user', function () {

        $('.modal-titleDelete').text("@lang('Voulez vous supprimer ?')");
        var deletingdata = $(this).data('info').split(',');

        $('.deleteparagraph').html('l\'utilisateur => ' + deletingdata[0] + ", email=> " +
            deletingdata[1] + ", role => " + deletingdata[2]);
        $('.did').text(deletingdata[0]);
    });

    /*
    showing show modal
     */
    $(document).on('click', '#show-user', function () {
        $('.modal-titleShow').text("Informations");

        var showdata = $(this).data('info').split(',');
        console.log(showdata[6]);

        $('.showparagraph').html('l\'Agent ' + showdata[1] + ' est affecté au bien ' + '<br>'
            + '<hr>' + showdata[6].split(',') + ' ');
    });

    /*
    showing create modal
     */
    $(document).on('click', '#create-user', function () {
        $('.modal-titleEdit').text("Ajouter un utilisateur");
        $('#postform').resetForm();
        $('#user_id').remove();
    });


    /**
     * executing ajax action ==========================================> here
     */

    /*
     DELETE ACTION
     */
    $(document).on('click', '#confirm_delete', function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var user_id = $.trim($('.did').text());
        $.ajax({
            type: 'delete',
            url: "user" + '/' + user_id,
            data: {
                id: user_id,
            },
            success: function (data) {
                $('#dangerModal').modal('toggle');
                alertify.notify('Utilisateur id ' + JSON.parse(data) + ' supprimé ', 'success', 10, function () {
                    console.log('dismissed');

                });
                setTimeout(function () {// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                }, 1000);
            },

        })
    });

    /*
       CREATE USER ACTION HERE
    */
    $(document).on('click', '#save_user', function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //e.preventDefault();
        $(this).html('Envoi..');

        $.ajax({
            data: $('#postform').serialize(),
            url: "{{ route('user.store')}}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#save_user').html('Enregistrer');
                $('#postform').trigger("reset");
                $('#primaryModal').hide();
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
                $('#save_user').html('Modifier');
            }
        });

    });

    /*
     UPDATE USER ACTION HERE
     */

    $(document).on('click', "#update_user", function () {
        $.ajaxSetup({
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        })
        //e.preventDefault();
        $(this).html('Envoi..')

        $.ajax({
            data: $('#postform').serialize(),
            url: "{{ route('user.store')}}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                $('#upate_user').html('Enregistrer');
                $('#postform').trigger("reset");
                $('#primaryModal').hide();
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
                $('#update_user').html('Modifier');
            }
        });
    });

    /*
    =================================================================NEW ===================================================
       Assingnation des agents a une propriete
     */

    $(document).on('change', '#assign', function () {
        //if ($('#assign').is(':checked')) {
            var user = $(this).data('id').split(',');
            alertify.confirm('Assignation', 'Voulez vous l\'attribuer ce bien ou rétirer ce  bien ?',
                function () {
                    fetch('/assign-property/' + user[0] + '/' + user[1])
                        .then(response => {
                            if (response.ok) {
                                response.json().then(user_prop => {

                                    if(user_prop.array=="error"){
                                        alertify.error("Vous ne pouvez pas attribué un meme bien a pluisieurs agents");
                                        $('input[type=checkbox]').prop('checked', false);
                                        $('#assign').prop('checked', false);
                                    }else if(user_prop.array=="success"){
                                        alertify.success("Bien attribué")
                                    }else if(user_prop="detach"){
                                        alertify.success(("bien détaché"))
                                    }
                                })
                            } else {
                                console.error(' Reponse serveur : ' + response.status);
                            }

                        });



                }
                , function () {

                    $('input[type=checkbox]').prop('checked', false);
                    //console.log($(this))
                    //$(this).prop("checked", false);
                    alertify.error('Bien non attribué')
                });

      // }

    });


    /*
    ===============================================VALIDATE A PROPERTY BY USER
     */

    $(document).on('change', '#validate', function () {
        var prop = $(this).data('info');
        // alert(prop);
        alertify.confirm('Validation du bien', 'Voulez vous Vraiment valider ce bien  ?',
            function () {

                fetch('/validate-property/' + prop)
                    .then(response => {
                        if (response.ok) {
                            response.json().then(user_prop => {
                                console.log(user_prop);
                            })
                        } else {
                            console.error(' Reponse serveur : ' + response.status);
                        }

                    });

                alertify.success('Ok')

            }
            , function () {

                //$('input[type=checkbox]').prop('checked', false);
                $('#validate').prop("checked", false);
                alertify.error('Annuler')
            });


    })

    /*
    ===============================UPDATE A PROPERTY
     */


    $(document).on('change', '#update', function () {
        if ($('#update').is(':checked')) {
            $('#show-col').removeClass("col-sm-12").addClass("col-sm-6");
            $('#update-col').removeAttr("hidden");
            $('#update-col').fadeToggle("slow").fadeIn("slow");
            scrollTo( $("#update-col") );

        } else {
            $('#show-col').removeClass("col-sm-6").addClass("col-sm-12");
            $('#update-col').fadeToggle("slow").fadeOut("slow");
        }

    });
    //
    $(document).on('change', '#assign-agent', function () {
        if ($('#assign-agent').is(':checked')) {

            $('#card-agent').removeAttr("hidden");
            $('#card-agent').fadeToggle("slow").fadeIn("slow");
            scrollTo( $("#card-agent") );
        } else {
            $('#card-agent').hide();
        }


    });

    $(document).on('change', '#assign-agent', function () {
        if ($('#assign-agent').is(':checked')) {
            $('#card-agent').removeAttr("hidden");
            $('#card-agent').fadeToggle("slow").fadeIn("slow");
        } else {
            $('#card-agent').hide();
        }


    });

    function scrollTo( target ) {
        if( target.length ) {
            $("html, body").stop().animate( { scrollTop: target.offset().top }, 1500);
        }
    }
});
