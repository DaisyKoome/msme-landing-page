<?php get_header(); ?>

<section class="masthead-inner background-tint" style="background: url(https://clients.belva.co.ke/msme/wp-content/uploads/2022/02/Web-Banners-2022-MSME-Business.jpg) no-repeat center center;">
  <div class="container">
    <div class="row pt-4">  
      <div class="col-md-12 pt-5">
        <h1 class="masthead-heading mx-auto my-auto"><?php echo the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section>
   <div class="container">
     <div class="pt-5 justify-content-center">
       <div class="text-center" style="float: none; margin: 0 auto;">
          <div class="" style="float: none; margin: 0 auto; display: inline-flex;">
            <a class="breadcrumb-item" href="<?php echo home_url('/'); ?>"/><i class="fas fa-home"></i></a>
            <a class="breadcrumb-item" href="<?php echo home_url('/business-solutions/'); ?>"/>Business Solutions</a>
            <p class="breadcrumb-item"><?php echo the_title(); ?></p>
          </div>
       </div>
     </div>
   </div>
</section>





<section>
  <div class="container">
    <div class="row py-4">
      <div class="col-md-10 mx-auto">
        <div class="single-intro text-dark">
          <?php echo the_content(); ?>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section class="secondary-back">
  <div class="container">
    <div class="row py-4">
        <h1 class="text-center text-white bs-title">Other Solutions</h1>
    </div>
    <div class="row pb-5">

    <?php
				$post_terms = wp_get_object_terms($post->ID, 'account_tax', array('fields'=>'ids'));

                $args = array(
                    'post_type' => array('business_solutions'),
                    'posts_per_page' => 4,
					          'post__not_in' => array($post->ID),
                    'order' => 'ASC',
                );

                $otherproducts_areas = new WP_Query( $args );

                if ( $otherproducts_areas->have_posts() ) {
                    while ( $otherproducts_areas->have_posts() ) {
                        $otherproducts_areas->the_post();

                        ?>

      <div class="col-md-3">
          <div class="card m-2 " style="">
            <div class="card-body primary-back " style="height: 180px;">
              <h5 class="card-title-sol pb-1"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"><?php echo the_excerpt(); ?></div>
            </div>
            <div class="card-body bg-white" >
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol text-dark">Read more <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
          </div>
      </div>

      <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
            <?php wp_reset_postdata()?>


    </div>
  </div>
</section>

<section class="primary-back" >
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="cta-padding">
          <h1 class="text-white py-3 bs-title text-center">Do you have an enquiry? Talk to Us</h1>

          <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>

          <p class="text-white py-3 text-center" >By filling the form, you agree to our <a class="text-white" href="<?php echo home_url('/terms-conditions'); ?>"> terms and conditions</a> </p> 

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
            <div class="card-body primary-back " style="height: 180px;">
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