<script type="text/javascript">
    // ici nous cachons les select de state et city et le rendons visible apres un changement d'etat du select de country
    $(document).ready(function () {
        $('#state').hide();
        $('#label_state').hide();
        $('#city').hide();
        $('#label_city').hide();

        $('#country').on('change',function () {
            $('#state').show();
            $('#label_state').show();
        });

        $('#state').on('change',function () {
            $('#city').show();
            $('#label_city').show();
        });

        $('#city').on('change',function () {

        })
    });

</script>



{{--<script>--}}
{{--    // states loading here--}}
{{--    $(function (){--}}
{{--        $('#country').on('change',function (e) {--}}

{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}

{{--            var c = $('#country').val();--}}
{{--            var country = {id:c};--}}
{{--            if ($)--}}
{{--                $.ajax({--}}
{{--                    method: 'GET',--}}
{{--                    url : "+"+c+"/ajax_getStates",--}}
{{--                    data : country,--}}
{{--                    type : 'JSON',--}}


{{--                    success : function(a){--}}
{{--                        //$('#info').html(a);--}}
{{--                        var b = JSON.parse(a);--}}

{{--                        var v ;--}}
{{--                        v ="<option>@lang('choose')</option>";--}}

{{--                        $.each(b, function(i,value){--}}
{{--                            v += "<option value="+b[i].id+">"+b[i].name+"</option>";--}}
{{--                        });--}}

{{--                        $('#state').html(v);--}}

{{--                    },--}}

{{--                    error : function(){--}}
{{--                        alert('Operation Failed ');--}}
{{--                    },--}}

{{--                    complete : function(){--}}

{{--                    }--}}

{{--                });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

{{--<script>--}}
{{--    // city loading here--}}
{{--    $(function (){--}}
{{--        $('#state').on('change',function (e) {--}}

{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}

{{--            var c = $('#state').val();--}}
{{--            var country = {id:c};--}}
{{--            if ($)--}}
{{--                $.ajax({--}}
{{--                    method: 'GET',--}}
{{--                    url : "+"+c+"/ajax_getCities",--}}
{{--                    data : country,--}}
{{--                    type : 'JSON',--}}


{{--                    success : function(a){--}}
{{--                        //$('#info').html(a);--}}
{{--                        var b = JSON.parse(a);--}}

{{--                        var v ;--}}

{{--                        $.each(b, function(i,value){--}}
{{--                            v += "<option value="+value.name+">"+b[i].name+"</option>";--}}
{{--                        });--}}

{{--                        $('#city').html(v);--}}

{{--                    },--}}

{{--                    error : function(){--}}
{{--                        alert('l opperation n à pas marché');--}}
{{--                    },--}}

{{--                    complete : function(){--}}

{{--                    }--}}

{{--                });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

{{--<script>--}}
{{--    $(function (){--}}
{{--        $('#state').on('change',function (e) {--}}

{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}

{{--            var c = $('#state').val();--}}
{{--            var country = {id:c};--}}
{{--            if ($)--}}
{{--                $.ajax({--}}
{{--                    method: 'GET',--}}
{{--                    url : "+"+c+"/ajax_getCities",--}}
{{--                    data : country,--}}
{{--                    type : 'JSON',--}}


{{--                    success : function(a){--}}
{{--                        //$('#info').html(a);--}}
{{--                        var b = JSON.parse(a);--}}

{{--                        var v ;--}}
{{--                        v = "<option>@lang('choose')</option>";--}}
{{--                        $.each(b, function(i,value){--}}
{{--                            v += "<option value="+value.name+">"+b[i].name+"</option>";--}}
{{--                        });--}}

{{--                        $('#city').html(v);--}}

{{--                    },--}}

{{--                    error : function(){--}}
{{--                        alert('operation Failed ');--}}
{{--                    },--}}

{{--                    complete : function(){--}}

{{--                    }--}}

{{--                });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}


<script>
    // states loading here
    $(function (){
        $('#country').on('change',function (e) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            var c = $('#country').val();
            var country = {id:c};
            if ($)
                $.ajax({
                    method: 'GET',
                    url : "+"+c+"/ajax_phonecode",
                    data : country,
                    type : 'JSON',


                    success : function(a){
                        //$('#info').html(a);
                        var b = JSON.parse(a);

                        var v ;
                        //v ="<option>@lang('choose')</option>";

                        // $.each(b, function(i,value){
                        //     v += "<option value="+b[i].id+">"+b[i].name+"</option>";
                        // });
                        // $.each(b, function(i,value){
                        // v = "<option value="+b[i].id+">"+b[i].name+"</option>";
                        v =" <span id=\"span_phone\" class=\"input-group-text\"> "+b.name+"</span>";
                        //});

                        $('#div_span').html(v);

                    },

                    error : function(){
                        alert('Operation Failed ');
                    },

                    complete : function(){

                    }

                });
        });
    });
</script>
