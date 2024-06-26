$(document).ready(function () {
    var myTable = $('#DataTables_Table_0').DataTable();

    function parsedata(selecteddata) {
        $('#user_id').val(selecteddata[0]);
        $('#name').val(selecteddata[1]);
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

        $('.showparagraph').html('l\'utilisateur ' + showdata[1] + ' vérifié le '+showdata[7]);
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
});
