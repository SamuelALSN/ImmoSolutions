<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{config('app.name','ImmoSolutions')}}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('guest/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('guest/css/default.css')}}">
    <!--dropzone file-->
    <link rel="stylesheet" href="{{asset('guest/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('guest/css/dropzonecustom.css')}}">

</head>

<body class="inner-pages">


@include('guest.common.header')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1 id="essai">@lang("Soumettre un Bien ")</h1>
            <h2><a href="{{url('/welcome')}}">@lang("Accueil") </a> &nbsp;/&nbsp; @lang("Soumettre une propriete")</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION SUBMIT PROPERTY -->
<section class="royal-add-property-area section_100">
    <div class="container">
        <form id="propertyForm" action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="single-add-property">
                        <h3>@lang("Description du Bien immobiliers et prix ")</h3>
                        <div class="property-form-group">

                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="title">@lang("Titre de la propriete")</label>
                                        <input type="text" name="property_name" id="property_name"
                                               placeholder="@lang("Entrer le titre de la propriete")">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">@lang("Description de la propriete")</label>
                                        <textarea id="description" name="description"
                                                  placeholder="@lang("Breve Description de votre propriete ")"></textarea>
                                    </p>
                                   <p>
                                       <label for="title">@lang("Titre foncier/Autre document Similaire")</label>
                                       <input type="file" id="docfile" name="docfile"/>

                                   </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="dropdown faq-drop">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="single-add-property">
                        <h3>@lang("Localisation de la propriété")</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div id="locationField">
                                        <p>
                                            <input id="autocomplete"
                                                   placeholder="Entrez votre adresse"
                                                   onFocus="geolocate()"
                                                   type="text"/>
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                    <div id="address">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <label for=""> @lang("Adress")</label>
                                                <p>
                                                    <input class="" id="street_number" disabled="true" placeholder="Numero Rue"/>
                                                </p>
                                                <p>
                                                    <input class="" id="route" disabled="true" placeholder="rue"/>
                                                </p>

                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <p>
                                                    <label for="">@lang("ville") </label>
                                                    <input class="field" id="locality" disabled="true"/>
                                                </p>

                                            </div>
                                            <div class=" col-lg-4  col-md-12">
                                                <p>
                                                    <label for=""> @lang("region")</label>
                                                    <input class="field" id="administrative_area_level_1" disabled="true"/>
                                                </p>

                                           </div>
                                            <div class=" col-lg-4 col-md-12">
                                                <p>
                                                    <label for=""> @lang("Code postal") </label>
                                                    <input class="field" id="postal_code" disabled="true"/>
                                                </p>

                                            </div>
                                            <div class= " col-lg-4 col-md-12">
                                                <p>
                                                    <label for=""> @lang("Pays") </label>
                                                    <input class="" id="country" disabled="true"/>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="single-add-property">
                        <h3>@lang("Categories du Bien ")</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <label for="propertytpe">@lang("Categorie")<span></span></label>
                                    <select class="form-control" name="propertytype_id" id="propertytype_id">
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="dropdown faq-drop no-mb">
                                        <label for="subpropertyType" id="label_subpropertyType"> @lang("Sous Categorie")</label>
                                        <select class="form-control" name="subpropertyType_id" id="subpropertyType_id">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div class="dropdown faq-drop no-mb">
                                        <label for="standing">Standing</label>
                                        <select class="form-control" id="standing_id">

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-add-property">
                        <h3>@lang("Autres Informations")</h3>
                        <div class="property-form-group">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <label for="date">@lang("Date de Construction ")<span>(optionel)</span></label>
                                    <input class="form-control"
                                           type="date" name="buildingdate" id="buildingdate">

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="dropdown faq-drop no-mb">
                                        <label for="surface">Surface</label>
                                        <input class="form-control" type="text"
                                               name="surface" id="surface">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-property-button">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="prperty-submit-button">
                                    <button id="soumettre">@lang("Soumettre la Propriété")</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--image form-->

        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <h2 class="page-heading">Charger vos Images <span id="counter"></span></h2>
                <form method="post" action="{{ url('/images-save') }}"
                      enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                    {{ csrf_field() }}
                    <div class="dz-message">
                        <div class="col-xs-8">
                            <div class="message">
                                <p>Cliquez ici pour charger une image </p>
                            </div>
                        </div>
                    </div>
                    <div class="fallback">
                        <input type="file" name="file" multiple>
                    </div>
                    <input type="hidden" name="" value="">
                </form>
            </div>
        </div>
        <div class="row">
            {{--Dropzone Preview Template--}}
            <div id="preview" style="display: none;">

                <div class="dz-preview dz-file-preview">
                    <div class="dz-image"><img data-dz-thumbnail/></div>

                    <div class="dz-details">
                        <div class="dz-size"><span data-dz-size></span></div>
                        <div class="dz-filename"><span data-dz-name></span></div>
                    </div>
                    <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>


                    <div class="dz-success-mark">
                        <!-- SVG balise pour des contenues graphiques -->
                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">

                            <title>Correct </title>
                            <desc></desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                               sketch:type="MSPage">
                                <path
                                    d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                    id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475"
                                    fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                            </g>
                        </svg>

                    </div>

                    <div class="dz-error-mark">

                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <title>error</title>
                            <desc></desc>
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                               sketch:type="MSPage">
                                <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                   stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
                                    <path
                                        d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                        id="Oval-2" sketch:type="MSShapeGroup"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            {{--Fin de  la zone  de chargement d'image --}}
        </div>


    </div>

</section>
<!-- END SECTION SUBMIT PROPERTY -->

<!-- START SECTION NEWSLETTER -->
@include('guest.section.newsletter')
<!-- END SECTION NEWSLETTER -->

<!-- START FOOTER -->
@include('guest.common.footer')

<!-- END FOOTER -->
<!--Style Switcher===========================================-->
<div class="color-switcher" id="choose_color"><a href="#." class="picker_close"><i class="fa fa-cog fa-spin fa-2x"></i></a>
    <div class="theme-colours">
        <p class="font-italic">Choose Colour style</p>
        <ul>
            <li>
                <a href="" class="blue" id="blue"></a>
            </li>
            <li>
                <a href="#." class="pink" id="pink"></a>
            </li>
            <li>
                <a href="#." class="orange" id="orange"></a>
            </li>
            <li>
                <a href="#." class="purple" id="purple"></a>
            </li>
            <li>
                <a href="#." class="green" id="green"></a>
            </li>
            <li>
                <a href="#." class="red" id="red"></a>
            </li>
            <li>
                <a href="#." class="cyan" id="cyan"></a>
            </li>
            <li>
                <a href="#." class="sky-blue" id="sky-blue"></a>
            </li>
            <li>
                <a href="#." class="gray" id="gray"></a>
            </li>
            <li>
                <a href="#." class="brown" id="brown"></a>
            </li>
        </ul>
    </div>
</div>

<!-- ARCHIVES JS -->
<script src="{{asset('guest/js/jquery.min.js')}}"></script>
<script src="{{asset('guest/js/tether.min.js')}}"></script>
<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
<script src="{{asset('guest/js/smooth-scroll.min.js')}}"></script>
<script src="{{asset('guest/js/dropzone.js')}}"></script>
<script src="{{asset('guest/js/color-switcher.js')}}"></script>
<script src="{{asset('guest/js/inner.js')}}"></script>

@include("guest.myscripts.locate")

<script>
    $(document).ready(function () {
        $('.page-heading').hide();
        $('#my-dropzone').hide();
    });
</script>

<script>
    // fetch API USING
    window.addEventListener('DOMContentLoaded', (e) => {

        /**
         * propertyTypeData
         */
        //getStanding
        fetch('{{url('/standing')}}')
            .then(response => {
                if (response.ok) {
                    response.json().then(standing => {
                        var stand = "<option disabled>@lang("Choisir")</option>";
                        for (let i = 0; i < standing.length; i++) {
                            stand += "<option value =" + standing[i].id + ">" + standing[i].standing_name + "</option>";
                            $('#standing_id').html(stand);
                        }
                    })
                } else {
                    console.error(' Reponse serveur : ' + response.status);
                }

            });

        //getpropertyType
        //2
        fetch('{{url('/property-type')}}')
            .then(response => {
                if (response.ok) {
                    response.json().then(propertytype => {
                        var proptype = "<option disabled>@lang("Choisir")</option>";
                        for (let i = 0; i <propertytype.length; i++) {
                            proptype += "<option value =" + propertytype[i].id + ">" + propertytype[i].name + "</option>";
                            $('#propertytype_id').html(proptype);
                            //console.log(relatedStates[i].name)
                        }
                    })
                } else {
                    console.error(' Reponse serveur : ' + response.status);
                }

            });
        // get subpropertyTYPE
        $('#propertytype_id').on('change', function () {
            $('#label_subpropertyType').fadeIn("slow");
            $('#subpropertyType_id').fadeIn("slow");
            var sub = $('#propertytype_id').val();
            fetch('{{url('/property-type')}}' + '/' + sub)
                .then(response => {
                    if (response.ok) {
                        response.json().then(subproptype => {
                            var subP;
                            for (let i = 0; i <subproptype.length; i++) {
                                subP += "<option value =" + subproptype[i].id + ">" + subproptype[i].name + "</option>";
                                $('#subpropertyType_id').html(subP);
                            }
                        })
                    } else {
                        console.error(' Reponse serveur : ' + response.status);
                    }

                })
        });

        /*
         end PropertyTypeData
         */

        // INSERT DATA IN DATABASE HERE
        $('#soumettre').on('click', function () {
            event.preventDefault();
            var form =$('#propertyForm');
            var token = $("input[name='_token']").val();
            fetch('{{url('/property')}}', {
                headers: {
                    "Content-type": "application/json;charset=utf-8",
                    "Accept": "application/json,text-plain",
                    "X-Requested-Width": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },
                method: 'POST',
                credentials: "same-origin",
                body:JSON.stringify({
                    property_name:$('#property_name').val(),
                    description:$('#description').val(),
                    adresse:$('#adresse').val(),
                    location:$('#location').val(),
                    area:$('#surface').val(),
                    buildingdate:$('#buildingdate').val(),
                    latitudeposition:$('#latitudemaps').val(),
                    longitudeposition:$('#longitudemaps').val(),
                    standing_id:$('#standing_id').val(),
                    propertytype_id:$('#propertytype_id').val(),
                    subpropertyType_id:$('#subpropertyType_id').val(),
                    street_number:$('#street_number').val(),
                    route:$('#route').val(),
                    locality:$('#locality').val(),
                    administrative_area_level_1:$('#administrative_area_level_1').val(),
                    postal_code:$('#postal_code').val(),
                    country:$('#country').val(),
                    file: $('#docfile').val(),
                })
            })
                .then((data) => {
                    document.getElementById("propertyForm").reset();
                    $('#propertyForm').slideUp("slow");
                    $('.page-heading').show();
                    $('#my-dropzone').slideUp(2000).slideDown(2000);
                })
                .catch(function (error) {
                    console.log(error);
                });
        });

    });


</script>
</body>

</html>
