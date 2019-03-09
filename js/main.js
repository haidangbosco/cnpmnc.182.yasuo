(function() {
    $("#signup").prop('disabled', true);;
    $("#agree-term").click(function(){
        if($(this).is(":checked")){
            $("#signup").prop("disabled", false)
            $("#signup").addClass("form-submit-hover")
        }
        else if($(this).is(":not(:checked)")){
            $("#signup").prop("disabled", true)
            $("#signup").removeClass("form-submit-hover")
        }
    });
})();

function validateForm() {
    var usernameRegex = /^[a-zA-Z0-9]+$/;
    var emailRegex =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!usernameRegex.test($("#name").val())) {
        alert("worng username")
    }
    if (!emailRegex.test($("#email").val())) {
        alert("worng email")
    }
}