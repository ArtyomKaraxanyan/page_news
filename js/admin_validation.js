$(document).ready(function () {
    var obj = {};
    $("#button").click(function (e) {
        var is_valid = true;
        var fields = $('input');
        for (var i = 0; i < fields.length; i++) {
            if (($(fields[i]).val().trim().length !== 0)  && ($("#content").val().trim().length !== 0 && $("#description").val().trim().length !== 0)  ){
                console.log("correct");
            }
            else {
                is_valid =  false;
                //alert("Fill all fields.");
                // e.preventDefault();
            }
        }

        if(!is_valid){
            alert("Please, fill all required fields.");
            e.preventDefault();
        }
    });
});




