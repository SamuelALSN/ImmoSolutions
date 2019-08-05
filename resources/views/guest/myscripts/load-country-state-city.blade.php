<script>
 document.ready(function (e) {
     var country = $('#country');
     var state = $('#state');
     var city = $('#city');

     state.hide();
     city.hide();
     $('#label_state').hide();
     $('#label_city').hide();
     $('#subpropertyType_id').hide();
     $('#label_subpropertyType').hide();
     country.on('change', function () {
         $('#state').show();
         $('#label_state').show();
     });

     state.on('change', function () {
         $('#city').show();
         $('#label_city').show();
     });
     // endhide


     // get countryData
     fetch('{{url('/country')}}')
         .then(response => {
             if (response.ok) {
                 response.json().then(allCountry => {
                     var v = "<option disabled> @lang("Choisir")</option>";
                     for (let i = 0; i < allCountry.length; i++) {
                         v += "<option value=" + allCountry[i].id + ">" + allCountry[i].name + "</option>";
                         $('#country').html(v);
                     }
                 })
             } else {
                 console.error('Réponse du serveur : ' + response.status);
             }
         });

     // get state
     country.on('change', function () {
         var c = country.val();
         //alert(c);
         fetch('{{url('/country')}}' + '/' + c)
             .then(response => {
                 if (response.ok) {
                     response.json().then(relatedStates => {
                         var s = "<option disabled>@lang("Choisir")</option>";
                         for (let i = 0; i < relatedStates.length; i++) {
                             s += "<option value =" + relatedStates[i].id + ">" + relatedStates[i].name + "</option>";
                             $('#state').html(s);
                             //console.log(relatedStates[i].name)
                         }
                     })
                 } else {
                     console.error(' Reponse serveur : ' + response.status);
                 }

             })
     });


     // end state

     // load city
     $('#state').on('change', function () {
         var ci = $('#state').val();
         //alert(ci);
         fetch('{{url('/state')}}' + '/' + ci)
             .then(response => {
                 if (response.ok) {
                     response.json().then(Relatedcities => {
                         var cit = "<option disabled>@lang("Choisir")</option>";
                         for (let i = 0; i < Relatedcities.length; i++) {
                             cit += "<option value =" + Relatedcities[i].id + ">" + Relatedcities[i].name + "</option>";
                             $('#city').html(cit);
                             //console.log(relatedStates[i].name)
                         }
                     })
                 } else {
                     console.error(' Reponse serveur : ' + response.status);
                 }

             })
     });
     //endcity



 });

</script>
