<?php
/**
 * Template Name: About page
 * 
 * @package Wordpress
 * @subpackage Wp_corporate_theme
 */
?>
<?php if(is_front_page()):
    get_header( 'home' );
    elseif(is_page( 'About' )):
    get_header( 'about' );
  /*  elseif(is_page('Contact-Us')):
    get_header( 'contact' );*/
    else:
    get_header();
    endif; ?>

<!--Page content-->

<div class="section-4">

<div class="content-section">
    <p><b>Quantum BizTech (QBT) Nigeria Limited</b> is the parent company of <b>Digispace Solutions</b>.
         We are an indigenous information and communications technology company, established to provide full range of ICT services, customized to meets any business need. We are registered with the corporate affairs commission (CAC) of Nigeria with head office in Lagos Nigeria. 
         <span id="readmore">Read more &plus;</span>
         
        </p>
        <p id="more">
            Our sole aim is to provide innovative technological solutions for small, medium and large enterprises. We pride ourselves on being large enough to offer wide range of worldwide services; small enough to maintain efficient and personal services to all our customers with the emphasis on service delivery and customer satisfaction.
            We have well trained and experienced experts in various field of ICT and over the years established both local and international partnership with which we have used to serve our client to the fullest.
             </p> 
    </div>
<div class="flex-container">
<article class="about-us">
<img src="<?php echo get_theme_file_uri('asset/vision.jpg')?>" alt="Quantum Biz tech" class="section-image">

</article>

<article class="about-us">
<h1>Our Vision</h1>
<p> To become the best ICT solutions provider in Africa 
    achieving 100% customer satisfaction in service delivery.
</p>
</article>
</div>

<div class="flex-container">
    <article class="about-us">
        <h1>Our Mission</h1>
        <p> To deliver premium innovative business solutions through a 
            strong commitment to exceptional talent development, excellence, 
            responsiveness and integrity. 
        </p>
        </article>
    <article class="img-section">
    <img src="<?php echo get_theme_file_uri('asset/mission.jpg')?>" alt="Quantum Mission" class="section-image">
    
    </article>
    
    </div>
</div>
    <div class="parter-logo">
    <div style="text-align: center;">
<h1>Our Tech Partners</h1>
    </div>
    <div class="image-container">
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/icons8-amazon-web-services-100.png')?>" alt="Amazon logo">
    <h2>Amazon</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/microsoft.png')?>" alt="Microsoft logo">
    <h2>Microsoft</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/icons8-hp-100.png')?>" alt="HP logo">
    <h2>HP</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/icons8-dell-100.png')?>" alt="Dell logo">
    <h2>Dell</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/redhat-logo.svg')?>" alt="Red hat logo" class="svg-logo">
    <h2>Red hat</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/fortinet-logo.svg')?>" alt="fortinet logo" class="svg-logo">
    <h2>Red hat</h2>
</div>
<div class="image-box">
    <img src="<?php echo get_theme_file_uri('asset/partner/vmware-logo.svg')?>" alt="VM ware logo" class="svg-logo">
    <h2>VM ware</h2>
</div>
    </div>
</div>
</div>

<?php if(is_front_page()):
    get_footer( 'home' );
    elseif(is_page( 'About' )):
    get_footer( 'about' );
  /*  elseif(is_page('Contact-Us')):
    get_footer( 'contact' );*/
    else:
    get_footer();
    endif; ?>