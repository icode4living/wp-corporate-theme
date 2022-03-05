<?php
/**
 * wp_corporate functions and definitions
 *
 * @package wp_corporate
 * @since wp_corporate.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

if ( ! function_exists( 'wp_corporate_setup' ) ) :

    add_theme_support( 'post-thumbnails' ); 



    function wp_corporate_setup(){
        /* Add default posts and comments RSS feed links to <head>.
        */
       add_theme_support( 'automatic-feed-links' );

       /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
    }
//php mailer configuration
add_action( 'phpmailer_init', 'my_php_mailer' );

function my_php_mailer($phpmailer){
  $phpmailer->isSMTP();
  $phpmailer->Host = 'mail.quantum-biztech.com';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 26;
  $phpmailer->Username = 'info@quantum-biztech.com';
  $phpmailer->Password = 'Decoded1982';




}
    function  wp_corporate_script(){
/**
     * register the styles
     */
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'page-style', get_template_directory_uri().'/css/page-style.css',array(),
    '1.1','all');
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/main-style.css',array(),
    '1.2','all');

    wp_enqueue_script('nav-control',get_template_directory_uri().'/js/nav-control.js',
    array(), ' ',true);
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',
    array('jquery'), ' ',true);
    //Newsletter Query Endpoint
    wp_enqueue_script('newsletterquery',get_template_directory_uri().'/js/newsletterquery.js',
    array('jquery'), ' ',true);
    //ajax form
    /*$translate_array = array( '_ajax_url' => admin_url( 'admin-ajax.php' ),
    '_ajax_nonce'=> wp_create_nonce( '_ajax_nonce' ));*/
      wp_localize_script( 'main', 'localize', array( '_object_url' => admin_url( 'admin-ajax.php' ),
      '_object_nonce'=> wp_create_nonce( '_object_nonce' )));
      //newsletter localization
      wp_localize_script( 'newsletterquery', 'localize', array( '_object_url' => admin_url( 'admin-ajax.php' ),
      '_object_nonce'=> wp_create_nonce( '_object_nonce' )));
    }

    add_action('wp_enqueue_scripts','wp_corporate_script');

/*custom description */
    function custom_get_excerpt($post_id){
        $temp = $post;
        $post = get_post( $post_id);
        setup_postdata( $post );
        $excerpt = esc_attr( strip_tags(get_the_excerpt()));
        wp_reset_postdata();
        $post = $temp;
            
        return $excerpt;
    }
    function custom_add_meta_description_tag(){
        ?>
        <meta name="description" content="<?php if(is_single() || is_page()){
                                            $excerpt = custom_get_excerpt(get_the_ID());
                                            echo $excerpt;
                                            } else {
                                            bloginfo( 'description' );
                                            }
        ?>"/>

<?php        
    }

    add_action( 'wp-head', 'custom_add_meta_description_tag', 1);
//subscribe User to Newsletter
function subscribe_to_newsletter(){

  /*   if ( !wp_verify_nonce( $_REQUEST['nonce'], "send_enquiry_email_nonce")) {
       exit("No script");
    } */
    
    // Check if action was fired via Ajax call. If yes, JS code will be triggered, else the user is redirected to the post page
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
   $result = json_encode($result);
   echo $result;
}
else {
   header("Location: ".$_SERVER["HTTP_REFERER"]);
}
$client_email = test_input($_POST['client_email']);
//newsletter subscriber
$headersClient = 'Content-Type: text/html; charset=UTF-8' . "\r\n";
$headersClient .= 'From: Quantum Biztech '.'<info@quantum-biztech.com>'. "\r\n";
$subjectClient = 'Newsletter Subscribtion';
$toClient = $client_email;
//Email headers
$headers = 'Content-Type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: Newsletter' . '<'.$client_email.'>'. "\r\n";
$subject = 'Newsletter Subscription ';
$body = "
<style>
tr,td{
  paddind: 10px;
}
.header-panel{
  background-color: #00A5B5;
  color:white;
}
</style>
<table>
<tr class='header-panel'>
          <th><h1>Quantum Biztech</h1>
          </tr>
<tr>
<td>Dear Admin</td>
</tr>
<tr>
<td>Add my <b>email:<a href='mailto:$client_email'>$client_email</a></b> to your mailing list</td>
</tr>
</table>";
//reply
$reply = "<style>
table{
  font-family:Arial;
    border: 1px solid #dcdcdc;
  flex-wrap:wrap;
}
#phone{
  color:green;
}
.header-panel{
  background-color: #070a68;
  color:white;
}
.header-panel h1{
  padding:5px;
  text-align:center;
}
tr{
  margin:10px;
}
td{
padding:10px;}
.message-box p{
  line-height:35px;
  font-size:20px;
}
</style>
<table>
<tr class='header-panel'>
  <th><h1>Quantum Biztech</h1>
    <p>Thanks for Subscribing to our Newsletter</p>
  </th>
</tr>
<tr>
  <td>Hello,</td>
</tr>
<tr class='message-box'>
  <td><p>
	We have just added you to our mailing list.
    </p>
</tr>
<tr>
  <td ><a href='tel:+2348139307480' id='phone'><b> Call Us: 234-813-930-7480</b></a></td>
</tr>
<tr>
  <td>Talk to you soon,<b>Quantum Biztech</b></td>
</td></tr>
</table>
<img src='quantum-biztech.com/mail-receipt'>";
if(wp_mail('info@quantum-biztech.com',$subject,$body,$headers)){
  echo "mail sent";
}
else{
echo "mail not sent";
}
//send mail to client
if(wp_mail($toClient ,$subjectClient,$reply,$headersClient)){
  echo "mail sent";
}
else{
 // $email =   getenv('SMTP_SERVER');

echo "failed";
}

wp_die();

}
//Newsletter Action
add_action( 'wp_ajax_nopriv_subscribe_to_newsletter', 'subscribe_to_newsletter' );
add_action( 'wp_ajax_subscribe_to_newsletter', 'subscribe_to_newsletter' );

    function send_enquiry_email(){

   /*   if ( !wp_verify_nonce( $_REQUEST['nonce'], "send_enquiry_email_nonce")) {
        exit("No script");
     } */
     
     // Check if action was fired via Ajax call. If yes, JS code will be triggered, else the user is redirected to the post page
   if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $result = json_encode($result);
    echo $result;
 }
 else {
    header("Location: ".$_SERVER["HTTP_REFERER"]);
 }
        //Full name
        $fname = test_input($_POST['fname']);
        //Company Name
        $biz_name = test_input($_POST['cname']);
        //Email 
        $email = test_input($_POST['email']);
        //enquiry message
        $message = test_input($_POST['message']);
        $phone = test_input($_POST['phone']);

        /*** send email */
        //Admin mail header
        $headers2 = 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        $headers2 .= 'From: '.$fname . '<'.$email.'>'. "\r\n";
        $subject2 = 'Equiry From: ' .$biz_name;

        //Cleint mail header
        $headersClient2 = 'Content-Type: text/html; charset=UTF-8' . "\r\n";
        $headersClient2 .= 'From: Quantum Biztech '.'<info@quantum-biztech.com>'. "\r\n";
        $subjectClient2 = 'RE: Equiry';
       // $toClient = $email;
        ///reply
        $reply = "<style>
        table{
          font-family:Arial;
            border: 1px solid #dcdcdc;
          flex-wrap:wrap;
        }
        #phone{
          color:green;
        }
        .header-panel{
          background-color: #070a68;
          color:white;
        }
        .header-panel h1{
          padding:5px;
          text-align:center;
        }
        tr{
          margin:10px;
        }
        td{
      padding:10px;}
        .message-box p{
          line-height:35px;
          font-size:20px;
        }
      </style>
      <table>
        <tr class='header-panel'>
          <th><h1>Quantum Biztech</h1>
            <p>Thanks for contacting us</p>
          </th>
        </tr>
        <tr>
          <td>Dear $fname,</td>
        </tr>
        <tr class='message-box'>
          <td><p>We have received your message and would like to thank you for writing to us.If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members. <br>
      Otherwise, we will reply by email as soon as possible.
            </p>
        </tr>
        <tr>
          <td ><a href='tel:+2348139307480' id='phone'><b> Call Us: 234-813-930-7480</b></a></td>
        </tr>
        <tr>
          <td>Talk to you soon,<b>Quantum Biztech</b></td>
      </td></tr>
      </table>
      <img src='quantum-biztech.com/mail-receipt'>";
      
//Admin message
        $body = "<style>
        .borderd, .borderd th, .borderd td{
        border:1px solid #dcdcdc;
        padding:10px;
        
        }
                table{
        border-collapse:collapse;
                  font-family:Arial;
                    border: 1px solid #dcdcdc;
        
                }
                #header-panel{
                  background-color: #493B89;
                  color:white;
        
        
                }
                #header-panel h1{
                  padding:10px;
                  text-align:center;
            width:inherit;
                }
                tr{
                  margin:10px;
                }
                td{
              padding:10px;}
              </style>
              <table>
                <tr id='header-panel'>
                  <th><h1>Web Mailer</h1></th>
                </tr>
        
                <tr>
                  <td>Dear Admin</td>
                </tr>
         <tr>
           <td>Someone just contacted you.</td>
           </tr>
        <tr class='borderd'>
        <th>Name</th>
        <th>Message</th>
        <th>Company's Name</th>
        <th>Mobile Number</th>
        </tr>
        
                <tr class='borderd'>
                  <td>$fname</td>
                
                  <td>$message</td>
          
                  <td>$biz_name</td>
         
                  <td>$phone</td>
        </tr>
        <tr>
        <td>Thanks</td>
        </tr>
              </table>";
      //send mail to admin
if(wp_mail('info@quantum-biztech.com',$subject2,$body,$headers2)){
  echo "mail sent";
}
else{
echo "mail not sent";
}
//send mail to client
if(wp_mail($email ,$subjectClient2,$reply,$headersClient2)){
  echo $email;
}
else{
 // $email =   getenv('SMTP_SERVER');

echo "failed";
}

wp_die();

    }
    add_action( 'wp_ajax_nopriv_send_enquiry_email', 'send_enquiry_email' );
    add_action( 'wp_ajax_send_enquiry_email', 'send_enquiry_email' );
    //clean form
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
   


    //Send enquiry via ajax

/*function ajax_form_scripts() {
  
        
	/*wp_enqueue_script( 'ajax-script', '/js/form_query.js');

	// in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
	wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
  $translate_array = array( '_ajax_url' => admin_url( 'admin-ajax.php' ),
'_ajax_nonce'=> wp_create_nonce( '_ajax_nonce' ));
  wp_localize_script( 'main', 'ajax_form', $translate_array);
}

add_action( 'wp_enqueue_scripts', 'ajax_form_scripts' );*/

endif;
?>
