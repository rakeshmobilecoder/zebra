
 //-----------------------------------PERSONEL REGISTRATION FUNCTIONALITY START HERE-----------------------------------///
//---------------------------------------------------------------------------------------------------------///

 $('form .save_and_proceed').on('click', function(event) {
	          var myid= this.id;
			  console.log(myid+"==============");
	          event.preventDefault();
		       var formData = jQuery('#reg_form_step1').serializeArray();
               jQuery.ajax({
                  url: 'save_and_proceed',
                  method: 'POST',
                  data: formData,
				  cache : false,
                  success: function(result){
					  //console.log(result);
					  if(result.success== false){
						  $.each(result.errors, function( key, value){
							$("#" + key + "_error").text(value[0]);
							
						  })
						  
					  }
                    
				
				} 
            }); 
 });

    // Ajax for our form
        /* $('form.save_and_proceed').on('submit', function(event) {
            event.preventDefault();

            var formData = $(this).serialize(); 
            var formAction = "/save_and_proceed"; 
            var formMethod = "POST"; 

          $.ajaxSetup({
                headers: {
                    'X-XSRF-Token': $('meta[name="_token"]').attr('content')
                }
            }); 

            $.ajax({
                type  : formMethod,
                url   : formAction,
                data  : formData,
                cache : false,

                beforeSend : function() {
                    console.log(formData);
                },

                success : function(data) {

                },

                error : function() {

                }
            });

            console.log(formData);

            return false; 
        }); */