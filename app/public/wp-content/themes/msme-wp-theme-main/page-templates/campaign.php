<?php
/**
 *
 * Template Name: Campaign
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CoopBank-MSME
 */
?>

<!--Beginning of Header section-->
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
								<!-- <a href=" echo home_url('/'); " class="active">MSME</a> -->
						</li>
						<li>
							<!--	<a href="echo home_url('/about-us/');"> E-commerce </a> -->
						</li>
				</ul>
		</div>
	</div>

	<header class="" style="box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;">
			<section  style="background-color: #198754 !important;">
  <div class="container">
    <div class="row">
      <div class="col-md-4 txt-align-center mobile-header">
      <a href="https://msme.co-opbank.co.ke/" target="_blank">
        <img src="http://msme.local/wp-content/uploads/2022/05/msme-logo-campaign-page-min.png" class="mobile-nav-msme" style="margin-top:10px;">
        </a>

        <!--<p class="nav-pipe mobile-nav-pipe">|</p>-->

        <a href="https://www.co-opbank.co.ke/" target="_blank">
          <img src="https://www.co-opbank.co.ke/wp-content/uploads/2021/11/coop-bank-logo.png" class="mobile-nav-coop img-fluid py-3" alt="Responsive image" style="width: 266px;position: absolute;
            margin-left: 30px; margin-top: 10px;">
        </a>
      </div>
<!--        <div class="col-md-8 button-header" style="margin-top:20px;">
        <button style="margin-right:30px; background: #76BC21; border-radius: 3px; border: #76BC21; color:white !important; font-weight: 700;
        font-size: 16px; line-height: 28px; display: flex; align-items: center; text-align: center;">
        <a href="https://msme.co-opbank.co.ke/" target="_blank" style="color:white;">
          MSME
        </button>
        <button style="background: #76BC21; border-radius: 3px; border: #76BC21; color:white !important; font-weight: 700;
        font-size: 16px; line-height: 28px; display: flex; align-items: center; text-align: center;">
        <a href="https://campaign.co-opbank.co.ke/ecommerce/" target="_blank" style="color:white;">
          E-Commerce
        </button>
  </div>-->
    </div>
  </div>
	</section>
	</header>

	<!-- content_mask -->
	<div class=""></div>
	<div id="content_mask"></div>
    <!-- content_mask end -->
	


<!--get_header();
// End of header section -->


<header class="masthead background-tint" style=" background: url('http://msme.local/wp-content/uploads/2022/05/msme-landing-page-banner-min.png') no-repeat center center; box-shadow: rgba(0, 0, 0, 0.25) 0px 5px 15px;"  >
  <div class="container h-100">
    <div class="row h-100 align-items-center py-5">
      <div class="col-12 text-center">
        <h1 class="fw-ligh text-white">Co-op Bank Business Solutions<br></h1>
        <h2>support entrepreneurs to manage and also</h2>
        <h2>grow their businesses.</h2>
      </div>
    </div>
  </div>
</header>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    
    $(function () {
        $("#input_4_7").change(function () {
            if ($(this).val() == " ") {
                $("#field_4_8").hide();
            } else {
                $("#field_4_8").show();
                $("#field_4_10").hide();
                $("#field_4_11").hide();
            }
        });
    });

    $(function () {
        $("#input_4_8").change(function () {
            if ($(this).val() == "#input_4_8") {
                $("#field_4_8").show();
            } else {
                window.location.href = "http://msme.local/";
                $("#field_4_8").hide();
                $("#field_4_10").hide();
                $("#field_4_11").hide();

            }
        });
    });
    $(function () {
        $("#input_4_9").change(function () {
            if ($(this).val() == "Yes") {
                $("#field_4_10").show();
                $("#field_4_11").hide();
            }
        });
    });

    $(function () {
        $("#input_4_10").change(function () {
            if ($(this).val() == "No") {
              $("#field_4_11").show();
              $("#field_4_10").hide();
            }
        });
    });
</script>

<section class="heading-3" style="padding-bottom:0px !important;">
<div class="container h-60">
    <div class="row h-100 align-items-center">
        <div class="d-flex justify-content-center" data-js-reload="field_4_7">
        <h2 class="own-business-heading">Do you own a business?</h2>
        <input type="radio" id="input_4_7" class="own-business-heading" style="margin-top: 18px;
        margin-left: 20px;" name="own_biz" value="Yes">
        <label for="bizyes" class="own-business-heading" style="color:white; margin-top: 12px;
        margin-left: 20px;">Yes</label><br>
        <input type="radio" id="input_4_8" class="own-business-heading" style="margin-top: 18px;
        margin-left: 20px;" name="own_biz" value="No">
        <label for="bizno" class="own-business-heading" style="margin-top: 12px;
        margin-left: 20px;color:white;">No</label><br>
        </div>
  </div>
  </div>
</section>



<section class="heading-3" style="padding-top:0px !important; display:none;" id="field_4_8">
<div class="container h-60">
    <div class="row h-100 align-items-center">
        <div class="d-flex justify-content-center" data-js-reload="field_4_9">
        <h2 class="own-business-heading">Are you a Co-op MSME account holder?</h2>
        <input type="radio" id="input_4_9" style="margin-top: 18px;
        margin-left: 20px;" name="acc" value="Yes">
        <label for="bizyes" style="color:white; margin-top: 12px;
        margin-left: 20px;">Yes</label><br>
        <input type="radio" id="input_4_10" style="margin-top: 18px;
        margin-left: 20px;" name="acc" value="No">
        <label for="bizno"  style="margin-top: 12px;
        margin-left: 20px;color:white;">No</label><br>
        </div>
  </div>
</section>

<section class="msme-background contact" id="field_4_10" style="display:none"> 
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="contact-padding">
        <div class="bg-white contact-padding box-shadow">
          
          <div class="container">
            <div class="row py-5">
              <div class="col-md-12 px-3">
                
                <h1 class="contact-title mb-5">Get Started</h1>

                <?php echo do_shortcode( '[gravityform id="5" title="false" description="false"]' ); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="msme-background contact" id="field_4_11" style="display:none"> 
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="contact-padding">
        <div class="bg-white contact-padding box-shadow">
          
          <div class="container">
            <div class="row py-5">
              <div class="col-md-12 px-3">
                
                <h1 class="contact-title mb-5">Share your details to open a Co-op Bank MSME account</h1>

                <?php echo do_shortcode( '[gravityform id="7" title="false" description="false"]' ); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container h-100 h-biz-body">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="fw-ligh text-white">Solutions for Businesses<br></h1>
      </div>
    </div>
  </div>

<section class="msme-background msme-events events-hover">
<div class="container">
  <div class="row">
     <div class="co-md-10">
     <div class="p-5">
        <div class="tabs">
        
          <div class="tab">
            <input type="checkbox" class="d-none" id="1">
            <label class="tab-label" for="1">Business Loans</label>
            <div class="tab-content">
              <p>Our MSME Current Account comes with different packages that suit your business needs. The available packages include; </p>
              <div class="container">
              <div class="row">
              <div class="col-md-4">
              <div class="card" style="">
                <img class="card-img-top" src="http://msme.local/wp-content/uploads/2022/05/img-placeholder.png" alt="<?php echo the_title(); ?>" style="height: 215px;object-fit: cover;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <div class="card-body primary-back" style="height: 210px; min-height: 210px; max-height: 210px; margin-top: -7px;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <h5 class="card-title-soll">MSME Term Loan</h5>
              <div class="card-text-sol"><p>This is the money you can borrow for your business for a period of time to help your business expand, repayable to upto 60 months.</p></div>
            </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="card" style="">
                <img class="card-img-top" src="http://msme.local/wp-content/uploads/2022/05/img-placeholder.png" alt="<?php echo the_title(); ?>" style="height: 215px;object-fit: cover;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <div class="card-body primary-back" style="height: 210px; min-height: 210px; max-height: 210px; margin-top: -7px;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <h5 class="card-title-soll">MSME Overdraft/Working Capital</h5>
              <div class="card-text-sol"><p>Business doesn’t need to stop when payments are delayed. Access our overdraft facilities which allow you to withdraw your current account beyond zero.</p></div>
            </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="card" style="">
                <img class="card-img-top" src="http://msme.local/wp-content/uploads/2022/05/img-placeholder.png" alt="<?php echo the_title(); ?>" style="height: 215px;object-fit: cover;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <div class="card-body primary-back" style="height: 210px; min-height: 210px; max-height: 210px; margin-top: -7px;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
              <h5 class="card-title-soll">Mobile Loans</h5>
              <div class="card-text-sol"><p>Get quick biashara loans  via MCo-opCash or *667#</p></div>
            </div>
            </div>
          </div>
          </div>
          </div>
          </div>
         
        </div>
      </div>
     </div>
  </div>
  </div>
  </section>

<!--<section class="primary-back footer">
		<div class="container">
			<div class="row py-3">
        <div class="col-md-10 d-flex justify-content-start">
        <p class="footer">For further assistance, contact us through  020 227 6000 | 0703027000 or customerservice@co-opbank.co.ke</p>
      </div>
				<div class="col-md-2 d-flex justify-content-end">
					<div class="text-white ">
						
						<a class="text-white encircled" target="_blank" href="https://www.youtube.com/channel/UC_tyHII-be9BxsGHHMnePMw"><i class="d-inline fab fa-youtube fa-lg"></i></a>
						<a class="text-white encircled" target="_blank" href="https://www.instagram.com/coopbankenya/?hl=en"><i class="d-inline fab fa-instagram fa-lg"></i></a>
						<a  class="text-white encircled" target="_blank" href="https://www.facebook.com/pages/Co-op-Bank-Kenya-Official/167665299973840"><i class="d-inline fab fa-facebook fa-lg"></i></a>
						<a  class="text-white encircled" target="_blank" href="https://twitter.com/Coopbankenya">	<i class="d-inline fab fa-twitter fa-lg"></i></a>
						<a class="text-white encircled" target="_blank" href="https://www.linkedin.com/company/62404/"><i class="d-inline fab fa-linkedin fa-lg"></i></a>
					
					</div>
				</div>
			</div>
		</div>
	</section>-->


  