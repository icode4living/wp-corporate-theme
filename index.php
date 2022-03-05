<?php if(is_front_page()):
    get_header( 'home' );
    elseif(is_page( 'About' )):
    get_header( 'about' );
  /*  elseif(is_page('Contact-Us')):
    get_header( 'contact' );*/
    else:
    get_header();
    endif; ?>
<!--content area-->
<div class="content-section blog-container">
<?php if(have_posts()):while(have_posts()): the_post();?>
    <div class="blog-title">
        <h1><?php the_title() ?></h1>
    </div>
    <div class="blog-details">
<small style="color:green"><?php the_date() ?></small>
<span><?php the_category() ?></span>
    </div>
    <?php endwhile ?>
    <?php endif ?>
    <?php if ( has_post_thumbnail() ): ?>
    <div class="blog-content">
<img src="<?php the_post_thumbnail_url( ); ?>" alt="<?php the_post_thumbnail_caption() ?>">
<?php endif ?>
<article>
<?php if(have_posts()):while(have_posts()): the_post();?>

<p id="p"><?php the_content()?></p>
<?php endwhile ?>
    <?php endif ?>
</article>
    </div>
</div>
<?php if(is_front_page()):
    get_footer( 'home' );
    elseif(is_page( 'About' )):
    get_footer( 'about' );
   /* elseif(is_page('Contact-Us')):
    get_footer( 'contact' );*/
    else:
    get_footer();
    endif; ?>