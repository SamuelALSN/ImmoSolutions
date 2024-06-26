
var total_photos_counter = 0;
var name = "";
Dropzone.options.myDropzone = {
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 10,
    previewTemplate: document.querySelector('#preview').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Supprimer Le Fichier',
    dictFileTooBig: 'Fichier supperieur à 10 MB',
    timeout: 10000,
    renameFile: function (file) {
        name = new Date().getTime() + Math.floor((Math.random() * 100) + 1) + '_' + file.name;
        return name;
    },

    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: '/images',
                data: {id: file.customName, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    // console.log(done.message);
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        $("#counter").text("Images: " + total_photos_counter);
        file["customName"] = name;

        // $('.page-heading').slideUp("500");
        // $('#my-dropzone').slideUp("500");
        //
        // $('#TransactionForm').removeAttr("hidden");
        // $('#TransactionForm').slideDown("3000");
            //.slideDown("3000");
        //console.log(done.message);
        alertify.success(' '+done.message);
      //  $("input[type='number']").show();
        //$('#soumettre_image').show();
    }
};
