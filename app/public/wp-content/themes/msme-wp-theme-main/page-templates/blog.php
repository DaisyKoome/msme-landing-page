<?php
/**
 *
 * Template Name: Blogs
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



<section class="msme-background py-5 business-solutionss">
<div class="container">
     <div class="py-3 justify-content-center">
       <div class="text-center" style="float: none; margin: 0 auto;">
          <div class="" style="float: none; margin: 0 auto; display: inline-flex;">
            <a class="breadcrumb-item" href="<?php echo home_url('/'); ?>"/><i class="fas fa-home"></i></a>
            <p class="breadcrumb-item " ><?php echo the_title(); ?></p>
          </div>
       </div>
     </div>
   </div>

  <div class="container">
    <div class="row">

    <?php
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'blog',
      'posts_per_page' => -1,
      // 'paged' => $paged,
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		

    <div class="col-md-4">
		<a href="<?php echo the_permalink(); ?>">
          <div class="card" style="">
            <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" style="
    height: 215px;
    object-fit: cover;
																															box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;

">
            <div class="card-body primary-back" style="
    height: 210px;
    min-height: 210px;
    max-height: 210px;
	margin-top: -7px;
													   box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;

">
              <h5 class="card-title-soll"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"><?php echo the_excerpt(); ?></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol">Read more <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
          </div>
			</a>
      </div>

      <?php endwhile; ?>
     
      
    </div>
      
      
  </div>  
</section>

<?php get_footer(); ?>