<?php
if(isset($lang) && !empty($lang)){
  
  App::setlocale($lang);

}else{
  $lang = new Lang;
}
?>

<?php $__env->startSection('header'); ?>
<meta name="keywords" content="<?php echo e(trans('messages.aboutus')); ?>,<?php echo e(trans('messages.headermetakeyword')); ?>" />
<meta name="description" content="<?php echo e(trans('messages.ogxaffaire')); ?>">

<meta name="designer" content="Hamza KOUADRI">
<meta name="contact" content="info@ogxaffaire.com">
<meta name="copyright" content="Copyright © 2016 Ogxaffaire. All Rights Reserved.">



<meta property="og:title" content="<?php echo e(trans('messages.aboutus').'-'.config('app.name', 'Laravel')); ?>" />

<meta property="og:site_name" content="<?php echo e(config('app.name', 'Laravel')); ?>">

<meta property="og:url" content="<?php echo e(Request::url()); ?>" />
<meta property="og:image" content="<?php echo e(url('/images/logo.png')); ?>" />
<meta property="og:image:width" content="268">
<meta property="og:image:height" content="249">
<meta name="robots" content="index,follow">

<title><?php echo e(trans('messages.aboutus').'-'.config('app.name', 'Laravel')); ?></title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!--========== AD header-banner ==========-->
        <section class="breadcrumbs">
            <div style="display: table; max-height: 90px !importent; max-width: 728px;overflow: hidden;" class="container text-centre" align="centre">
                
                <div id='afscontainer1' style="vertical-align: middle;display: table-cell;max-height: 90px !importent; max-width: 728px!importent;"></div>

                <script type="text/javascript" charset="utf-8">

                  var pageOptions = {
                    "pubId": "pub-9616389000213823", // Make sure this the correct client ID!
                    "query": "hotels",
                    "adPage": 1
                  };

                  var adblock1 = {
                    "container": "afscontainer1",
                    "width": "Auto",
                    "number": 1
                  };

                  _googCsa('ads', pageOptions, adblock1);

                </script>
                
            </div>
        </section>

        <!--========== End AD header-banner ==========-->
    <!--========== PAGE CONTENT ==========-->
    <!-- Process v1 -->
    <div class="content-md container">
        <!-- Heading v1 -->
        <div class="heading-v1 text-center margin-b-80">
            <h2 class="heading-v1-title"><?php echo e(trans('aboutus.greatportal')); ?></h2>
            <p class="heading-v1-text"><?php echo e(trans('aboutus.interestedin')); ?></p>
        </div>
        <!-- End Heading v1 -->

        <div class="row">
            <div class="col-md-4 md-margin-b-50">
                <!-- Process v1 -->
                <div class="process-v1 img-one">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-one">
                                <div class="process-v1-center-align">
                                    <h4 class="process-v1-title"><?php echo e(trans('messages.projectideas')); ?></h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align">
                                    <p class="process-v1-text"><?php echo e(trans('aboutus.projectideas')); ?></p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link"></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
            <div class="col-md-4 md-margin-b-50">
                <!-- Process v1 -->
                <div class="process-v1 img-two">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-two">
                                <div class="process-v1-center-align">
                                    <h4 class="process-v1-title"><?php echo e(trans('messages.tenders')); ?></h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align">
                                    <p class="process-v1-text"><?php echo e(trans('aboutus.tenders')); ?></p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link" ></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
            <div class="col-md-4">
                <!-- Process v1 -->
                <div class="process-v1 img-three">
                    <div class="process-v1-body">
                        <div class="process-v1-flip">
                            <div class="process-v1-front img-three">
                                <div class="process-v1-center-align">
                                    <h4 class="process-v1-title"><?php echo e(trans('messages.tutorials')); ?></h4>
                                </div>
                            </div>
                            <div class="process-v1-back">
                                <div class="process-v1-center-align">
                                    <p class="process-v1-text"><?php echo e(trans('aboutus.tutorials')); ?></p>
                                </div>
                            </div>
                        </div>
                        <a class="process-v1-link" ></a>
                    </div>
                </div>
                <!-- End Process v1 -->
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Process v1 -->

    <!-- Make Your Business -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-60">
                <h2 class="heading-v1-title"><?php echo e(trans('aboutus.growupbusiness')); ?></h2>
                <p class="heading-v1-text"><?php echo e(trans('aboutus.growupbusiness2')); ?></p>
            </div>
            <!-- End Heading v1 -->

            <!-- Icon Box v4 -->
            <div class="row">
                <div class="col-md-4 md-margin-b-50">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/double-iphone-01.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title"><?php echo e(trans('aboutus.accessibleeverywhere')); ?></h3>
                        <p><?php echo e(trans('aboutus.accessibleeverywheretext')); ?></p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
                <div class="col-md-4 md-margin-b-50">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/browser-01.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title"><?php echo e(trans('aboutus.powerfulyetsimple')); ?></h3>
                        <p><?php echo e(trans('aboutus.powerfulyetsimpletext')); ?></p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
                <div class="col-md-4">
                    <!-- Icon Box v4 -->
                    <div class="icon-box-v4">
                        <div class="margin-b-30">
                            <img class="img-responsive" src="assets/img/mockup/e-commerce.png" alt="">
                        </div>
                        <h3 class="icon-box-v4-body-title"><?php echo e(trans('aboutus.nosmallbusiness')); ?></h3>
                        <p><?php echo e(trans('aboutus.nosmallbusinesstext')); ?></p>
                    </div>
                    <!-- End Icon Box v4 -->
                </div>
            </div>
            <!--// end row -->
            <!-- End Icon Box v4 -->
        </div>
    </div>
    <!-- End Make Your Business -->

        
        
    </div>
    <!-- End Team v6 -->

    

    <!-- Services v7 -->
    <div class="content-md container">
        <!-- Heading v1 -->
        <div class="heading-v1 text-center margin-b-80">
            <h2 class="heading-v1-title"><?php echo e(trans('aboutus.opensourcehint')); ?><br/> Ark ups the style with its simple basics.</h2>
            <p class="heading-v1-text">We create experiences through renderings</p>
        </div>
        <!-- End Heading v1 -->

        <div class="row">
            <div class="col-md-4 md-margin-b-30">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-one">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">Ark Studio</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="services-v7-more">
                                <a class="services-v7-link popup-vimeo" href="https://player.vimeo.com/video/106863986" title="We create a your personal website">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">Watch Video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
            <div class="col-md-4 md-margin-b-30">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-two">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">Visualization</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="services-v7-more">
                                <!-- Gallery -->
                                <a class="services-v7-link popup-multiple-image" href="assets/img/970x647/49.jpg" title="Image 1">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">Gallery</span>
                                </a>
                                <a class="popup-multiple-image" href="assets/img/970x647/50.jpg" title="Image 2"></a>
                                <a class="popup-multiple-image" href="assets/img/970x647/51.jpg" title="Image 3"></a>
                                <a class="popup-multiple-image" href="assets/img/970x647/52.jpg" title="Image 4"></a>
                                <a class="popup-multiple-image" href="assets/img/970x647/53.jpg" title="Image 5"></a>
                                <a class="popup-multiple-image" href="assets/img/970x647/54.jpg" title="Image 6"></a>
                                <!-- End Gallery -->
                            </div>
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="overflow-h">
                    <!-- Services v7 -->
                    <div class="services-v7 services-v7-img-three">
                        <div class="services-v7-body">
                            <h2 class="services-v7-title">Interactive</h2>
                            <div class="services-v7-collapsed margin-b-50">
                                <p class="services-v7-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="services-v7-more">
                                <a class="services-v7-link" href="#">
                                    <i class="services-v7-link-icon radius-circle"></i>
                                    <span class="services-v7-link-title">Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Services v7 -->
                </div>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Services v7 -->

    <!-- Clients v4 -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Clients we work with</h2>
                <p class="heading-v1-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <!-- End Heading v1 -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Owl Carousel Clients Five Item -->
                    <ul class="list-inline owl-carousel-clients-five-item clients-v1">
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-01.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-01.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-02.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-02.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-05.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-05.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-06.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-06.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-03.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-03.png" alt="">
                            </div>
                        </li>
                        <li class="item">
                            <div class="clients-v1-item">
                                <img class="clients-v1-img clients-v1-img-default" src="assets/img/clients/bg-white-04.png" alt="">
                                <img class="clients-v1-img clients-v1-img-active" src="assets/img/clients/base-04.png" alt="">
                            </div>
                        </li>
                    </ul>
                    <!-- End Owl Carousel Clients Five Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients v4 -->
    <!--========== END PAGE CONTENT ==========-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>