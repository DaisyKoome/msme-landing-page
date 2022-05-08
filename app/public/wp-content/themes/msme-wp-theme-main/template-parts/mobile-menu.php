<div id="mobile_nav_wrapper">
    <div class="mobile-nav-content">
        <div class="header">
            <a href="#" class="menu-close">&times;</a>
            <a href="#" class="logo"><img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo"></a>
        </div>
        <ul class="mobile-nav">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="https://bancassurance.belvadigital.agency/about-us/">About</a>
            </li>
            <li class="has-children">
                <a href="#">Products</a>
                <ul class="secondary-nav is-hidden">
                    <li class="go-back"><a href="#">Main Menu</a></li>
                    <li><a href="<?php echo home_url('/agriculture-insurance'); ?>"><span>Agriculture Insurance</span></a></li>
                    <li><a href="<?php echo home_url('/general-insurance'); ?>"><span>General Insurance</span></a></li>
                    <li><a href="<?php echo home_url('/life-cover'); ?>"><span>Life Cover</span></a></li>
                    <li><a href="<?php echo home_url('/motor-insurance'); ?>"><span>Motor Insurance</span></a></li>
                    <li><a href="<?php echo home_url('/medical-insurance'); ?>"><span>Medical Insurance</span></a></li>
                    <li><a href="<?php echo home_url('/msme-insurance'); ?>"><span>MSME Insurance</span></a></li>
                    <li><a href="<?php echo home_url('/micro-business-cover'); ?>"><span>Micro-Business Cover</span></a></li>
                </ul>
            </li>
            
            <li >
                <a href="<?php echo home_url('/about-us'); ?>">About Us</a>
            </li>

            <li >
                <a href="<?php echo home_url('/partners'); ?>">Underwriters</a>
            </li>
            <li >
                <a href=" <?php echo home_url('/claims'); ?>">Claims</a>
            </li>
            <li>
                <a href=" <?php echo home_url('/faqs'); ?>">FAQs</a>
            </li>
            <li>
                <a href=" <?php echo home_url('/contact-us'); ?>">Contact Us</a>
            </li>
        </ul>
    </div>
</div>