<?php
get_header(); 
$term = get_queried_object();
?>

<section class="masthead-inner background-tint" style="background: url(https://msme.co-opbank.co.ke/wp-content/uploads/2022/02/Web-Banners-2022-V2-Business-Solutions.jpg) no-repeat center center;">
  <div class="container">
    <div class="row pt-4">  
      <div class="col-md-12 pt-5">
        <h1 class="masthead-heading mx-auto my-auto"><?php echo $term->name ?></h1>
      </div>
    </div>
  </div>
</section>

<?php
?>

<section class="msme-background business msme-events py-4">
  <div class="container">
    <div class="row py-1">
      <section>
   <div class="container">
     <div class="py-3 justify-content-center">
       <div class="text-center" style="float: none; margin: 0 auto;">
          <div class="" style="float: none; margin: 0 auto; display: inline-flex;">
            <a class="breadcrumb-item" href="<?php echo home_url('/'); ?>"/><i class="fas fa-home"></i></a>
              <a class="breadcrumb-item" href="<?php echo home_url('/business-solutions/'); ?>">Business Solutions</a>
            
            <p class="breadcrumb-item"><?php echo $term->name ?></p>
            
            
          </div>
       </div>
     </div>
   </div>
</section>
    </div>


    <div class="row p-3">

    <?php
      $args = array(
        'post_type' => 'business_solutions',
        'posts_per_page' => -1,
        'tax_query' => array(
          array(
            'taxonomy' => 'cat_business_solutions',
            'field' => 'slug',
            'terms' => $term->slug,
          ),
        ),
      );

      $loop = new WP_Query( $args ); 
    ?>
    
    <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
      
    <div class="col-md-3 pt-4"  >
          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;" >
			  <a href="<?php echo the_permalink(); ?>" style=”display:block”>
            <img class="card-img-top" src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>" >
            <div class="card-body primary-back " style="height: 75px; min-height: 75px; max-height: 75px;     margin-top: -7px; ">
              <h5 class="card-title-sol"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol">Read more<svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
				  </a>
          </div>
      </div>

      <?php endwhile; ?>

      </div>
   
   </div>  
 </section>

    <?php
    wp_reset_postdata(); 
get_footer(); 
?>