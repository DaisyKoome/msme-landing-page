<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MSME_Co-opBank
 */

?>
<div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="show-mobile footer-mobile py-5">
	<div class="container">
    
    <div class="tabs m-2">
      <div class="tab">
        <input type="checkbox" id="chck1">
        <label class="tab-label" for="chck1">Tools and Resources</label>
        <div class="tab-content">
					<ul class="list-unstyled">
						<li>
							<a href="<?php echo home_url('/loan-calculator/'); ?>">Loan Calculator</a>
						</li>
						<li>
							<a target="_blank" href="https://tenders.go.ke/website/tenders/Index">Government Tenders</a>
						</li>
						<li>
							<a href="#!">Credit Key Fact Statement</a>
						</li>
						
						<li>
							<a href="<?php echo home_url('/downloads/'); ?>">Downloadable Forms</a>
						</li>
					</ul>
        </div>
      </div>
      <div class="tab">
        <input type="checkbox" id="chck2">
        <label class="tab-label" for="chck2">Co-opBank Sites</label>
        <div class="tab-content">
					<ul class="list-unstyled">
						<li>
							<a href="https://www.co-opbank.co.ke/" target="_blank">Co-opBank Main Site</a>
						</li>
						<li>
							<a href="https://diaspora.co-opbank.co.ke/" target="_blank">Diaspora Website</a>
						</li>
						<li>
							<a href="https://goodhome.co.ke/" target="_blank" >Good Home Portal</a>
						</li>
                        <li><a target="_blank" href="https://vehiclesales.co-opbank.co.ke/">Vehicles for Sale Portal</a>
						</li>
						<li>
							<a href="https://insurance.co-opbank.co.ke" target="_blank">BancAssurance</a>
						</li>
						<li>
							<a href="https://foundation.co-opbank.co.ke/" target="_blank">Co-op Foundation</a>
						</li>
                        <li>
							<a target="_blank" href="https://co-opbankss.com/">South Sudan</a>
						</li>						
						<li>
							<a href="https://kingdomsecurities.co.ke/" target="_blank">Kingdom Securities</a>
						</li>
						<li>
							<!-- <a href="https://kingdomsecurities.co.ke/" target="_blank">Kingdom Securities</a> -->
						</li>
					</ul>
        </div>
      </div>
			<div class="tab">
        <input type="checkbox" id="chck3">
        <label class="tab-label" for="chck3">Quick Links</label>
        <div class="tab-content">
					<ul class="list-unstyled">
						<li>
								<a href="<?php echo home_url('/faqs-on-e-loans'); ?>">FAQs on E-loans</a>
							</li>
							<li>
								<a href="<?php echo home_url('/partners/'); ?>">Partners</a>
							</li>
					</ul>
        </div>
      </div>
			<div class="tab">
        <input type="checkbox" id="chck4">
        <label class="tab-label" for="chck4">Talk to Us</label>
        <div class="tab-content">
					<ul class="list-unstyled">
						<li>
							If you have any feedback or complaint,
						</li>
						<li>
							Please talk to us on
						</li>
						<li>
							Call Center Numbers: 020-2776000, 0703027000
						</li>
						<li>
							Email <a href="mailto:customerservice@co-opbank.co.ke">customerservice@co-opbank.co.ke</a>
						</li>
					</ul>
        </div>
      </div>
    </div>
  </div>
	
</div>

<footer style="background:#F5F5F5; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class="hide-mobile">
		<div class="container">
			<div class="row py-5">
				<div class="col-md-3">
					<h4 class="footer-headings" >Tools & Resources</h4>
					<ul class="list-unstyled">
						<li>
							<a href="<?php echo home_url('/loan-calculator/'); ?>">Loan Calculator</a>
						</li>
						<li>
							<a target="_blank" href="https://tenders.go.ke/website/tenders/Index">Government Tenders</a>
						</li>
						<li>
							<a href="#!">Credit Key Fact Statement</a>
						</li>
						
						<li>
							<a href="<?php echo home_url('/downloads/'); ?>">Downloadable Forms</a>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="footer-headings" >Co-op Bank Sites</h4>
					<ul class="list-unstyled">
						<li>
							<a href="https://www.co-opbank.co.ke/" target="_blank">Co-opBank Main Site</a>
						</li>
						<li>
							<a href="https://diaspora.co-opbank.co.ke/" target="_blank">Diaspora Website</a>
						</li>						
						<li>
							<a href="https://goodhome.co.ke/" target="_blank" >Good Home Portal</a>
						</li>
                        <li>
							<a target="_blank" href="https://vehiclesales.co-opbank.co.ke/">Vehicles for Sale Portal</a>
						</li>						
						<li>
							<a href="https://insurance.co-opbank.co.ke" target="_blank">BancAssurance</a>
						</li>
						<li>
							<a href="https://foundation.co-opbank.co.ke/" target="_blank">Co-op Foundation</a>
						</li>
                        <li>
							<a target="_blank" href="https://co-opbankss.com/">South Sudan</a>
						</li>						
						<li>
							<a href="https://kingdomsecurities.co.ke/" target="_blank">Kingdom Securities</a>
						</li>
						<li>
							<!-- <a href="https://kingdomsecurities.co.ke/" target="_blank">Kingdom Securities</a> -->
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<h4 class="footer-headings" >Quick Links</h4>
					<ul class="list-unstyled">
						<li>
							<a href="<?php echo home_url('/faqs-on-e-loans'); ?>">FAQs on E-loans</a>
						</li>
						<li>
								<a href="<?php echo home_url('/partners/'); ?>">Partners</a>
							</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4 class="footer-headings" >Talk To Us</h4>
					<ul class="list-unstyled">
						<li>
							If you have any feedback or complaint,
						</li>
						<li>
							Please talk to us on
						</li>
						<li>
							Call Center Numbers: 020-2776000, 0703027000
						</li>
						<li>
							Email <a href="mailto:customerservice@co-opbank.co.ke">customerservice@co-opbank.co.ke</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
</footer>
	<section class="primary-back footer">
		<div class="container">
			<div class="row py-3">
				<div class="col-md-1">
				<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>
				<img src="<?php echo $image[0]; ?>" class="img-fluid" alt="Responsive image">
					
				</div>
				<div class="col-md-8">
					<p class="text-white footer-2-p pt-3 text-center align-bottom">© 2022 Co-operative Bank. All Rights Reserved. Co-operative Bank is regulated by the Central Bank of Kenya</p>
				</div>
				<div class="col-md-3 d-flex justify-content-end">
					<div class="text-white text-right pt-3">
						
						<a class="text-white encircled" target="_blank" href="https://www.youtube.com/channel/UC_tyHII-be9BxsGHHMnePMw"><i class="d-inline fab fa-youtube fa-lg"></i></a>
						<a class="text-white encircled" target="_blank" href="https://www.instagram.com/coopbankenya/?hl=en"><i class="d-inline fab fa-instagram fa-lg"></i></a>
						<a  class="text-white encircled" target="_blank" href="https://www.facebook.com/pages/Co-op-Bank-Kenya-Official/167665299973840"><i class="d-inline fab fa-facebook fa-lg"></i></a>
						<a  class="text-white encircled" target="_blank" href="https://twitter.com/Coopbankenya">	<i class="d-inline fab fa-twitter fa-lg"></i></a>
						<a class="text-white encircled" target="_blank" href="https://www.linkedin.com/company/62404/"><i class="d-inline fab fa-linkedin fa-lg"></i></a>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="show-mobile primary-back py-2">
		<div class="container">
			<div class="row">
				<div class="col-md py-3 text-center">
					<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						?>
					<img src="<?php echo $image[0]; ?>" class="img-fluid" alt="Responsive image">
				</div>
				<div class="col-md py-3">
					<p class="text-white footer-2-p pt-2 text-center align-bottom">© 2022 Co-operative Bank. All Rights Reserved.</p>

				</div>
				<div class="col-md py-3">
					<div class="text-white text-center">
					<a class="text-white" target="_blank" href="https://www.youtube.com/channel/UC_tyHII-be9BxsGHHMnePMw"><i class="d-inline p-2  fab fa-youtube fa-sm"></i></a>
						<a class="text-white" target="_blank" href="https://www.instagram.com/coopbankenya/?hl=en"><i class="d-inline p-2  fab fa-instagram fa-sm"></i></a>
						<a  class="text-white" target="_blank" href="https://www.facebook.com/pages/Co-op-Bank-Kenya-Official/167665299973840"><i class="d-inline p-2 fab fa-facebook fa-sm"></i></a>
						<a  class="text-white" target="_blank" href="https://twitter.com/Coopbankenya">	<i class="d-inline p-2 fab fa-twitter fa-sm"></i></a>
						<a  class="text-white" target="_blank" href="https://www.linkedin.com/company/62404/">	<i class="d-inline p-2 fab fa-linkedin fa-sm"></i></a>
						<a  class="text-white" target="_blank" href="https://www.tiktok.com/@coopbankenya">	<i class="d-inline p-2 fab fa-tiktok fa-sm"></i></a>
						<a  class="text-white" target="_blank" href="https://www.flickr.com/photos/147086508@N03">	<i class="d-inline p-2 fab fa-flickr fa-sm"></i></a>
						</div>
				</div>
			</div>
		</div>

	</section>
</div><!-- #page -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
	$(document).ready(function(){

/*--- Mobile Menu ---*/
$('.menu-icon').bind('touchstart mousedown', function(e){
		$(".mobile-nav li").removeClass("open");
		$(".sub-nav").slideUp(200);
		$("body").toggleClass("menu-open");
		if($("body").hasClass("search-open")){
				$("body").removeClass("search-open");
		}
		return false;
});

$(".has-children .toggle").click(function(e) {
		var sub_nav = $(this).closest("li").children(".sub-nav");
		if(sub_nav.is(':visible'))
		{
				$(this).closest("li").removeClass("open");
				sub_nav.slideUp(200);
		}
		else
		{
				$(".mobile-nav li").removeClass("open");
				$(this).closest("li").addClass("open");
				$(".sub-nav").slideUp(200);
				sub_nav.slideDown(200);
		}

		return false;

});

$("#content_mask, .menu-close").bind('touchstart mousedown', function(e){
		$(window).scrollTop(0);
		$(".mobile-nav li").removeClass("open");
		$(".sub-nav").slideUp(200);
		$("body").removeClass("menu-open search-open");
		return false;
});

});
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        // Get current url
        // Select an a element that has the matching href and apply a class of 'active'. Also prepend a - to the content of the link
        var url = window.location.href;
        $('.menu a[href="'+url+'"]').addClass('current_page_item');
    });
</script>

<script>(function(d){var s = d.createElement("script");s.setAttribute("data-account", "6M4Lq7V25V");s.setAttribute("src", "https://cdn.userway.org/widget.js");(d.body || d.head).appendChild(s);})(document)</script><noscript>Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a></noscript>

<!-- GetButton.io widget -->
<script type="text/javascript">
    function Calculate() {
    // Extracting value in the amount
    // section in the variable
    const amount = document.querySelector("#amount").value;
    // Extracting value in the interest
    // rate section in the variable
    const rate = document.querySelector("#rate").value;
    // Extracting value in the months
    // section in the variable
    const months = document.querySelector("#months").value;
    // Calculating interest per month
    const interest = (amount * (rate * 0.01)) / months;
    // Calculating total payment
    const total = (amount / months + interest).toFixed(2);
    document.querySelector("#total").innerHTML = "(KES)" + total;
  }	
</script>

<div id="whatsapp-widget" class="ww-right ww-normal ww-yes">  <div class="ww-icon">  <div>    <a class="ww-icon-link" target="_blank" href="https://wa.me/254736690101/?text=Hi MSME Co-op, ">      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">        <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path>      </svg>    </a>    </div>    <div>    <a class="ww-link" rel="nofollow" type="link" href="https://timelines.ai">Timelines.ai</a>    </div>  </div></div><style>  #whatsapp-widget {    position: fixed;    bottom: 10px;    height: max-content;    display: flex;    align-items: center;    gap: 20px;    z-index: 99999999;    visibility: hidden;    transition: all 2s ease 0s;  }  #whatsapp-widget.ww-yes {    visibility: visible;  }  #whatsapp-widget.ww-no {    visibility: hidden !important;  }  #whatsapp-widget .ww-icon {    display: flex;    flex-direction: column;    justify-content: center;    align-items: center;    gap: 5px;    opacity: 0;    animation: grow 3s;    animation-delay: 1s;    animation-fill-mode: forwards;  }  #whatsapp-widget .ww-link {    opacity: 1;    display: none;    bottom: -15px;    text-align: center;    white-space: nowrap;    text-decoration: none;    width: 60px;    font-family: Roboto, "Helvetica Neue", sans-serif;    font-size: 11px;    line-height: 11px;    border: 0px;    max-width: inherit;    color: rgb(175, 175, 175) !important;  }  #whatsapp-widget .ww-link:hover {    border: 0px;    text-decoration: underline !important;    color: rgb(175, 175, 175) !important;  }  #whatsapp-widget .ww-text {    border-radius: 8px;    border: 1px solid #e2e2e2;    cursor: pointer;    word-break: break-word;    background: white;    padding: 1rem;    position: relative;    box-shadow: 2px 2px 15px 2px rgb(0 0 0 / 17%);    opacity: 0;    animation: slide 1s;    animation-delay: 3s;    animation-fill-mode: forwards;    margin-bottom: 15px;    z-index: 100;  }  #whatsapp-widget .ww-arrow {    position: absolute;    background: white;    border-right: 0.5px solid #e2e2e2;    border-bottom: 0.5px solid #e2e2e2;    top: 50%;    width: 20px;    height: 20px;    z-index: -100;  }  #whatsapp-widget.ww-right .ww-arrow {    transform: translateY(-50%) rotate(-45deg);    right: -11px;    left: unset;  }  #whatsapp-widget.ww-left .ww-arrow {    left: -11px;    right: unset;    transform: translateY(-50%) rotate(135deg);  }  #whatsapp-widget.ww-big .ww-text {    font-size: 23px;    line-height: 25px;  }  #whatsapp-widget.ww-medium .ww-text {    font-size: 20px;    line-height: 22px;    padding: 15px;  }  #whatsapp-widget.ww-normal .ww-text {    font-size: 17px;    padding: 12px;    line-height: 19px;  }  #whatsapp-widget svg {    fill: rgb(255, 255, 255);    z-index: 1;    border-radius: 50px;    cursor: pointer;    transition: transform 0.7s ease-in-out;    width: 100%;    height: 100%;    stroke: none;  }  #whatsapp-widget   #whatsapp-widget.ww-right .ww-text::after {    right: -10px;    transform: translateY(-50%) rotate(-45deg);  }  #whatsapp-widget.ww-left .ww-text::after {    left: -10px;    transform: translateY(-50%) rotate(135deg);  }  #whatsapp-widget.ww-left {    left: 20px;    flex-direction: row-reverse;  }  #whatsapp-widget.ww-right {    right: 20px;    flex-direction: row;  }  #whatsapp-widget .ww-icon-link {    padding: 5px;    box-sizing: border-box;    border-radius: 50%;    cursor: pointer;    overflow: hidden;    box-shadow: rgb(0 0 0 / 40%) 2px 2px 6px;    transition: all 0.5s ease 0s;    position: relative;    z-index: 200;    display: block;    border: 0px;    background: rgb(77, 194, 71) !important;  }  #whatsapp-widget.ww-normal .ww-icon-link {    width: 50px;    height: 50px;  }  #whatsapp-widget.ww-medium .ww-icon-link {    height: 65px;    width: 65px;  }  #whatsapp-widget.ww-big .ww-icon-link {    height: 75px;    width: 75px;  }  #whatsapp-widget .ww-icon div {    display: flex;    align-items: center;    justify-content: center;  }  @media (max-width: 768px) {    #whatsapp-widget {      bottom: 5px;    }    #whatsapp-widget .ww-text {      display: none;    }    #whatsapp-widget.ww-right {      right: 5px;      left: unset;    }    #whatsapp-widget.ww-left {      left: 5px;      right: unset;    }  }  @keyframes slide {    from {      bottom: -20px;      opacity: 0;    }    to {      bottom: 0px;      opacity: 1;    }    0% {      opacity: 0;    }    100% {      opacity: 1;    }  }  @keyframes grow {    0% {      -webkit-transform: scale(0);      -moz-transform: scale(0);      -o-transform: scale(0);      -ms-transform: scale(0);      transform: scale(0);    }    50% {      -webkit-transform: scale(1.2);      -moz-transform: scale(1.2);      -o-transform: scale(1.2);      -ms-transform: scale(1.2);      transform: scale(1.2);    }    100% {      -webkit-transform: scale(1);      -moz-transform: scale(1);      -o-transform: scale(1);      -ms-transform: scale(1);      transform: scale(1);      opacity: 1;    }  }</style>


</body>
</html>
