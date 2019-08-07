var total_photos_counter = 0;
var name = "";
Dropzone.options.myDropzone = {
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    previewTemplate: document.querySelector('#preview').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Supprimer Le Fichier',
    dictFileTooBig: 'Fichier supperieur à 16 MB',
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
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        $("#counter").text("Images: " + total_photos_counter);
        file["customName"] = name;
        alertify.success(' '+done.message);
        $('.page-heading').slideUp("slow");
        $('#my-dropzone').slideUp("slow");
        $('#TransactionForm').slideUp("3000").slideDown("3000");
    }
};
