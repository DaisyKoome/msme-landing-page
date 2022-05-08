<?php
/**
 *
 * Template Name: Knowledge Hub
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

<div class="container">
    <div class="row py-4 justify-content-end">
      <div class="col-md-6">
        <h1 class="home-event">Events</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="all-event pt-3">
          <a href="<?php echo home_url('/blogs/'); ?>">
            <h4 class="all-events d-inline">View All Blogs</h4>
            <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
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
      'posts_per_page' => 3,
      // 'paged' => $paged,
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="col-md-4">
          <div class="card" style="">
            <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" style="
    height: 215px;
    object-fit: cover;
">
            <div class="card-body primary-back" style="
    height: 210px;
    min-height: 210px;
    max-height: 210px;
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
      </div>

      <?php endwhile; ?>
     
      
    </div>
      
      
  </div>  
</section>


<div class="container">
    <div class="row py-4 justify-content-end">
      <div class="col-md-6">
        <h1 class="home-event">Business Solutions</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="all-event pt-3">
          <a href="<?php echo home_url('/business-solutions/'); ?>">
            <h4 class="all-events d-inline">View All Blogs</h4>
            <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
         </div>
       
      </div>
    </div>
</div>

<section class="msme-background business msme-events py-4">
  <div class="container">


    
    <div class="row p-3">

    <?php
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'business_solutions',
      'posts_per_page' => -1,
      // 'paged' => $paged,
    );

    // $args['search_filter_id'] = 135;


    $query = new WP_Query( $args ); ?>

    
    
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-md-3 pt-4">
          <div class="card" style="">
            <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" >
            <div class="card-body primary-back " style="height: 75px; min-height: 75px; max-height: 75px; ">
              <h5 class="card-title-sol"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol">Read more<svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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