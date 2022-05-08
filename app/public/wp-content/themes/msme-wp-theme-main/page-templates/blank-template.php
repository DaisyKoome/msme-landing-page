<?php
/**
 *
 * Template Name: Blank 
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CoopBank-MSME
 */

get_header();
get_template_part('template-parts/masthead'); 
?>

<div class="row py-4">
  <?php get_template_part('template-parts/breadcrumbs-general'); ?>
</div>

<section>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-11 single-blank-template">
      `<?php echo the_content(); ?>
      </div>
    </div>
  </div>
</section>

<section class="primary-back" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-9">
        <div class="cta-padding">
          <h1 class="text-white py-3 bs-title text-center">Do you have an enquiry? Talk to Us</h1>
          <?php echo do_shortcode( '[gravityform id="1" title="false" ajax="true" description="false"]' ); ?>

          <p class="text-white py-3 text-center" >By filling the form, you agree to our <a class="text-white" href="<?php echo home_url('/terms-conditions'); ?>"> terms and conditions</a></p>

        </div>
      </div>

    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row py-4">
        <h1 class="text-center bs-title">Visited Products</h1>
    </div>
    <div class="row pb-5">

    <?php 
	    if (get_post_type( $post->ID ) == 'business_solutions' )
		    update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
		?>

    <?php
    $args = array(
          'post_type' => 'business_solutions',
					'posts_per_page' => 4,
					'meta_key' => '_last_viewed',
					'orderby' => 'meta_value',
					'order' => 'DESC'
      
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-md-3">
          <div class="card p-2" style="">
            <div class="card-body primary-back " style="height: 200px;">
              <h5 class="card-title-sol pb-1"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"><?php echo the_excerpt(); ?></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol">Read more <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
          </div>
      </div>

      <?php endwhile; ?>


    </div>
  </div>
</section>

<?php get_footer(); ?>