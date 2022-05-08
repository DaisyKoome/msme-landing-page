<?php
/**
 *
 * Template Name: Thank You
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
?>

<section class="py-5" >
  <div class="container">
  <div class="row p-3">
    <div class="text-center">
      <div class="">
        <i class="secondary-back text-white p-4 fa-7x fas fa-check" style="border-radius: 94px;"></i>
      </div>
    </div>
  </div>
  <div class="row justify-content-center ">
    <div class="col-md-8 mx-auto ">
      <h2 class="text-center py-3" style="
    color: #215A3F;
    font-weight: 700;
    font-size: 41px;
    margin-bottom: 20px;
    text-transform: uppercase;
    font-family: 'Montserrat', Arial, sans-serif;
" >THANK YOU</h2>
      <p class="text-center" style="
    font-family: Montserrat;
    font-style: normal;
    font-weight: 600;
    font-size: 17px;
    line-height: 30px;
    padding-bottom: 20px;
">Your request has been successfully submited. One of our customer care representatives will get in touch with you soon.</p>

    </div>
  </div>
  <div class="row justify-content-center mx-auto container">
    <div class="col-md-7 text-center">
      <a href="<?php echo home_url('/'); ?>" class="primary-btn-msme mx-auto text-center ">Return To Home Page</a>
    </div>
  

  </div>

  </div>
  
</section>

<?php get_footer(); ?>