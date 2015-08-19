<script type="text/javascript">
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
/*$('#usernameR').keypress(function() {
     $('#usernameR').css("border-color", "blue");
});*/
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
/*$('#email').keypress(function() {
     $('#email').css("border-color", "blue");
});*/

function validateReg(){
    console.log("I am validating the form");
    returnBool = true;
    usernameValue = $('#usernameR').val();
    var validEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var term_n_cond = $("#agree_tc").checked;

    if($('#email').val() == "" || $('#email').val() == null){
        $('#email').css("border-color", "red");
        return false;
        //returnBool = false;
    }
    //$('#email').onblur=emailCheck();
    //var validEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    else if (!validEmail.test($('#email').val())) {   
    /*}
    else if {*/
        $('#email').css("border-color", "red");
        return false;
        //returnBool = false;
    }

    else if($('#usernameR').val() == "" || $('#usernameR').val() == null){
        $('#usernameR').css("border-color", "red");
        //returnBool = false;
        return false;
    }

    else if(usernameValue.length < 6 ){
        //error("Username Length", "Username Length shoulb be atleast 6");
        $('#usernameR').css("border-color", "red");
        $('#usernameR').innerHTML = "<small> Username length Must be atleast 6</small>";
        return false;
        //returnBool = false;
    }
    //$('#usernameR').onblur=usernameCheck();

    else if($('#passwordR').val() == "" || $('#passwordR').val() == null){
        $('#passwordR').css("border-color", "red");
        return false;
        //returnBool = false;
    }
    
    else if(term_n_cond === false){
        $('#accept_tnc').css("border-color", "red");
        console.log("i am not checked");
        return false;
        //returnBool = false;
    }
    
    
    else {
        console.log("insode  validateRegCheck at end before retirn");   
        var dataString = "";
          
        dataString = "username=" + $('#usernameR').val() + "&email=" + $('#email').val() + "&passwordR=" + $('#passwordR').val(); 

        $.ajax({
          type: "POST",
          url: "<?= $this-> baseUrl?>"+"home/signup",
          data: dataString,
          cache: false,
          success: function(result){
            //console.log(result);
            //if(result){
                //alert(result);
                console.log("inside if result set checked true");
                location.reload();
            //}
            //else {
                //alert(result);
                //console.log("inside else result not set");
                //location.reload();
            //}
          },
          error: function(result){
            return false;
          }

        });
    }
    return false;
    //return returnBool;
}


function validateLog(){
    returnBool = true;
    if($('#username').val() == "" || $('#username').val() == null){
        $('#username').css("border-color", "red");
        //returnBool = false;
        return false;
    }
    else if($('#password').val() == "" || $('#password').val() == null){
        $('#password').css("border-color", "red");
        //returnBool = false;
        return false;
    }
    else {
        var dataString = "";      
        dataString = "username=" + $('#username').val() + "&password=" + $('#password').val(); 

        $.ajax({
          type: "POST",
          url: "<?= $this-> baseUrl?>"+"home/login",
          data: dataString,
          cache: false,
          success: function(result){
            location.reload();
          },
          error: function(result){

          }

        });
    }
    return false;
    //return returnBool;
}
</script>