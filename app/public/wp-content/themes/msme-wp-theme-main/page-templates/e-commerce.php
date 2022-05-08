<?php
/**
 *
 * Template Name: E-commerce
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

<div class="row py-5" style=" background-color: #CDDDAE;">
  <?php get_template_part('template-parts/breadcrumbs-general'); ?>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#input_4_7").change(function () {
            if ($(this).val() == "Yes") {
                $("#field_4_8").show();
            } else {
                $("#field_4_8").hide();
            }
        });
    });
</script>


<div class="main-wrapper" style=" background-color: #CDDDAE !important;">
 

  <div class="container wrapper row">
      <div class="col-md-6">
      <img src="<?php echo the_field('logo_content'); ?>" width="311" height="96" class="img-fluid" style="padding-bottom: 20px;" alt="chapa-pay-logo">
      
          <h1 class="main-heading" style="padding-bottom: 20px;"> <?php echo the_field('light_green_title'); ?></h1>
          <?php echo the_field('light_green_content'); ?>
      </div>
      <div class="col-md-6">
          <h4 class="get-started">Get started now by providing your details in the form below:</h4>
          
          <?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>
      </div>
  </div>  
</div>
<div class="py-4">
		<div class="container">
          <h1 class="second-heading"><?php echo the_field('white_title'); ?></h1>
          <?php echo the_field('white_content'); ?>
      </div>
</div>
<div class="third-wrapper green">
<div class="container">
<h1 class="fourth-heading"><?php echo the_field('green_title'); ?></h1>
  <?php echo the_field('green_content'); ?>

</div>
  
</div>

<?php get_footer(); ?>