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
    if (!usernameRegex.test($("#name").val())) {
        alert("worng username")
    }
}