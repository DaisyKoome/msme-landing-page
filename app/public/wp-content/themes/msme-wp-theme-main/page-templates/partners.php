<?php
/**
 *
 * Template Name: Partners
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

<section class="container my-3 pb-4 ">
	<div class="py-3 justify-content-center">
       <div class="text-center" style="float: none; margin: 0 auto;">
          <div class="" style="float: none; margin: 0 auto; display: inline-flex;">
            <a class="breadcrumb-item" href="<?php echo home_url('/'); ?>"/><i class="fas fa-home"></i></a>
            <p class="breadcrumb-item " ><?php echo the_title(); ?></p>
          </div>
       </div>
     </div>

<?php
    
    $args = array(
      'post_type' => 'partners',
      'posts_per_page' => -1,

    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

   <div class="row my-4 p-2 mx-auto" style="
    width: 84%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
											background: #f0f0f061;
">
     <div class="col-md-4">
        <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo the_title(); ?>" style="
    width: 100%;
    height: 170px;
    object-fit: contain;
">

     </div>
     <div class="col-md-8 my-auto">
       <h4 class="py-4" style="
    font-size: 18px;
    color: #76bb20;
    font-weight: 400;
							   text-transform: uppercase;
"><?php echo the_title(); ?></h4>
       <p ><?php echo the_content(); ?></p>
     </div>
   </div>

 <?php endwhile; ?>
</section>






<?php get_footer(); ?>