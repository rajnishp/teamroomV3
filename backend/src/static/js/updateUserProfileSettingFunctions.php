<script type="text/javascript">
      

      function postUpdateSocialLinks(fields, key){
        var dataString = "";
          
        if (key != undefined) {
          dataString = "facebook_url=" + $('#'+fields[0]).val() + "&twitter_url=" + $('#'+fields[1]).val() + "&likedin_url=" + $('#'+fields[2]).val() + "&id=" + key;
        }
        else {
          dataString = "facebook_url=" + $('#'+fields[0]).val() + "&twitter_url=" + $('#'+fields[1]).val() + "&likedin_url=" + $('#'+fields[2]).val(); 
        }
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateSocialLinks",
          data: dataString,
          cache: false,
          success: function(result){
            success("Social Profile Linking",result.responseText);
          },
          error: function(result){
            error("Social Profile Linking",result.responseText);
          }

        });      
      }

      function validateUpdateSocialLink(key) {

        console.log("Inside Validate Social Links");
        
        fields = ["facebook_url","twitter_url","likedin_url"];

        if(key != undefined ){
           $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;

           });
        }

        if(genericEmptyFieldValidator(fields)){
          console.log("iam there");
          postUpdateSocialLinks(fields, key);

        }
        return false;
      }


      function postUpdateJobPreference(fields, key){
        var dataString = "";

        if (key != undefined) {
          dataString = "current_ctc=" + $('#'+fields[0]).val() + "&expected_ctc=" + $('#'+fields[1]).val() + "&notice_period=" + $('#'+fields[2]).val() + "&id=" + key;
        }
        else {
          dataString = "current_ctc=" + $('#'+fields[0]).val() + "&expected_ctc=" + $('#'+fields[1]).val() + "&notice_period=" + $('#'+fields[2]).val(); 
        }
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateJobPreference",
          data: dataString,
          cache: false,
          success: function(result){
            success("Job Preference",result.responseText);
          },
          error: function(result){
            error("Job Preference",result.responseText);
          }

        });
      }

      function validateUpdateJobPreference(key){

        console.log("Inside Validate Job Preference");
        
        fields = ["current_ctc","expected_ctc","notice_period"];
        
        if(genericEmptyFieldValidator(fields)){
          console.log("iam there");
          postUpdateJobPreference(fields, key);

        }
        return false;
      }

      function postUpdateProfile(fields){
        var dataString = "";

        var collaborateAsArray = [];
        collaborateAsArray = $('input[type=checkbox]:checked').map(function(_, el) {
          return $(el).val();
        }).get();                
        
        dataString = "first_name=" + $('#'+fields[0]).val() + "&last_name=" + $('#'+fields[1]).val() + "&phone=" + $('#'+fields[2]).val() + "&living_place=" + $('#'+fields[3]).val() + "&about_user=" + $('#'+fields[4]).val() + "&collaborateAs=" + collaborateAsArray;
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateUserInfo",
          data: dataString,
          cache: false,
          success: function(result){
            success("Profile Information",result.responseText);
          },
          error: function(result){
            error("Profile Information",result.responseText);
          }

        });      
      }



      function validateUpdateProfile(){

        console.log("Inside Validate user Profile");
        
        fields = ["first_name","last_name","phone","living_place", "about_user"];

        if(genericEmptyFieldValidator(fields)){
          console.log("iam there");
          postUpdateProfile(fields);          

        }
        return false;
      }

      function postUpdateLocations(fields){
        var dataString = "";
        dataString = "locations="+fields;
        //alert (dataString); return false;
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateLocations",
          data: dataString,
          cache: false,
          success: function(result){
            success("Update Preferred Job Location",result.responseText);
          },
          error: function(result){
            error("Update Preferred Job Location",result.responseText);
          }

        });
      }
      function validateUpdateLocations(){

        console.log("Inside Validate user Preferred location");
        
        
        var locationsArray = []; 
        $('#demo-cs-multiselect1 :selected').each(function(i, selected){ 
          locationsArray[i] = $(selected).val(); 
        });

        //if(genericEmptyFieldValidator(skillsArray)){
          console.log("iam there");
          postUpdateLocations(locationsArray);          

        //}
        return false;
      }

      function postUpdateSkills(fields){
        var dataString = "";
        dataString = "skills="+fields;
        //alert (dataString); return false;
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateSkills",
          data: dataString,
          cache: false,
          success: function(result){
            success("Update Skills",result.responseText);
          },
          error: function(result){
            error("Update Skills",result.responseText);
          }

        });
      }
      function validateUpdateSkills(){

        console.log("Inside Validate user Skills");
        
        
        var skillsArray = []; 
        $('#demo-cs-multiselect :selected').each(function(i, selected){ 
          skillsArray[i] = $(selected).val(); 
        });

        //if(genericEmptyFieldValidator(skillsArray)){
         
          postUpdateSkills(skillsArray);          

        //}
        return false;
      }

      

      function postUpdateTechStrength(fields, key){
          var dataString = "";
          //console.log(clone);
          //return false;
          if (key != undefined) {
            dataString = "tech_strength=" + $('#'+fields[0]).val() + "&id=" + key ;
          } 
          else {
            dataString = "tech_strength=" + $('#'+fields[0]).val();
          }
  
          $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "setting/updateTechStrength",
                data: dataString,
                cache: false,
                success: function(result){
                  var message = "";
                  if (key == undefined) {

                    appendCloneToDiv(fields,result, "#tech_strength_div", "#tech_strength_form");
                    message = "Added Successfully";
                  }
                  else {
                    message = "Update Successfully";
                  }
                  success("Technical Strength",message);
                  
                },
                 error: function(result){
                  console.log(result);
                  error("Technical Strength",result.responseText);
                }

          });

      }

      function validateUpdateTechStrength(key){

        console.log("Inside Validate Technical Strength",key);
        fields = ["tech_strength"];

        if(key != undefined ){
           $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;


           });
        }
        if(genericEmptyFieldValidator(fields)){

            postUpdateTechStrength(fields, key  );          

        }
        return false;
      }

      function postUpdateWorkExp(fields, key){
          var dataString = "";

          if (key != undefined) {
            dataString = "company_name=" + $('#'+fields[0]).val() + "&designation=" + $('#'+fields[1]).val() + "&from=" + $('#'+fields[2]).val() + "&to=" + $('#'+fields[3]).val() + "&id=" + key ;
          } 
          else {
            dataString = "company_name=" + $('#'+fields[0]).val() + "&designation=" + $('#'+fields[1]).val() + "&from=" + $('#'+fields[2]).val() + "&to=" + $('#'+fields[3]).val() ;
          }                        
          
          console.log(dataString);

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "setting/updateWorkExp",
            data: dataString,
            cache: false,
            success: function(result){
              var message = "";
              if (key == undefined) {
                appendCloneToDiv(fields,result, "#work_exp_div", "#work_exp_form");
                message = "Added Successfully";
              }
              else {
                message = "Update Successfully";
              }
              success("Work Experience",message);
            },
            error: function(result){
              error("Work Experience", result.responseText);
            }
          });

      }

      function validateUpdateWorkExp(key){
        console.log("Inside Validate Work Experience");
        fields = ["company_name", "designation", "work_from", "work_to"];

        if(key != undefined ){
           $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;

           });
        }
        if (genericEmptyFieldValidator(fields)) {
            postUpdateWorkExp(fields, key);
        }
        return false;
      }


      function postUpdateEducation(fields, key){
          var dataString = "";

          if (key != undefined) {
            dataString = "institute=" + $('#'+fields[0]).val() + "&degree=" + $('#'+fields[1]).val() + "&branch=" + $('#'+fields[2]).val() + "&from=" + $('#'+fields[3]).val() + "&to=" + $('#'+fields[4]).val() + "&id=" + key ;
          } 
          else {
            dataString = "institute=" + $('#'+fields[0]).val() + "&degree=" + $('#'+fields[1]).val() + "&branch=" + $('#'+fields[2]).val() + "&from=" + $('#'+fields[3]).val() + "&to=" + $('#'+fields[4]).val() ;
          }

          $.ajax({
            type: "POST",
            url: "<?= $baseUrl ?>" + "setting/updateEducation",
            data: dataString,
            cache: false,
            success: function(result){
              var message = "";
              if (key == undefined) {
                appendCloneToDiv(fields,result, "#education_div", "#education_form");
                message = "Added Successfully";
              }
              else {
                message = "Update Successfully";
              }
              success("Education",message);
            },
            error: function(result){
              console.log(result);
              error("Education",result.responseText);
            }
          });

      }

      function validateUpdateEducation(key){
        
        console.log("Inside Validate Education");
        
        fields = ["institute", "degree", "branch", "edu_from", "edu_to"];

        if(key != undefined ){
            $.each(fields, function( index, value ) {

              fields[index] = value + "_" +key;

           });
        }

        if (genericEmptyFieldValidator(fields)) {
   
            postUpdateEducation(fields, key);
        }
        return false;

      }

      function postUpdatePassword(fields){
        //check new_password_1 and new_password_2 match or not
        var dataString = "";
            
        dataString = "old_password=" + $('#'+fields[0]).val() + "&new_password_1=" + $('#'+fields[1]).val() + "&new_password_2=" + $('#'+fields[2]).val();

        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updatePassword",
          data: dataString,
          cache: false,
          success: function(result){
            success("Reset Password",message);
          },
          error: function(result){
            console.log(result);
            error("Reset Password",result.responseText);
          }
        });
      }

      function validateUpdatePassword(){
        console.log("Inside Validate Password");
        fields = ["old_password", "new_password_1","new_password_2"];

        if (genericEmptyFieldValidator(fields)) {
            postUpdatePassword(fields);
        }
        return false;
      }


      function postNewProject(fields){
        //fields = ["title","my_role","tech_skills","team_size","description"];
        var dataString = "";

        
        dataString = "title=" + $('#'+fields[0]).val() + "&my_role=" + $('#'+fields[1]).val() + "&tech_skills=" + $('#'+fields[2]).val() + "&team_size=" + $('#'+fields[3]).val() + "&description=" + $('#'+fields[4]).val() + "&start=" + $('#start').val() + "&end=" + $('#end').val() + "&type=" + $('#type').val() + "&status=" + $('#status').val()  ;
        //console.log(dataString);
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>project/createProject",
          data: dataString,
          cache: false,
          success: function(result){
            success("New Project",result.responseText);
          },
           error: function(result){
            error("New Project",result.responseText);
          }
        });
        return false;
      }

      function validateCreateProject(){
        fields = ["title","my_role","tech_skills","team_size","description"];
        
        if (genericEmptyFieldValidator(fields)) {
       
                postNewProject(fields);
        }

        return false;

      }
      </script>