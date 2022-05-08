<?php
/**
 *
 * Template Name: Downlaods
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


<section >
  <div class="container py-5">

  <?php
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'downloads',
      'posts_per_page' => -1,
      // 'paged' => $paged,
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="row d-inline">
        <a href="<?php the_field('file'); ?>" download>
          <div class="block p-4 d-flex" style="
    background: #eee;
											   box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
">
            <div class="col-md-9">
              <div class="">
                <h3 class="mb-2 text-dark " style="
    font-size: 18px;
    font-family: Montserrat;
"><?php echo the_title(); ?></h3>
                
              </div>
            </div>
            <div class="col-md-3 my-auto">
				
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-dark" style="
                  height: 30px;
                  width: 30px;
                  align-content: center;
                  float: right;
								  " fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
					</svg>
            </div>
          </div>
         
        </a>
      </div>
    
<?php endwhile; ?>


  </div>
</section>

<?php get_footer(); ?>