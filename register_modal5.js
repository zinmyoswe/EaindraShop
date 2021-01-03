$('document').ready(function() {   
  /* handle form validation */  
  $("#register-form").validate({
      rules:
   {
   user_name: {
      required: true,
   minlength: 3
   },
   password: {
   required: true,
   minlength: 8,
   maxlength: 15
   },
   cpassword: {
   required: true,
   equalTo: '#password2'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            user_name: "please enter user name",
            password:{
                      required: "please provide a password",
                      minlength: "password at least have 8 characters"
                     },
            user_email: "please enter a valid email address",
   cpassword:{
      required: "please retype your password",
      equalTo: "password doesn't match !"
       }
       },
    submitHandler: submitForm 
       });  
    /* handle form submit */
    function submitForm() {  
    var data = $("#register-form").serialize();    
    $.ajax({    
    type : 'POST',
    url  : 'register_modal.php',
    data : data,

    success: function(response){

                        // Removing row from HTML Table
            if(response == 1){
              $("#btn-login").html('<img src="ajax-registration-script-with-php-mysql-and-jquery/ajax-loader.gif" /> &nbsp; Signing In ...');
            setTimeout(' window.location.href = "checkout.php?s=2rdf49ak"; ',4000);
            }else{
              $("#btn-login").html('<img src="ajax-registration-script-with-php-mysql-and-jquery/ajax-loader.gif" /> &nbsp; Signing In ...');
              setTimeout(' window.location.href = "checkout.php?s=3rdf49ak"; ',4000);
            }

                    }
    });
    return false;
  }
});