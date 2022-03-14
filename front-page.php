<?php if(is_front_page()):
    get_header( 'home' );
    elseif(is_page( 'About' )):
    get_header( 'about' );
    elseif(is_page('Contact')):
    get_header( 'contact' );
    else:
    get_header();
    endif; ?>
<div class="main">
<div class="our-service">
<div class="flex-container">
<div class="article">
<span id="subtitle">Our Services</span>
<h1>Transform your business with tech innovation</h1>
</div>
<div class="sm-grid-container">

<div class="sm-grid-item">
<img src="<?php echo get_theme_file_uri('asset/icons8-attack-85.png')?>" alt="Cyber threat Solution">

<h2>Cyber Threat Management Solution</h2>
<!--<p>Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
</p>-->

</div>
<div class="sm-grid-item">
<img src="<?php echo get_theme_file_uri('asset/icons8-project-management-100.png')?>" alt="Project Management">

<h2>Project Management</h2>
<!--<p>Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
</p>-->

</div>
<div class="sm-grid-item">
<img src="<?php echo get_theme_file_uri('asset/icons8-power-off-button-50.png')?>" alt="Power Solution">

<h2>Power Solutions</h2>
<!--<p>Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
</p>-->

</div>
<div class="sm-grid-item">
<img src="<?php echo get_theme_file_uri('asset/icons8-software-100.png')?>" alt="Software development">
<h2>Software Development</h2>
<!--<p>Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
Lorem ipsum dolor sit amet Lorem ipsum sit amet Lorem ipsum
</p>-->

</div>
</div>
</div>
</div>

</div>
<div class="section-3">
<div class="bgsection-1">
<article>
<img src="<?php echo get_theme_file_uri('asset/icons8-idea-100.png')?>" alt="Quantum can help you build your project">
<h1>Have a project in mind?</h1>
<h1>Let's get to work</h1>
<p>Find out how we can help you build your project</p>
<a href="#">Get in touch &#x27A1;</a>
</article>
</div>
<div class="bgsection-2">
<article>
<img src="<?php echo get_theme_file_uri('asset/icons8-value-100.png')?>" alt="Quantum Values">

<h1>Our Values</h1>
<ul class="item-list">
    <li><i class="fas fa-check"></i> Excellence</li>
    <li><i class="fas fa-check"></i> Trust and confidence build-up </li>
    <li><i class="fas fa-check"></i> Innovation  </li>
    <li><i class="fas fa-check"></i> Transparency </li>
    <li><i class="fas fa-check"></i>  Teamwork</li>
    <li><i class="fas fa-check"></i> Professionalism and ethics </li>

    <li><i class="fas fa-check"></i>  Collective responsibility and leadership</li>




</ul>

</article>
</div>
</div>
<div class="section-4">
<div class="main-title">
<span id="subtitle">Why Choose us</span>
<h1>Our Expertise</h1>
</div>
<div class="lg-grid-container">
<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Network and System Integration</h1>
</article>
<button data-quote-btn="Network and System Integration">Get a Quote</button>
</div>

<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Disaster Recovery and Storage Solution</h1>
</article>
<button data-quote-btn="Disaster Recovery and Storage Solution">Get a Quote</button>

</div>

<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Cloud Computing Design and Migration Strategy
</h1>
</article>
<button data-quote-btn="Cloud Computing Design and Migration Strategy">Get a Quote</button>

</div>

<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Hardware &amp; Software at competitive price
</h1>
</article>
<button data-quote-btn="Hardware/Software at competitive price">Get a Quote</button>

</div>
<!--<div class="">
<article class="title-section">
<img src="..." alt="...">
<h1>Lorem ipsum dolor sit amet Lorem </h1>
</article>
</div>-->

<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Server &amp; Desktop Infrastructure Support
</h1>
</article>
<button data-quote-btn="Server/Desktop Infrastructure Support">Get a Quote</button>

</div>
<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Project Management.
</h1>
</article>
<button data-quote-btn="Project Management">Get a Quote</button>

</div>

<div class="bg-white">
<article class="title-section">
<!--<img src="..." alt="...">-->
<h1>Intranet &amp; Internet application Development</h1>
</article>
<button data-quote-btn="Intranet/Internet application Development">Get a Quote</button>

</div>
</div>
</div>
<div class="about-content">
    <div class="flex-container">
        <div class="about-us">
            <img src="<?php echo get_theme_file_uri('asset/networking.jpg')?>" alt="about Quantum biz-tech">
</div>
    <div class="about-us about-background">
        <span id="subtitle">About us</span>
<h1>Our sole aim is to provide innovative technological solutions for small, 
    medium and large enterprises</h1>
<p>We have well trained and experienced experts in various field of ICT and over the years established both local and international partnership with which we have
     used to serve our client to the fullest.</p>
        <!---- ABOUT us -->
        </div>
        </div>
</div>
<?php if ( has_post_thumbnail() ): ?>

<div class="blog">
<div class="title-container">
<span>Blog</span>
<h1>Latest News</h1>
</div>
<div class="blog-list">
<?php query_posts('posts_per_page=3');?>
<?php while (have_posts()):the_post();?>
<article class="blog-item" data-background="">
    <img src="<?php the_post_thumbnail_url( ); ?>" alt="<?php the_post_thumbnail_caption();?>">
<div class="blog-content" >
<small><?php the_date(); ?></small>
<h1><?php the_title(); ?></h1>
</div>
<div class="blog-menu">
<a href="<?php the_permalink() ?>">Read More</a>
</div>
</article>
<?php endwhile ?>
<?php endif ?>

</div>

</div>
<div class="client-section">
<h1>Our Clients</h1>
<p>Our sole aim is to provide innovative technological  <br>for all businesses</p>
<div class="client-logo">

<img src="<?php echo get_theme_file_uri('asset/newlogo/impact magz.png')?>" alt="...">
<img src="<?php echo get_theme_file_uri('asset/newlogo/kalgate.jpg')?>" alt="kalgate logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/Helpline-logo-Official.png')?>" alt="Helpline logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/mobitel.jpg')?>" alt="Mobitel logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/afex.png')?>" alt="Afex logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/pajuno.png')?>" alt="Pajuno logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/unbird.png')?>" alt="unbird logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/ansa.png')?>" alt="ansa logo">
<img src="<?php echo get_theme_file_uri('asset/newlogo/interconnect.jpg')?>" alt="interconnect logo">
</div>
<div class="form-area">
<div clas="contact-content">
    <div class="address">
        <span>info@quantum-biztech.com</span>
<h1>Get in Touch with Us By Feeling this Form</h1>

</div>
</div>
<div clas="contact-content">
    <form class="lg-form" id="enquiry-form">
        <div class="grid-area">
<div class="form-group">
    <label for="fname">Full Name </label>
<input type="text" required placeholder="Enter your Full Name" name="fname" id="fname" required>
</div>
<div class="form-group">
    <label for="bname">Business Name </label>
<input type="text" required placeholder="Enter your Company name" name="biz_name" id="biz_name"required>
</div>
<div class="form-group">
    <label for="phone">Mobile Number </label>

    <input type="phone" required placeholder="Mobile Number" name="phone" id="phone" required>
    </div>
<div class="form-group">
    <label for="email">Email </label>

    <input type="text" required placeholder="Email" name="email" id="email" required>
    </div>
</div>
    <div class="form-group">
        <label for="message">Message</label>

        <textarea rows="10" cols="5" id="message" required></textarea>
        </div>
        <button>Send Message <i class="far fa-paper-plane"></i></button>
    </form>
</div>
</div>
<div class="parter-logo">
    <div style="text-align: center;">
<h1>Our Tech Partners</h1>
    </div>
    <div class="image-container">
    <img src="<?php echo get_theme_file_uri('asset/partner/veeam-logo.svg')?>" alt="Veeam logo" >
    <img src="<?php echo get_theme_file_uri('asset/partner/microsoft.png')?>" alt="Microsoft logo" >

    <img src="<?php echo get_theme_file_uri('asset/partner/icons8-dell-100.png')?>" 
    alt="Dell logo" style="height:100px; width:100px">
    <img src="<?php echo get_theme_file_uri('asset/partner/hp-logo.png')?>" alt="HP logo" style="height:100px; width:100px" >

    <img src="<?php echo get_theme_file_uri('asset/partner/redhat-logo.svg')?>" alt="Red hat logo" class="svg-logo">
    <img src="<?php echo get_theme_file_uri('asset/partner/fortinet-logo.svg')?>" alt="fortinet logo" class="svg-logo">
    <img src="<?php echo get_theme_file_uri('asset/partner/vmware-logo.svg')?>" alt="VM ware logo" class="svg-logo">
    <img src="<?php echo get_theme_file_uri('asset/partner/Sophos_logo.svg')?>" alt="Sophos logo" 
    class="xm-logo2" >
    <img src="<?php echo get_theme_file_uri('asset/partner/icons8-amazon-web-services-100.png')?>" alt="Amazon logo">

    <img src="<?php echo get_theme_file_uri('asset/partner/cisco-logo.png')?>" alt="Cisco logo" class="">
    </div>
</div>
</div>
<div class="modal-container">
<div class="alert-box" id="alert-box">
    <button id="close-box" class="close-box">&times;</button>
<h1 id="alert-title"></h1>
<img src="<?php echo get_theme_file_uri('asset/icons8-send-email-48.png')?>" alt="Quantum " />
<span><p id="message-status"> </p><a href="tel:2348139307480" id="phone-me">Call us: 234-813-930-7480</a></span>
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