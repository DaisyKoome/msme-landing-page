<?php
/**
 *
 * Template Name: Loan Calculator
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
    <div class="row">
      <div class="col-md-7 mx-auto">
        <div class="calculator">
    
                <p>Amount KES     :
                    <input id="amount" type="number">
                </p>
                <p>Interest Rate(%)  :
                    <input id="rate" type="number"
                    >
                </p>
                <p>Months to Pay :
                    <input id="months" type="number"
                    >
                </p>
			
			<div class="d-inline">
				<button class="btn btn-msme-2 m-2 d-inline" style="
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 1e-05) 100%), #76bb20;
" onclick="Calculate()">Calculate</button>
                <h2 id="total" class="mt-2 d-inline" style="
    font-family: Montserrat;
    font-style: normal;
    color: black !important;
    font-weight: normal;
    font-size: 24px;
"></h2>
				
			</div>
			
			<p style="
    padding-top: 15px;
    padding-bottom: 15px;
					      font-weight: 500;
">
				*The rates above are indicative, visit a branch near you for more details.


			</p>
			
            </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row pb-2 justify-content-center">
      <div class="text-center">
        <a href="<?php echo home_url('/terms-conditions'); ?>"><button type="button" class="btn btn-msme-2 m-2">Terms and Conditions</button></a>

      </div>
    </div>
  </div>
</section>

<section class="primary-back" >
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-padding">
          <h1 class="text-white py-3 bs-title text-center">Do you have an enquiry? Talk to Us</h1>
          <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>

          <p class="text-white py-3 text-center" >By filling the form, you agree to our terms and conditions</p>

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