
 //-----------------------------------PERSONEL REGISTRATION FUNCTIONALITY START HERE-----------------------------------///
//---------------------------------------------------------------------------------------------------------///

/* jQuery('.save_and_proceed').click(function(e){
	
               e.preventDefault();
               jQuery.ajax({
                  url: '/save_and_proceed',
                  method: 'post',
                  data: {
                     email: jQuery('#agency_email').val(),
                     password: jQuery('#agency_pwd').val(),
                     "_token": jQuery('#csrf_token').val(),
                   },
                  success: function(result){
                    if($.isEmptyObject(result.errors)){
                        window.location.href ="/agent_profile";
                    }else{
                        printErrorMsg(result.errors);
                    } 


                }});
    }); */

    // Ajax for our form
        $('form.save_and_proceed').on('submit', function(event) {
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
        });