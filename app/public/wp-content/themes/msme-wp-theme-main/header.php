<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSME_Co-opBank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56157985-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-56157985-6');
    </script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<div id="mobile_nav_wrapper">
		<div class="mobile-nav-content">
				<div class="header">
						<a href="#" class="menu-close">&times;</a>
				</div>
				<ul class="mobile-nav">
						<li>
								<a href="<?php echo home_url('/'); ?>" class="active">Home</a>
						</li>
						<li>
								<a href="<?php echo home_url('/about-us/'); ?>">About Us</a>
						</li>
						<li>
								<a href="<?php echo home_url('/events/'); ?>">Events</a>
						</li>
						<li class="has-children">
								<a href="#" class="toggle">Knowledge Hub</a>
								<ul class="sub-nav">
										<li><a href="<?php echo home_url('/knowledge-hub/webinars'); ?>">Webinars</a></li>
										<li><a href="<?php echo home_url('/knowledge-hub/blog'); ?>">Blog</a></li>
								</ul>
						</li>
						<li>
								<a href="<?php echo home_url('/business-solutions'); ?>">Business Solutions</a>
						</li>
						<li>
								<a href="<?php echo home_url('/contact-us/'); ?>">Contact Us</a>
						</li>
				</ul>
		</div>
	</div>

	<header class="" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
			<section  style="background-color: #198754 !important;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 txt-align-center">
        <a href="https://www.co-opbank.co.ke/" target="_blank">
          <img src="https://www.co-opbank.co.ke/wp-content/uploads/2021/11/coop-bank-logo.png" class="img-fluid py-3" alt="Responsive image" style="width: 266px;">
        </a>
      </div>
      <div class="col-md-5">
  
      </div>
      <div class="col-md-3  d-flex justify-content-center">
        <a href="https://onlinebanking.co-opbank.co.ke/"target="_blank">
          <button type="button" style="width: 100%;" class="btn btn-msme mt-2 offset-btn"><i class="fas fa-user pl-3 pr-4" style="
    margin-right: 7px;
" aria-hidden="true"></i>Log in to Internet Banking</button>
        </a>
      </div>
    </div>
  </div>
		
	</section>


		<nav class="navbar navbar-expand-lg primary-back">
			<div class="container py-2">
				<div class="col-md-1">
					 <a href="<?php echo home_url('/'); ?>" class="d-inline">
						<img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" class="img-fluid d-inline" alt="Responsive image">
					</a>
					
					
				</div>
				
				<div class="col-md-10">
						<?php
						wp_nav_menu( array(
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'navbarSupportedContent',
								'menu_class'        => 'nav navbar-nav mx-auto',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>

				</div>
				<div class="col-md-1 d-flex">
					
				
					<a href="<?php echo home_url('/search'); ?>" >
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 svg-search text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
						</svg>
					</a>

					<div class="menu-icon show-1000"><span class="icon-main-menu" style="    right: 15px;
    position: absolute;
    top: 32px;"></span></div>
					
					
				</div>
			</div>
		</nav>
	</header>

	<!-- content_mask -->
	<div class=""></div>
	<div id="content_mask"></div>
    <!-- content_mask end -->
	
