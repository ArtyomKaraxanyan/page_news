
$(document).ready(function () {
    $("input").blur(function () {
        if ($(this).val().trim().length === 0) {
            $(this).css("border-color", "#984242");
        }
        else {
            $(this).css("border-color", "#13B5BF");
        }
    });
    $("textarea").blur(function () {
        if ($(this).val().trim().length === 0) {
            $(this).css("border-color", "#984242");
        }
        else {
            $(this).css("border-color", "#13B5BF");
        }
    });



    $( " #download_image #profile" ).click(function() {
        alert("Your image size`s height and width must be equal each other. ");
    });


});


