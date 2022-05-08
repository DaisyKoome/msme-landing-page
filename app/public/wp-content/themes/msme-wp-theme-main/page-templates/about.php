<?php
/**
 *
 * Template Name: About Us
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

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="pb-5 pt-3">
            <div class="about-intro">
              <?php echo the_content(); ?>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>


<section class="secondary-back">
  <div class="container">
    <div class="row ">
      <div class="col-md-4">
        <img src="<?php echo the_field('awards_image'); ?>" class="img-fluid p-4" alt="Responsive image" style="
    border-radius: 37px;
	height: 100% !important;
    object-fit: cover;
">
      </div>
      <div class="col-md-8 py-4">
        <div class="p-4">
          <h4 class="text-white about-title">Awards</h4>

          <div class="about-content py-4">
            <?php echo the_field('awards_content'); ?>
          </div>
        </div>
        
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>