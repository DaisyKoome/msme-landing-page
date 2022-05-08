<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MSME_Co-opBank
 */

get_header();
?>



<section class="py-5" >
  <div class="container">
  <div class="row p-3">
    <div class="text-center">
      <div class="">
        <i class="secondary-back text-white p-4 fa-7x fas fa-times" style="border-radius: 172px;HEIGHT: 100%;WIDTH: 165PX;"></i>
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
" >UH OH ! YOU ARE LOST</h2>
      <p class="text-center" style="
    font-family: Montserrat;
    font-style: normal;
    font-weight: 600;
    font-size: 17px;
    line-height: 30px;
    padding-bottom: 20px;
">Maybe this page moved? Got deleted? Is hiding out in quarantine? Never existed in the first place?</p>

    </div>
  </div>
  <div class="row justify-content-center mx-auto container">
    <div class="col-md-7 text-center">
      <a href="<?php echo home_url('/'); ?>" class="primary-btn-msme mx-auto text-center ">Return To Home Page</a>
    </div>
  

  </div>

  </div>
  
</section>

<?php
get_footer();