<?php
/**
 *
 * Template Name: Business Solutions
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
<section class="msme-background business msme-events py-4">
  <div class="container">
    <div class="row py-1">
      <?php get_template_part('template-parts/breadcrumbs-general'); ?>
    </div>

   
    <div class="row p-3">

    <?php
        $categories = get_terms('cat_business_solutions', array('hide_empty' => true) );
        foreach($categories as $category) {
          $category_link = get_term_link( $category );
          $category_name = $category->name;
          $image = get_field('tax_pic', $category);
          
          ?>

      <div class="col-md-4 pt-4"  >
          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;" >
			  <a href="<?php echo $category_link ?>" style=”display:block”>
            <img class="card-img-top" src="<?php echo $image ?>" alt="<?php echo $image ?>" >
            <div class="card-body primary-back " style="height: 75px; min-height: 75px; max-height: 75px;     margin-top: -7px; ">
              <h5 class="card-title-sol"><?php echo $category_name ?></h5>
              <div class="card-text-sol"></div>
            </div>
            <div class="card-body secondary-back">
              <a href="<?php echo $category_link ?>" class="article-link-sol">Read more<svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new m-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></a>
            </div>
				  </a>
          </div>
      </div>


      <?php
        }
      ?>
      
      
      
    </div>
   
  </div>  
</section>

<?php get_footer(); ?>