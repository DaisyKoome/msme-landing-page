<?php
/**
 *
 * Template Name: Contact Us
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

<div class="msme-background py-4">
  <?php get_template_part('template-parts/breadcrumbs-general'); ?>
  </div>

<section class="msme-background contact">
  
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="contact-padding">
        <div class="bg-white contact-padding box-shadow">
          
          <div class="container">
            <div class="row py-5">
              <div class="col-md-6 px-3">
                
                <h1 class="contact-title mb-5">Leave us a message</h1>

                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>

              </div>
              <div class="col-md-6">
                <div class="mt-5">
                  <?php echo the_content(); ?>
                </div>

                <div class="py-4">
                  <a class="text-white" target="_blank" href="https://www.youtube.com/channel/UC_tyHII-be9BxsGHHMnePMw"><i class="d-inline p-2  fab fa-youtube fa-lg"></i></a>
                  <a class="text-white" target="_blank" href="https://www.linkedin.com/company/the-cooperative-bank-of-kenya"><i class="d-inline p-2  fab fa-instagram fa-lg"></i></a>
                  <a  class="text-white" target="_blank" href="https://www.facebook.com/pages/Co-op-Bank-Kenya-Official/167665299973840"><i class="d-inline p-2 fab fa-facebook fa-lg"></i></a>
                  <a  class="text-white" target="_blank" href="https://twitter.com/Coopbankenya">	<i class="d-inline p-2 fab fa-twitter fa-lg"></i></a>
					<a  class="text-white" target="_blank" href="https://www.linkedin.com/company/62404/">	<i class="d-inline p-2 fab fa-linkedin fa-lg"></i></a>
                </div>
                <div class="hide-mobile">
                <div style="width: 100%"><iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Cooperative%20House+(Cooperative%20House)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">gps watches</a></iframe></div>
                </div>

               
                <div class="show-mobile">
                  <div class="mapouter"><div class="gmap_canvas"><iframe width="354" height="376" id="gmap_canvas" src="https://maps.google.com/maps?q=Co-operative%20House&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> <br><style>.mapouter{position:relative;text-align:right;height:376px;width:354px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:376px;width:354px;}</style></div></div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>