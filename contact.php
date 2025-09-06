<!DOCTYPE html>
<html lang="en">
<?php $title='Unlimited Air Solutions'?>
<?php include './partials/head.php'?>
<body>
<!-- Preloader Start -->
<?php include './partials/preloader.php'?>

<!-- header top Area Start -->
<?php include './partials/header-top.php'?>

<!-- Header Section Start -->
<?php include './partials/header.php'?>


<!--<< Breadcrumb Section Start >>-->
<?php 
    $img='assets/images/breadcrumb.jpg';
    $Title='Home';
    $Title2 = 'Contact Us';
?>
<?php include './partials/page-header.php'?>

<!--<< Breadcrumb Section End >>-->

<!--===========================
        Start Contact Form
===========================-->
<section class="contact_form_area contact_us section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-right contact_details">
                    <div class="hero-title-with-shape">
                        <h4 class="heading_with_border">Contact with us</h4>
                        <h1>We offer 24/7 emergency service to all of our customers</h1>
                    </div><!--end .hero-title-with-shape-->
                    <p>There are many variations of passages of new lorem ipsum available, but the majority have suffered.</p>
                    <div class="contact_location_box">
                        <div class="contact_location_map">
                            <span class="icon-location"></span>
                            <p>66 broklyn street, <br>new york</p>
                        </div><!--end .contact_location_map-->
                        <div class="contact_location_map contact_location_call">
                            <span class="icon-contact_call"></span>
                            <p>contact@uas.services <br>(305) 908-2526</p>
                        </div><!--end .contact_location_map .contact_location_call-->
                    </div><!--end .contact_location_box-->
                </div><!--end .contact-right .contact_details-->
            </div><!--end .col-md-6-->
            <div class="col-md-6">
                <div class="contact-right contact-right-style-2 responsive_mt">
                    <form action="#" method="post">
                        <input class="half_width input_m_right" type="text" name="name" placeholder="Your name">
                        <input class="half_width" type="EMAIL" name="email" placeholder="Email address">
                        <input type="tel" name="tel" placeholder="Phone number">
                        <textarea name="content" id="content" cols="20" rows="5" placeholder="Write message"></textarea>
                        <button class="btn-yellow" value="SUBMIT NOW">SUBMIT NOW</button>
                    </form>
                </div><!--end .contact-right .contact-right-style-2-->
            </div><!--end .col-md-6-->
        </div><!--end .row-->
    </div><!--end .container-->
</section><!--end .contact_form_area-->
<!--===========================
        End Contact Form
===========================-->

<!--===========================
        Start Map
===========================-->
<div class="map_section">
<div class="map-items">
    <div class="googpemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</div><!--end .map_section-->
<!--===========================
        End Map
===========================-->

    <!-- Footer area start here -->
    <?php include './partials/footer.php'?>
    <!-- Footer area end here -->
        
    <!--<< All JS Plugins >>-->
    <?php include './partials/script.php'?>

</body>
</html>