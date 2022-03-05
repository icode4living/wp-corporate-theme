
<?php
/**
 * Template Name: Blog page
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
    <?php if ( have_posts() ): ?>
<section class="blog-page" style="margin-bottom: 100px;">
<div class="blog">
<!--<div class="title-container">
<span>Blog</span>
<h1>Latest News</h1>
</div>-->
<div class="blog-list">
<?php query_posts('posts_per_page=20');?>
<?php while (have_posts()):the_post();?>
<article class="blog-item" data-background="">
    <img src="<?php the_post_thumbnail_url( ); ?>" alt="<?php the_post_thumbnail_caption();?>">
<div class="blog-content" >
    <span>
<small><?php the_date(); ?></small>
<h1><?php the_title(); ?></h1>
    </span>
</div>
<div class="blog-menu">
<a href="<?php the_permalink() ?>">Read More</a>
</div>
</article>
<?php endwhile ?>
<div class="nav-previous">
<?php previous_posts_link( 'Older posts'  )?>
</div>

<div class="nav-previous">
<?php next_posts_link( 'Newer posts' )?>
</div>
<?php else: ?>
<p><?php _e('Sorry no post')?></p>

<?php endif ?>
</div>
</div>

</div>
</div>
</section>

<?php if(is_front_page()):
    get_footer( 'home' );
    elseif(is_page( 'About' )):
    get_footer( 'about' );
  /*  elseif(is_page('Contact-Us')):
    get_footer( 'contact' );*/
    else:
    get_footer();
    endif; ?>