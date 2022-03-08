//submit the form on contact page

jQuery(document).ready(function(){
   // console.log('form loaded');
  
    jQuery("#enquiry-form").submit(function(e){
        e.preventDefault();

         let fname = jQuery("#fname").val();
         let biz_name = jQuery("#biz_name").val();
         let email = jQuery("#email").val();
         let phone = jQuery("#phone").val();
         let message = jQuery("#message").val();
        // jQuery('.modal').addClass('modal-container');
        
        // jQuery('#alert-box').animate({top:'20%'});
        jQuery('.modal-container').css('display','block');
       // jQuery('#close-box').css('display','none');

        jQuery('.alert-box').addClass('--animated-box');
        jQuery('#message-status').text('Sending message...');
jQuery("#alert-title").text('Please wait');
     jQuery.ajax({
         type:'post',
         url:localize._object_url,
         //dataType:'json',
         data:{action:'send_enquiry_email',fname:fname,biz_name:biz_name, email:email, phone:phone, message:message}
         
     }).done((resp)=>{
  
      jQuery('.close-box').css('display','block');
      jQuery('.alert-box').removeClass('--animated-box');
      console.log(resp);

if(resp == 'nullmail not sentfailed'){
    jQuery('#alert-box').removeClass('--animated-box');
    jQuery("#alert-title").text('Thanks for contacting us');

    jQuery('#close-box').css('display','block');

    jQuery('#message-status').text('We could not send you an email, ');
    jQuery('#phone-me').css('display','block');

}
else{
    jQuery("#alert-title").text('Thanks for contacting us');

    jQuery('#message-status').text('Check your email inbox or spam folder, we just sent you a message');
console.log(email);

}

     }).fail((res)=>{
   
       jQuery('.close-box').css('display','block');

        jQuery('#alert-box').removeClass('--animated-box');

        jQuery('#phone-me').css('display','block');

        jQuery('#message-status').text('We could not send an email, ');
    });
     
     });

});

    //alert('welcome')