<script type="text/javascript">
    $(document).ready(function () {
        var myTable = $('#DataTables_Table_0').DataTable();

        function parsedata(selecteddata) {
            $('#user_id').val(selecteddata[0]);
            $('#name').val(selecteddata[1]);
            $('#last_name').val(selecteddata[2]);
            $('#email').val(selecteddata[3]);
            $('#role').val(selecteddata[4]);
        }


        $(document).on('click', '#edit-user', function () {
            $('.modal-titleEdit').text("@lang('Modifier utilisateur')");
            $('#save_user').attr("id","update_user");
            var alldata = $(this).data('info').split(',');
            parsedata(alldata);
        });

        // affichage du modal de suppression
        $(document).on('click', '#delete-user', function () {
            $('.modal-titleDelete').text("@lang('Voulez vous supprimer ?')");
            var deletingdata = $(this).data('info').split(',');

            $('.deleteparagraph').html('l\'utilisateur => ' + deletingdata[0] + ", email=> " +
                deletingdata[1] + ", role => " + deletingdata[2]);
            $('.did').text(deletingdata[0]);
        });
        // show details modal
        $(document).on('click', '#show-user', function () {
            $('.modal-titleShow').text("@lang('Informations')");

            var showdata = $(this).data('info').split(',');

            $('.showparagraph').html('l\'utilisateur ' + showdata[1] + '');
        });

        // show create modal
        $(document).on('click', '#create-user', function () {
            $('.modal-titleEdit').text("@lang('Ajouter un utilisateur')");
            $('#user_id').remove();
        });


        /**
         *
         */

        // delete function
        $(document).on('click', '#confirm_delete', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var user_id = $.trim($('.did').text());
            {{--$.ajax({--}}
            {{--    type:'delete',--}}
            {{--    --}}{{--url:"{{route('user.destroy')}}"+'/user/'+user_id,--}}
            {{--    url:"{{route('user.destroy')}}",--}}

            {{--    data:{--}}
            {{--      id:user_id,--}}

            {{--    },--}}

            {{--    // data:{--}}
            {{--    //    '_token':$('input[name=_token]').val(),--}}
            {{--    //--}}
            {{--    // },--}}
            {{--    success: function (data) {--}}
            {{--        myTable.draw();--}}
            {{--    },--}}
            {{--    // success:function (data) {--}}
            {{--    //     $('.odd'+$('.did').text()).remove();--}}
            {{--    // }--}}
            {{--})--}}
        });

        // create user function
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

        // update user function

        $(document).on('click', "#update_user",function () {
           $.ajaxSetup({
               'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
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
</script>
