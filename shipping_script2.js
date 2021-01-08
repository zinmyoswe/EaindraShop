$('document').ready(function()
{ 
     /* validation */
	 $("#ship2-form").validate({
      rules:
	  {
			name: {
			required: true,
			minlength: 5
			},
			street: "required",
			country: "required",
			zip: "required",
			city: "required",
			phone: "required",
	   },
       messages:
	   {
            name:{
                      required: "please enter your name",
                      minlength: "please enter full name"
                     },
            street: "Please enter your address",
      		country: "Please choose your country",
      		zip: "Please enter Zip Code",
      		city: "Please enter City",
      		phone: "Please enter Phone",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#ship2-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'shpping_info_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-ship").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-ship").html('<img src="btn-ajax-loader.gif" /> &nbsp; Signing In ...');
						setTimeout(' window.location.href = "home.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-ship").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});