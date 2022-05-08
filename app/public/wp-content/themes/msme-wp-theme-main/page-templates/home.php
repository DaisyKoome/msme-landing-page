<?php
/**
 *
 * Template Name: Home
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
// get_template_part('template-parts/header-without-menu'); 
?>
<header class="masthead background-tint" style=" background: url(<?php echo the_post_thumbnail_url(); ?>) no-repeat center center; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"  >
  <div class="container h-100">
    <div class="row h-100 align-items-center py-5">
      <div class="col-12 text-center">
        <h1 class="fw-ligh text-white">Supporting MSME'S In <br/> Kenya To Grow</h1>
        <div class="row">
          <div class="col-md-8 mx-auto">
            <p class="lead-msme py-3 text-white"><?php the_field('subtitles'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 mx-auto">
            <div class="d-inline home-button">
              <a href="<?php echo home_url('/business_solutions/msme-accounts/'); ?>"><button type="button" class="btn btn-msme m-2">MSME Accounts</button></a>
              <a href="<?php echo home_url('/business-solution/'); ?>"><button type="button" class="btn btn-msme m-2">Business Solutions</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="msme-background msme-events events-hover py-5">
  <div class="container">
    <div class="row py-4 justify-content-end">
      <div class="col-md-6">
        <h1 class="home-event">Events</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="all-event pt-3">
          <a href="<?php echo home_url('/events/'); ?>">
            <h4 class="all-events d-inline">View All Events</h4>
            <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
         </div>
       
      </div>
    </div>
    <div class="row">
      <?php
      // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'post_type' => 'featured_events',
        'posts_per_page' => 3,
        // 'paged' => $paged,
      );

      $query = new WP_Query( $args ); ?>
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-md-4">
        <a href="<?php the_field('link'); ?>">
          <div class="card" style="border-radius: 10px; margin: 10px;">
            <div class="tag">
              <p><?php the_field('recent_or_upcoming'); ?></p>
            </div>

            <img class="card-img-top" 
            
            src="
                <?php echo the_post_thumbnail_url(); ?>
              " 
            
            alt="Card image cap">

            <div class="card-body">
              <div class="d-flex ">
                <div class="">
                  <div class="">
                    <div class="row mx-auto">
                      <p class="events-month mx-auto"><?php the_field('month'); ?></p>
                    </div>
                    <div class="row mx-auto my-3">
                      <p class="events-day mx-auto"><?php the_field('day'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="my-auto">
                  <p class="events-title"><?php echo the_title(); ?></p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
     
      <?php endwhile; ?>
      
      
      
    </div>
    <div class="show-mobile">
      <div class="row">
        <div class="text-center">
            <div class="all-eventz pt-3">
              <a href="<?php echo home_url('/events/'); ?>">
                <h4 class="all-eventz d-inline">View All Events</h4>
                <i class="fas fa-arrow-right pl-3 d-inline fa-lg msme-primary-text"></i>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="bg-white msme-events py-3">
  <div class="container">
    <div class="row py-4 justify-content-end">
      <div class="col-md-6">
        <h1 class="home-event">Knowledge Hub</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="all-event pt-3">
          <a href="<?php echo home_url('/knowledge-hub/webinars/'); ?>">
            <h4 class="all-events d-inline">View Knowledge Hub</h4>
            <!-- <i class="fas fa-arrow-right pl-3 d-inline fa-lg msme-primary-text"></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg>
          </a>
         </div>
       
      </div>
    </div>
    <div class="row p-3">
    <?php
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $args = array(
      'post_type' => 'blog',
      'posts_per_page' => 1,
      // 'paged' => $paged,
    );

    $query = new WP_Query( $args ); ?>
    <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-md-6">
   
        <div class="card">
          <div class="row no-gutters">
              <div class="col-md-5">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid knowledge-hub-image" alt="">
              </div>
              <div class="col-md-7" style="padding:0 !important;">
                  <div class="card-block">
                    <div class="show-mobile">
                      <div class="d-flex justify-content-between">
                        <div class="mr-auto">
                          <p class="content-more-info">BUSINESS</p>
                        </div>
                        <div class="ml-auto">
                          <p class="content-more-info">1 month ago</p>
                        </div>
                      </div>
                    </div>
                      <h4 class="card-tag-msme">ARTICLE</h4>
                      <p class="card-text-msme my-3"><?php echo the_title(); ?></p>
                      <div class="card-subtext-msme "><?php echo the_excerpt(); ?></div>
                      <a href="<?php echo the_permalink(); ?>" class="article-link "><p class="my-3">Read more <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
</svg></p></a>
                     
                      
                  </div>
              </div>
          </div>
        </div>
       
      </div>

      <?php endwhile; ?>

      <div class="col-md-6">
        <div class="card">
          <div class="row no-gutters">
              <div class="col-md-5">
                  <img src="<?php echo home_url('/'); ?>wp-content/uploads/2022/01/232342.jpg" class="img-fluid knowledge-hub-image" alt="">
              </div>
              <div class="col-md-7" style="padding:0 !important; ">
                  <div class="card-block">
                    <div class="show-mobile">
                      <div class="d-flex justify-content-between">
                        <div class="mr-auto">
                          <p class="content-more-info">BUSINESS</p>
                        </div>
                        <div class="ml-auto">
                          <p class="content-more-info">1 month ago</p>
                        </div>
                      </div>
                    </div>
                      <h4 class="card-tag-msme">VIDEO</h4>
                      <p class="card-text-msme my-3">Understanding Profitability in Business</p>
                      <p class="card-subtext-msme">Profitability is the primary goal of all business ventures. Without profitability the business will not survive in the long run. So measuring current and past profitability and projecting future profitability is very important.</p>
                      <a href="https://www.youtube.com/watch?v=yvymoN0YGPM" target="_blank" class="article-link"><p class="my-3">Watch Video<i class="fas mx-2 fa-play"></i></p></a>
                      
                      
                  </div>
              </div>
          </div>
        </div>
      </div>

      
      
      
      
    </div>
    <div class="show-mobile">
      <div class="row">
        <div class="text-center">
            <div class="all-eventz pt-3">
              <a href=""<?php echo home_url('/events/'); ?>"">
                <h4 class="all-eventz d-inline">View All Events</h4>
                <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<section class="msme-background business msme-events py-5">
  <div class="container">
    <div class="row py-4 justify-content-end">
      <div class="col-md-6">
        <h1 class="home-event">Business Solutions</h1>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <div class="all-event pt-3">
          <a href="<?php echo home_url('/business-solutions/'); ?>">
            <h4 class="all-events d-inline">View All Solutions</h4>
            <!-- <i class="fas fa-arrow-right pl-3 d-inline fa-lg msme-primary-text"></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
         </div>
       
      </div>
    </div>
    <div class="row p-3">

<!-- Loop begins here -->
<?php
        $categories = get_terms('cat_business_solutions', array('hide_empty' => true));
        foreach($categories as $category) {
          $category_link = get_term_link( $category );
          $category_name = $category->name;
          $image = get_field('tax_pic', $category);
          
          ?>
      <div class="col-md-4 pt-4"  >
          <div class="card" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;" >
			  <a href="<?php echo $category_link ?>" style=”display:block”>
            <img class="card-img-top" src="<?php echo $image ?>" alt="<?php echo $image ?>" style="
    height: 180px;
    object-fit: cover;
" >
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
<!-- Loop ends here -->
      
      
      
    </div>
    <div class="show-mobile">
      <div class="row">
        <div class="text-center">
            <div class="all-eventz pt-3">
              <a href="<?php echo home_url('/business-solutions/'); ?>">
                <h4 class="all-eventz d-inline">View All Solutions</h4>
                
                <svg xmlns="http://www.w3.org/2000/svg" class="left-arrow-new pl-3 pb-1 d-inline msme-primary-text" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>  
</section>

<?php get_footer(); ?>