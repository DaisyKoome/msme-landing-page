<?php

get_header();
?>

<section>
   <div class="container">
     <div class="pt-5 justify-content-center">
       <div class="text-center" style="float: none; margin: 0 auto;">
          <div class="text-center" style="float: none; margin: 0 auto; display: inline-flex;">
            <a class="breadcrumb-item" href="<?php echo home_url('/'); ?>"/><i class="fas fa-home"></i></a>
            <a class="breadcrumb-item" href="<?php echo home_url('/knowledge-hub/blog/'); ?>"/>Blog</a>
            <p class="breadcrumb-item blog-crumb"><?php echo the_title(); ?></p>
          </div>
       </div>
     </div>
   </div>
</section>

<section class="single-blg">
  <div class="container">
    <div class="row pt-5">
      <h4 class="text-center">Business  . <?php the_time('l, F jS, Y') ?></h4>
    </div>
    <div class="row pt-1">
      <h1 class="text-center"><?php echo the_title(); ?></h1>
    </div>
    <div class="row pt-1">
      <img src="<?php echo the_post_thumbnail_url(); ?>" class="single-blg-img text-center" alt="Responsive image">
    </div>
  </div>
</section>

<section class="content-single">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="py-4 single-intro">
             <?php echo the_content(); ?>
          </div>
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>