<?php

get_header();
get_template_part('template-parts/masthead'); 
?>

    <div class="row pt-4">
      <?php get_template_part('template-parts/breadcrumbs-general'); ?>
    </div>

<section class=" py-5 business-solutions-1">
  <div class="container">
    
    <div class="row">

    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'webinars',
      'posts_per_page' => 12,
      'paged' => $paged,
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-md-3">
          <div class="card" style="">
            <img class="card-img-top" src="https://clients.belva.co.ke/msme/wp-content/uploads/2022/01/MSME-Web-Webinar.jpg" alt="<?php echo the_title(); ?>">
            <div class="card-body primary-back webinar-back">
              <h5 class="card-title-soll"><?php echo the_title(); ?></h5>
              <!-- <p class="card-text-sol">POS gadget for improved customer service Easy payment solution Increased sales due to large card base Increased sales due to ... </p> -->
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_field('webinar_link'); ?>" target="_blank" class="article-link-sol">Watch <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </a>
            </div>
          </div>
      </div>

      <?php endwhile; ?>
     
      
    </div>

    <div class="py-4  pagination-nav">
          <?php 
              echo paginate_links( array(
                  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                  'total'        => $query->max_num_pages,
                  'current'      => max( 1, get_query_var( 'paged' ) ),
                  'format'       => '?paged=%#%',
                  'show_all'     => false,
                  'type'         => 'plain',
                  'end_size'     => 2,
                  'mid_size'     => 1,
                  'prev_next'    => true,
                  'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Items', 'text-domain' ) ),
                  'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Items', 'text-domain' ) ),
                  'add_args'     => false,
                  'add_fragment' => '',
              ) );
          ?>
        </div>
      
      
  </div>  
</section>

<?php get_footer(); ?>