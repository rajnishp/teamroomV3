function genericEmptyFieldValidator(fields){
    returnBool = true;
    $.each(fields, function( index, value ) {
      console.log(value);
      if($('#'+value).val() == "" || $('#'+value).val() == null){
        $('#'+value).keypress(function() {
            genericEmptyFieldValidator([value]);
        });

        $('#'+value).css("border-color", "red");
        
        returnBool = false;
      }else{
        $('#'+value).css("border-color", "blue");
      }
    });

    return returnBool;
  }