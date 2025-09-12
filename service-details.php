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
    $Title2 = 'Service Details';
?>
<?php include './partials/page-header.php'?>

<!--<< Breadcrumb Section End >>-->


<!--===========================
        Start Service Details
===========================-->
<section class="service_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="service_details_left">
                    <img src="assets/images/services/service-details.jpg" alt="Service Details Image">
                    <h1>Air Conditioner Repair</h1>
                    <p>Lorem Ipsum is simply dummy text of the rinting and typesetting industry has been the ndustry standard dummy text ever sincer they llam id condimentum purus In non ex at ligula fringilla bortis. Ut et mauris auctor, aliquet nulla sed, aliquam mauris. Vestibulum sed malesuada dolor. Integer fringilla odio a dolor aliquet, eu euismod lectus porttitor. Proin et libero nec eros eleifend commodo Phasellus sodales des volutpat diam, id sagittis purus egestas dapibus.</p>
                    <h2>Common Air Conditioner Problems</h2>
                    <ul>
                        <li><i class="fa fa-check-circle"></i> The air conditioner won't turn on.</li>
                        <li><i class="fa fa-check-circle"></i> Weird noises or vibrating occur at startup or during operation.</li>
                        <li><i class="fa fa-check-circle"></i> Warm air exits the supply registers.</li>
                        <li><i class="fa fa-check-circle"></i> The unit hums, but the fan doesn't turn on.</li>
                        <li><i class="fa fa-check-circle"></i> The fan runs, but the compressor isn't working.</li>
                        <li><i class="fa fa-check-circle"></i> Water is pooling around the air conditioner</li>
                    </ul>
                    <p class="extra_mr">If you believe your air conditioning unit requires emergency service, <a href="#">click here</a> for information about our 24/7 repair services.</p>
                    <h2>Should I Repair or Replace My Air Conditioner?</h2>
                    <ul class="service_details_ac">
                        <li><i class="fa fa-check-circle"></i> Age - If your AC is more than 10 years old and giving you trouble, it may be in your best interest of consider a replacement.</li>
                        <li><i class="fa fa-check-circle"></i> Investment const - Is a new system a better investment in the long run? An Aire Serv air conditioner technician can help you calculate your return on investment to determine if on upgrade in more beneficial than repair.</li>
                        <li><i class="fa fa-check-circle"></i> Utility rates - You may think you can't afford on air conditioner replacement, but a more efficient unit consumes less electricity and could save you big time on energy bills.</li>
                    </ul>
                    <p class="info_mr">Visit our <a href="#">air conditioner maintenance page</a> for helpful tips and information.</p>
                </div><!--end .service_details_left-->
            </div><!--end col-md-8-->
            <div class="col-md-4">
                <div class="service_details_right">
                    <h1 class="text-center">Our Services</h1>
                    <div class="service_details_sv_cnt text-center service_cool_head">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a id="cooling-service-tab" data-toggle="tab" href="#cooling-service-body">
                                    <div class="service_center_left">
                                        <i class="icon-snow"></i>
                                        <span>Cooling Services</span>
                                    </div><!--end .service_center_left-->
                                </a>
                            </li>
                            <li>
                                <a id="heating-service-tab" data-toggle="tab" href="#heating-service-body">
                                    <div class="service_center_left">
                                        <i class="icon-fire"></i>
                                        <span>Heating Services</span>
                                    </div><!--end .nav-tabs-->
                                </a>
                            </li>
                        </ul><!--end .service_center_left-->
                    </div><!--end .service_details_sv_cnt .service_cool_head-->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="cooling-service-body" role="tabpanel" aria-labelledby="cooling-service-tab">
                            <div class="service_category">
                                <ul>
                                    <li><a href="#">Air Conditioner Maintenance <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Air Conditioner Repair <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Air Conditioner Replacement <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Ductless Split AC Systems <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Duct Cleaning & Installation <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div><!-- end .service_category -->
                        </div><!-- end .tab-pane -->
                        <div class="tab-pane fade" id="heating-service-body" role="tabpanel" aria-labelledby="heating-service-tab">
                            <div class="service_category">
                                <ul>
                                    <li><a href="#">Air Conditioner Maintenance <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Air Conditioner Repair <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Air Conditioner Replacement <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Ductless Split AC Systems <i class="fa fa-angle-right"></i></a></li>
                                    <li><a href="#">Duct Cleaning & Installation <i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div><!-- end .service_category -->
                        </div><!-- end .tab-pane -->
                    </div><!-- end .tab-content -->
                    <div class="service_details_sv_cnt text-center service_class_remove mb-30">
                        <ul class="nav nav-tabs">
                            <li>
                                <a id="other-service-tab" data-toggle="tab" href="#other-service-body">
                                    <div class="service_center_left">
                                        <i class="icon-ac"></i>
                                        <span>Other Services</span>
                                    </div><!-- end .service_details_sv_cnt -->
                                </a>
                            </li>
                            <li>
                                <a id="commercial-service-tab" data-toggle="tab" href="#commercial-service-body">
                                    <div class="service_center_left">
                                        <i class="icon-building"></i>
                                        <span>Commercial Services</span>
                                    </div><!-- end .service_center_left -->
                                </a>
                            </li>
                        </ul>
                    </div><!-- end .service_details_sv_cnt -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="other-service-body" role="tabpanel" aria-labelledby="cooling-service-tab">
                            <div class="service_details_contact">
                                <span class="icon-support"></span>
                                <h2><span>Contact with us </span>(305) 908-2526</h2>
                            </div><!-- end service_details_contact -->
                        </div>
                        <div class="tab-pane fade" id="commercial-service-body" role="tabpanel" aria-labelledby="cooling-service-tab">
                            <div class="service_details_contact">
                                <span class="icon-support"></span>
                                <h2><span>Contact with us </span>(305) 908-2526</h2>
                            </div><!-- end service_details_contact -->
                        </div>
                    </div>
                </div><!-- end .service_details_right -->
            </div><!-- end .col-md-4 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- end .service_details_area section_padding -->
<!--===========================
        End Service Details
===========================-->

<!--===========================
        Start Contact Form
===========================-->
<section class="contact_form_area ctf_gray section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-right contact_details">
                    <div class="hero-title-with-shape">
                        <h4 class="heading_with_border">Get a free quote</h4>
                        <h1>To request a service call, please fill out the form below</h1>
                    </div><!--end .hero-title-with-shape-->
                    <p>There are many variations of passages of new lorem ipsum available, but the majority have suffered alteration in some form by injected humour, or randomised words which don't look even slightly believable.</p>
                </div><!-- end .contact-right contact_details -->
            </div><!-- end .col-md-6 -->
            <div class="col-md-6">
                <div class="contact-right contact-right-style-2 extra_mr_30">
                    <form action="#" method="post">
                        <input class="half_width input_m_right" type="text" name="name" placeholder="Your name">
                        <input class="half_width" type="EMAIL" name="email" placeholder="Email Address">
                        <input type="tel" name="tel" placeholder="Phone Number">
                        <span class="select_icon">
                            <select name="select" id="select">
                                <option value="option0">Select Service</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                            </select>
                        </span>
                        <button class="btn-yellow" value="SUBMIT NOW">SUBMIT NOW</button>
                    </form>
                </div><!-- end .contact-right .contact-right-style-2 .extra_mr_30 -->
            </div><!-- end .col-md-6 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- end .contact_form_area .ctf_gray .section_padding -->
<!--===========================
        End Contact Form
===========================-->

<!-- Footer area start here -->
<?php include './partials/footer.php'?>
<!-- Footer area end here -->
    
<!--<< All JS Plugins >>-->
<?php include './partials/script.php'?>

</body>
</html>