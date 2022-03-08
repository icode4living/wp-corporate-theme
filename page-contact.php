<?php
/**
 * Template Name: Contact page
 * 
 * @package Wordpress
 * @subpackage Wp_corporate_theme
 */
?>
<?php if(is_front_page()):
    get_header( 'home' );
    elseif(is_page( 'About' )):
    get_header( 'about' );
  elseif(is_page('Contact')):
    get_header( 'contact' );
    else:
    get_header();
    endif; ?>

<!--Page content-->

<div class="content-section">
    <div class="flex-content">
        <article>
<div class="--card">
<h2>
    Call us now
</h2>

    <a href="tel:2348139307480">
        <img src="<?php echo get_theme_file_uri('asset/icons8-ringing-phone-48.png')?>" alt="Quantum " />
        234-813-930-7480</a>
</div>
<div class="--card">
    <h2>
        Send an Email
    </h2>
    
        <a href="mailto:info@quantum-biztech.com">
            <img src="<?php echo get_theme_file_uri('asset/icons8-send-email-48.png')?>" alt="Quantum " />
            info@quantum-biztech.com</a>
    </div>
<div class="--card">
    <h2>
        Visit Our Office
    </h2>

           <p><img src="<?php echo get_theme_file_uri('asset/icons8-address-64.png')?>" alt="Quantum " />
            28 Olaleye Street, Somolu Lagos, Nigeria

           </p> 
    </div>

        </article>

        <article class="form-card">
            <div class="title-item">
<h1>Let's Do Business</h1>
<p>Get started by filling this form</p>
            </div>
<form id="enquiry-form"> 
<div class="form-areas">
<label>Name</label>
<input type="text" name="fname" placeholder="Full Name" id="fname"required>
</div>

<div class="form-areas">
    <label>Bussiness Name</label>
    <input type="text" name="biz_name" placeholder="Company Name" id="biz_name"required>
    </div>

    <div class="form-areas">
        <label>Email</label>
        <input type="email" name="email" placeholder="Bussiness Email" id="email" required>
        </div>

        <div class="form-areas">
            <label>Mobile Number</label>
            <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-areas">
                <label>Message</label>

                <textarea rows="10" cols="55" id="message"></textarea>
            </div>
            <div class="form-areas">
<button >Submit</button>
            </div>
        </form>
    
</article>
</div>
<div class="modal-container">
<div class="alert-box" id="alert-box">
    <button id="close-box" class="close-box">&times;</button>
<h1 id="alert-title"></h1>
<img src="<?php echo get_theme_file_uri('asset/sendemail.png')?>" alt="Quantum " />
<span><p id="message-status"> </p><a href="tel:2348139307480" id="phone-me">Call us: 234-813-930-7480</a></span>
</div>
</div>
</div>


<?php if(is_front_page()):
    get_footer( 'home' );
    elseif(is_page( 'About' )):
    get_footer( 'about' );
  elseif(is_page('Contact')):
    get_footer( 'contact' );
    else:
    get_footer();
    endif; ?>