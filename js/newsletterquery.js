//submit the form on contact page

jQuery(document).ready(function(){
   
     jQuery("#newsletter-form").submit(function(e){
         e.preventDefault();
          let email = jQuery("#client_email").val();
         jQuery('.modal-container2').css('display','block');
 
         jQuery('.alert-box2').addClass('--animated-box');
         jQuery('#message-status2').text('Adding your email to our mailing list..');
 jQuery("#alert-title2").text('Please wait');
      jQuery.ajax({
          type:'post',
          url:localize._object_url,
          //dataType:'json',
          data:{action:'subscribe_to_newsletter', client_email:email}
          
      }).done((resp)=>{
    
 console.log(resp);
       jQuery('.close-box2').css('display','block');
       jQuery('.alert-box2').removeClass('--animated-box2');
 
 if(resp == 'nullmail not sentfailed'){
     jQuery('#alert-box2').removeClass('--animated-box');
 
     jQuery('#close-box2').css('display','block');
 
     jQuery('#message-status2').text('Something went wrong, try again please');
    // jQuery('#phone-me').css('display','block');
 
 }
 else{
     jQuery("#alert-title2").text('You are awesome!');
     jQuery('#alert-box2').removeClass('--animated-box');
     jQuery('#message-status2').text('Check your email inbox or spam folder, we just sent you a message');
     jQuery('#close-box2').css('display','block');

 }
 
      }).fail((resp)=>{
        
        jQuery('.close-box2').css('display','block');
 
         jQuery('#alert-box2').removeClass('--animated-box');
 
         jQuery('#phone-me2').css('display','block');
 
         jQuery('#message-status2').text('We could not send an email, ');
     });
      
      });
 
 });
 
     //alert('welcome')