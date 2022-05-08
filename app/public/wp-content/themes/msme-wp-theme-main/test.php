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

<section>
  <div class="container">
		<div class="row pb-5">

		<?php if ( have_posts() ) : 
				global $wp_query;
				$total_results = $wp_query->found_posts;

				 ?>

      <div class="col-md-3 d-flex align-items-stretch">
          <div class="card p-2" style="">
            <div class="card-body primary-back ">
              <h5 class="card-title-sol"><?php echo the_title(); ?></h5>
              <div class="card-text-sol"><?php echo the_excerpt(); ?></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo the_permalink(); ?>" class="article-link-sol">Read more <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
          </div>
      </div>
			<?php		
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
?>


    </div>
  </div>
</section>

<?php
// get_sidebar();
get_footer();
