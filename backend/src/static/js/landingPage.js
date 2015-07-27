function validateEmail() {

    var validEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (validEmail.test($('#forgot-email').val())) {
        $('#forgot-email').css("border-color", "green");
        return true;
       
    }
    else {
        $('#forgot-email').css("border-color", "red");
        return false;
    }

}

$('#forgot-email').keypress(function() {
    validateEmail();
});

$('#firstname').keypress(function() {
     $('#firstname').css("border-color", "blue");
});

$('#lastname').keypress(function() {
     $('#lastname').css("border-color", "blue");
});
$('#usernameR').keypress(function() {
     $('#usernameR').css("border-color", "blue");
});
$('#username').keypress(function() {
     $('#username').css("border-color", "blue");
});
$('#password').keypress(function() {
     $('#password').css("border-color", "blue");
});
$('#passwordR').keypress(function() {
     $('#passwordR').css("border-color", "blue");
     $('#password2R').css("border-color", "blue");
});
$('#email').keypress(function() {
     $('#email').css("border-color", "blue");
});

function validateReg(){
    console.log("I am validating the form");
    returnBool = true;

    if($('#usernameR').val() == "" || $('#usernameR').val() == null){
        $('#usernameR').css("border-color", "red");
        returnBool = false;
    }
    if($('#passwordR').val() == "" || $('#passwordR').val() == null){
        $('#passwordR').css("border-color", "red");
        returnBool = false;
    }
    
    if($('#email').val() == "" || $('#email').val() == null){
        $('#email').css("border-color", "red");
        returnBool = false;
    }

    if($('#accept_tnc').checked == false){
        $('#accept_tnc').css("border-color", "red");
        returnBool = false;
    }
    
    var validEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (validEmail.test($('#email').val())) {
       
    }
    else {
        $('#email').css("border-color", "red");
        returnBool = false;
    }    

    return returnBool;
}

function validateLog(){
    returnBool = true;
    if($('#username').val() == "" || $('#username').val() == null){
        $('#username').css("border-color", "red");
        returnBool = false;
    }
    if($('#password').val() == "" || $('#password').val() == null){
        $('#password').css("border-color", "red");
        returnBool = false;
    }

    return returnBool;
}