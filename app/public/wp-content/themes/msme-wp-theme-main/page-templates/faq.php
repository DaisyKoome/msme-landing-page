<?php
/**
 *
 * Template Name: FAQ
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

<div class="row pt-4">
      <?php get_template_part('template-parts/breadcrumbs-general'); ?>
    </div>

<section>
  <div class="container">
  <div class="row">
     <div class="co-md-10">
     <div class="p-5">
        <div class="tabs">
          
          <?php
          // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'post_type' => 'faqs',
			  'order' => 'ASC',
            'posts_per_page' => -1,
            // 'paged' => $paged,
          );
          
          $query = new WP_Query( $args ); ?>

        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        
          <div class="tab">
            <input type="checkbox" class="d-none" id="<?php echo $post->ID;?>">
            <label class="tab-label" for="<?php echo $post->ID;?>"><?php echo the_title(); ?></label>
            <div class="tab-content">
              <?php echo the_content(); ?>
            </div>
          </div>

          <?php endwhile; ?>
         
        </div>
      </div>
     </div>
  </div>

  </div>
  

</section>


<?php get_footer(); ?>