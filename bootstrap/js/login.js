$(document).ready(function(){
    		
  $('#Login-Form').parsley();
  $('#Signin-Form').parsley();
  $('#Forgot-Password-Form').parsley();
    	
  $('#signupModal').click(function(){			    		
  	$('#login-modal-content').fadeOut('fast', function(){
  	   $('#signup-modal-content').fadeIn('fast');
    });
  });
    		   		
  $('#loginModal').click(function(){			    			
    $('#signup-modal-content').fadeOut('fast', function(){
       $('#login-modal-content').fadeIn('fast');
    });
  });
    		
  $('#FPModal').click(function(){			   			
    $('#login-modal-content').fadeOut('fast', function(){
       $('#forgot-password-modal-content').fadeIn('fast');
    });
  });
    		
  $('#loginModal1').click(function(){			    			
    $('#forgot-password-modal-content').fadeOut('fast', function(){
       $('#login-modal-content').fadeIn('fast');
    });
  });
  
});