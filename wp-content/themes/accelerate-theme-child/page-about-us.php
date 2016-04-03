<?php
/**
 * The template for the about us page.
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

 get_header(); ?>


 <section class="about-page">
   <?php while ( have_posts() ) : the_post();
   ?>
   <div class="about-page-background">
	    <div class="header-blurb-text">
        <?php echo get_field("header_blurb");?>
    </div>
    </div>
    <?php endwhile; ?>
 </section>
 <section class="about-us">
 	<div class="about-content">
 			<div class="about-intro">
        <h3>Our Services</h3>
        <?php echo the_content(); ?>
      </div>
 		   <ul class = "about-section">
 		      <?php query_posts('post_type=about_items'); ?>
		      <?php $x=0; ?>
 		      <?php while ( have_posts() ) : the_post();
 		         $image_1 = get_field("image");
             $size = "medium";
             $alignClass = ($x % 2)?'about-item-right':'about-item-left';
 		      ?>
 		    <li class = "about-item <?php echo $alignClass; ?>">
 		         <figure>
               <?php echo wp_get_attachment_image( $image_1, $size ); ?>
 				    </figure>
 				    <div class= "about-item-text">
              <h3><?php echo get_the_title(); ?> </h3>
              <?php echo the_content(); ?>
            </div>
 			  </li>
			  <?php $x++; ?>
 			  <?php endwhile; // end of the loop. ?>
 			  <?php wp_reset_query(); // resets the altered query back to the original ?>
 		  </ul>
 		</div>

		<div class='about-page-contact-us'>
			<?php echo get_field('footer_blurb'); ?>
			<a class="button" href="<?php echo home_url(); ?>/contact-us/">Contact Us</a>
		</div>

 <?php get_footer(); ?>
