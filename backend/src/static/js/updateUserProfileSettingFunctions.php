<script type="text/javascript">
      

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
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Job Preference",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
          error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-times fa-lg",
              title:"Job Preference",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
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
          
        dataString = "first_name=" + $('#'+fields[0]).val() + "&last_name=" + $('#'+fields[1]).val() + "&phone=" + $('#'+fields[2]).val() + "&living_place=" + $('#'+fields[3]).val() + "&about_user=" + $('#'+fields[4]).val();
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>" + "setting/updateUserInfo",
          data: dataString,
          cache: false,
          success: function(result){
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Profile Information",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
          error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-times fa-lg",
              title:"Profile Information",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
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
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Update Preferred Job Locations",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
          error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-times fa-lg",
              title:"Update Preferred Job Location",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
          }

        });
      }
      function validateUpdateLocations(){

        console.log("Inside Validate user Preferred location");
        
        
        var locationsArray = []; 
        $('#demo-cs-multiselect1 :selected').each(function(i, selected){ 
          locationsArray[i] = $(selected).val(); 
        });

        //alert(skillsArray); return false;

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
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Update Skills",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
          error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-times fa-lg",
              title:"Update Skills",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
          }

        });
      }
      function validateUpdateSkills(){

        console.log("Inside Validate user Skills");
        
        
        var skillsArray = []; 
        $('#demo-cs-multiselect :selected').each(function(i, selected){ 
          skillsArray[i] = $(selected).val(); 
        });

        //alert(skillsArray); return false;

        //if(genericEmptyFieldValidator(skillsArray)){
          console.log("iam there");
          postUpdateSkills(skillsArray);          

        //}
        return false;
      }

      function postUpdateTechStrength(fields, key){
          var dataString = "";

          if (key != undefined) {
            dataString = "tech_strength=" + $('#'+fields[0]).val() + "&id=" + key ;
          } 
          else {
            dataString = "tech_strength=" + $('#'+fields[0]).val();          }
  
          $.ajax({
                type: "POST",
                url: "<?= $baseUrl ?>" + "setting/updateTechStrength",
                data: dataString,
                cache: false,
                success: function(result){
                  $.niftyNoty({ 
                    type:"success",
                    icon:"fa fa-check fa-lg",
                    title:"Technical Strength",
                    message:result,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
                },
                 error: function(result){
                  console.log(result);
                  $.niftyNoty({ 
                    type:"danger",
                    icon:"fa fa-times fa-lg",
                    title:"Technical Strength",
                    message:result.responseText,
                    focus: true,
                    container:"floating",
                    timer:4000
                  });
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

            postUpdateTechStrength(fields, key);          

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
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Working Experience",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-times fa-lg",
                title:"Working Experience",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
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
              $.niftyNoty({ 
                type:"success",
                icon:"fa fa-check fa-lg",
                title:"Education",
                message:result,
                focus: true,
                container:"floating",
                timer:4000
              });
            },
             error: function(result){
              console.log(result);
              $.niftyNoty({ 
                type:"danger",
                icon:"fa fa-check fa-lg",
                title:"Education",
                message:result.responseText,
                focus: true,
                container:"floating",
                timer:4000
              });
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
            $.niftyNoty({ 
              type:"success",
              icon:"fa fa-check fa-lg",
              title:"Reset Password",
              message:result,
              focus: true,
              container:"floating",
              timer:4000
            });
          },
           error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-check fa-lg",
              title:"Reset Password",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
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

        
        dataString = "title=" + $('#'+fields[0]).val() + "&my_role=" + $('#'+fields[1]).val() + "&tech_skills=" + $('#'+fields[2]).val() + "&team_size=" + $('#'+fields[3]).val() + "&description=" + $('#'+fields[4]).val() + "&start=" + $('#start').val() + "&end=" + $('#end').val() + "&type=" + $('#type').val()  ;
        //console.log(dataString);
        
        $.ajax({
          type: "POST",
          url: "<?= $baseUrl ?>project/createProject",
          data: dataString,
          cache: false,
          success: function(result){
            window.location.href  = result;

          },
           error: function(result){
            console.log(result);
            $.niftyNoty({ 
              type:"danger",
              icon:"fa fa-check fa-lg",
              title:"Project",
              message:result.responseText,
              focus: true,
              container:"floating",
              timer:4000
            });
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