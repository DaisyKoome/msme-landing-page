<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package MSME_Co-opBank
 */

get_header();
?>
		<div class="secondary-back py-5">
			<div class="py-5">
				<?php get_search_form(); ?>
			</div>
			
		</div>

<section >
  <div class="container py-5">

  <?php if ( have_posts() ) : 
				global $wp_query;
				$total_results = $wp_query->found_posts;

				 ?>
      <div class="row d-inline">
        <a href="<?php echo the_permalink(); ?>">
          <div class="block p-5 d-flex" style="
    background: #eee;
">
            <div class="col-md-9">
              <div class="">
                <h3 class="mb-2 " style="
    font-size: 25px;
    color: #215A3F;
    font-family: Montserrat;
"><?php echo the_title(); ?></h3>
                <div class="text-hover" style="
    font-family: Montserrat;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 30px;
    text-decoration: none !important;
    color: #000000;
"><?php echo the_excerpt(); ?></div>
              </div>
            </div>
            <div class="col-md-3 my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" class="hide-mobile my-auto text-dark" style="
    height: 30px;
    width: 30px;
    align-content: center;
    float: right;
"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </div>
          </div>
         
        </a>
      </div>
    

    <?php		
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
?>


  </div>
</section>

<?php
// get_sidebar();
get_footer();
