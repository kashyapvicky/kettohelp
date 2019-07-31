<!DOCTYPE html>
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="pingback" href="xmlrpc.php"> -->
    <title>Kettohelp &#8211; Crowdfunding Plateform </title>

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <!-- sweetalert cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
  <!-- sweetalert cdn -->
    <link rel='stylesheet' id='tribe-tooltip-css' href='<?php echo base_url('assets/wp-content/plugins/the-events-calendar/common/src/resources/css/tooltip.mind87f.css?ver=4.9.9 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo base_url('assets/wp-includes/css/dist/block-library/style.min7752.css?ver=5.2.1 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='<?php echo base_url('assets/wp-content/plugins/contact-form-7/includes/css/stylesbdeb.css?ver=5.1.3 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='<?php echo base_url('assets/wp-content/plugins/revslider/public/assets/css/settings23da.css?ver=5.4.8 ')?>' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='mg_progress-bar-css' href='<?php echo base_url('assets/wp-content/plugins/totaldonations/css/mg_progress-bar7752.css?ver=5.2.1 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/bootstrap/css/bootstrap.min5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/owl-carousel/css/owl.carousel5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='owl-theme-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/owl-carousel/css/owl.theme5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='cubeportfolio-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/cubeportfolio/cubeportfolio.min5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesoma-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/font-awesome-4.7.0/css/font-awesome.min5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='zirto_tribe-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/theme/css/tribe-events5152.css?ver=1.0 ')?> type='text/css ' media='all ' />
<link rel='stylesheet ' id='zirto_blog-css ' href='<?php echo base_url( 'assets/wp-content/themes/zirto/assets/theme/css/blog-style5152.css?ver=1.0')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='zirto_stylem-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/theme/css/style5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='zirto_font-css' href='https://fonts.googleapis.com/css?family=Indie+Flower|Muli|Open+Sans+Condensed:300,700&amp;subset=latin,latin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='zirto_style-css' href='<?php echo base_url('assets/wp-content/themes/zirto/style7752.css?ver=5.2.1 ')?>' type='text/css' media='all' />
    <!--[if lt IE 9]>
<link rel='stylesheet' id='vc_lte_ie9-css'  href='http://klbtheme.com/zirto/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css?ver=6.0.2' type='text/css' media='screen' />
<![endif]-->
    <link rel='stylesheet' id='migla-front-end-css' href='<?php echo base_url('assets/wp-content/plugins/totaldonations/css/migla-frontend7752.css?ver=5.2.1 ')?>' type='text/css' media='all' />
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min23da.js?ver=5.4.8 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min23da.js?ver=5.4.8 ')?>'></script>
    <style type="text/css">
        span.sticky-post {
            background: #d1345b;
        }
        
        .blog-item h1:after {
            border: 1px solid #d1345b;
        }
        
        .blog-item ul li:before {
            color: #d1345b;
        }
        
        .tagcloud a {
            background: #d1345b;
            border: 1px solid #d1345b;
        }
        
        .tagcloud a:hover {
            border: 1px solid #d1345b;
        }
        
        .comment-form input[type=submit] {
            border: 2px solid #d1345b;
            background-color: #d1345b;
        }
        
        .comment-form input[type=submit]:active {
            border: 2px solid #d1345b !important;
        }
        
        .comment-form textarea:focus {
            border: 1px solid #d1345b;
        }
        
        a.btnklb {
            background-color: #d1345b;
        }
        
        .btnread {
            background: #d1345b;
        }
        
        .pagination > .active > a {
            background-color: #d1345b;
            border-color: #d1345b;
        }
        
        .input-group-btn .btn {
            background: #d1345b;
            border: 1px solid #d1345b;
        }
        
        form.post-password-form input[type="submit"] {
            background: #d1345b;
        }
        
        a {
            color: #d1345b;
        }
        
        a:focus,
        a:hover {
            color: #d1345b;
        }
        
        #preloader .pulse {
            border: 6px solid #d1345b;
        }
        
        .header h1 {
            color: #d1345b;
        }
        
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #d1345b;
        }
        
        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #d1345b;
        }
        
        .navbar-inverse .navbar-nav>.active>a:after {
            background-color: #d1345b;
        }
        
        ul.navbar-mail i {
            color: #d1345b;
        }
        
        ul.navbar-social a {
            color: #d1345b;
        }
        
        .shrink {
            border-bottom: 3px solid #d1345b;
        }
        
        .cbp-l-filters-button .cbp-filter-item {
            background-color: #d1345b;
            border: 1px solid #d1345b;
        }
        
        .cbp-l-filters-button .cbp-filter-counter {
            background-color: #d1345b;
        }
        
        .cbp-l-filters-button .cbp-filter-counter:after {
            border-top: 4px solid #d1345b;
        }
        
        .cbp-l-loadMore-button .cbp-l-loadMore-link,
        .cbp-l-loadMore-button .cbp-l-loadMore-button-link {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        .team-content h4 {
            color: #d1345b;
        }
        
        .events-content h4 {
            color: #d1345b;
        }
        
        .cbp-l-grid-slider-team-name h4 {
            color: #d1345b
        }
        
        .latestnew-content a {
            color: #d1345b;
        }
        
        .help-us-visible-item h3 {
            color: #d1345b;
        }
        
        .help-us-visible-item a {
            background-color: #d1345b;
        }
        
        #help-us .collapse h3 {
            color: #d1345b;
        }
        
        ul.help-us-contact li button {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        .form-style-2 ul li .field-style:focus {
            border: 1px solid #d1345b;
        }
        
        .form-style-2 ul li button {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        .form-style-3 ul li .field-style:focus {
            border: 1px solid #d1345b;
        }
        
        .form-style-3 ul li button {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        .form-style-4 ul li .field-style:focus {
            border: 1px solid #d1345b;
        }
        
        .form-style-4 ul li button {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        .counter-item i {
            color: #d1345b
        }
        
        .form-style-1 ul li .field-style:focus {
            border: 1px solid #d1345b;
        }
        
        .form-style-1 ul li button {
            border: 1px solid #d1345b;
            color: #d1345b;
        }
        
        #success_page h1 {
            color: #d1345b;
        }
        
        .map-header:after {
            background: #d1345b;
        }
        
        .causes-content h4 {
            color: #d1345b;
        }
        
        .causes-content a {
            background: #d1345b;
        }
        
        .causes-content a:after {
            background: #d1345b;
        }
        
        .donate-slide-head {
            background: #d1345b none repeat scroll 0 0;
        }
        
        .donate-trigger {
            background: #d1345b none repeat scroll 0 0;
        }
        
        a.donate-btn {
            border: 2px solid #d1345b;
            color: #d1345b;
        }
        
        .modal-content .btn-tertiary {
            color: #d1345b;
            border: 2px solid #d1345b;
        }
        
        ul.list-unstyled button {
            background-color: #d1345b;
        }
        
        ul.list-unstyled .form-control:focus {
            border-color: #d1345b;
        }
        
        #tribe-bar-form .tribe-bar-submit input[type=submit],
        #tribe-events .tribe-events-button {
            background-color: #d1345b !important;
            border: 2px solid #d1345b !important;
        }
        
        .tribe-events-month table.tribe-events-calendar {
            border-color: #d1345b !important;
        }
        
        .tribe-events-calendar thead th {
            background-color: #d1345b;
            border-top: 1px solid #d1345b;
        }
        
        .tribe-events-loop .tribe-event-schedule-details,
        .tribe-events-venue-details {
            background: #d1345b;
        }
        
        .tribe-updated.published.time-details {
            background: #d1345b;
        }
        
        a.tribe-events-read-more:hover {
            background-color: #d1345b !important;
            border-color: #d1345b !important;
        }
        
        .progress-bar-tertiary {
            background-color: #d1345b;
        }
        
        .events-content button {
            background: #d1345b !important;
        }
        
        .campaign-box h4 {
            color: #d1345b;
        }
        
        .campaign-box a.title {
            color: #d1345b !important;
        }
        
        #tribe-events ul.venue li {
            background: #d1345b;
        }
        
        .tribe-events-sub-nav a {
            background-color: #d1345b !important;
            border: 2px solid #d1345b;
        }
        
        .blog-head h2:before {
            border-bottom: 2px solid #d1345b;
        }
        
        .wpcf7-form input:focus,
        .wpcf7-form textarea:focus {
            border-color: #d1345b;
        }
        
        .wpcf7-form input[type="submit"] {
            background-color: #d1345b;
            border-color: #d1345b;
        }
        
        div.wpcf7-validation-errors {
            border: 2px solid #d1345b;
        }
        
        #migla_donation_form .migla-panel-heading h2.mg_DonationInformation {
            color: #d1345b;
        }
        
        .migla-payment-options button {
            background-color: #d1345b;
            border-color: #d1345b;
        }
        
        .navbar-inverse {
            background: rgba(0, 0, 0, 0.7);
        }
        
        .shrink {
            background: #000;
        }
        
        .navbar-inverse .navbar-nav>li>a {
            color: #fff;
        }
        
        #footerdown {
            background: #000;
        }
    </style>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="a76da377714191f35fde4b3d-text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="home page-template page-template-frontpage page-template-frontpage-php page page-id-230 tribe-no-js wpb-js-composer js-comp-ver-6.0.2 vc_responsive">
    <div id="wrapper">

        <div id="preloader">
            <div class="pulse bg-main"></div>
        </div>

        <div class="socials-top">
            <div class="container">
                <div class="col-md-12 navbar-socials">
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-0">
                        <ul class="navbar-mail">
                            <li><i class="fa fa-envelope-o"></i><span><a href="http://klbtheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="50393e363f103b3c322438353d357e333f3d">[email&#160;protected]</a></span></li>
                            <li><i class="fa fa-phone"></i><!-- <span>+1 800 123 4567</span> --></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 padding-0-res">
                        <ul class="navbar-social">
                            <li><a href="https://web.facebook.com/?_rdr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand klbtext" href="index.html" title="Kettohelp &#8211; Crowdfunding Plateform">
Kettohelp </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul id="menu-menu-1" class="nav navbar-nav">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#home">Home</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#about">About</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#projects">Projects</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#team">Team</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#news-events">Events</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#take-action">Take Action</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a class="internal" href="#contact">Contact</a></li>
                        <li  class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#login_popup" class="donate-btn">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="donate-slide visible-palate">
            <div class="donate-trigger">
                <i class="fa fa-heart-o"></i>
            </div>
            <div class="donate-slide-head">
                <h6>Hey Would You Like To</h6>
                <h4>DONATE NOW ?</h4>
            </div>
            <div class="various-donate clearfix">
                <div class="colors-list">
                    <a href="#donate-popup" class="donate-btn">Donate</a>
                </div>
            </div>
        </div>






        <!-- Registration Modal start here -->
        <div class="remodal" data-remodal-id="donate-popup">
            <button data-remodal-action="close" class="remodal-close"></button>
            <p>
                <div style='clear:both' class='bootstrap-wrapper'>
                    <div id='wrap-migla'>
                        <div id='migla_donation_form' style=''>
                            <section class='migla-panel' style='background-color:#fafafa;border: 1px solid #eeeeee;'>
                                <header class='migla-panel-heading'>
                                    <h2 class='mg_DonationInformation'>Donation Information</h2></header>
                                <div class='migla-panel-body form-horizontal'>
                                    <input type='hidden' id='mg_level_active_color' value='#34d1bf'>
                                    <input type='hidden' id='mg_level_color' value='#d1345b'>
                                    <input type='hidden' id='mg_level_active_border' value='1px solid #d1345b'>
                                    <div class='form-group mg_giving-levels'>
                                        <div class='col-sm-12 col-xs-12'>
                                            <label class='mg_control-label'>How much would you like to donate?</label>
                                        </div>
                                        <div class='col-sm-12 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_amount'></label>
                                            <div onclick="pass_donation(1000)"  class='radio-inline selected dummy'>
                                                <label for='miglaAmount0' style='background-color:#34d1bf;border: 1px solid #d1345b;' class='migla_amount_lbl'>
                                                    <input type='hidden'  value='1000' id='miglaAmount0' name='miglaAmount' class='migla_amount_choice mg_amount_checked'><span class='currency-symbol'></span>1000.00<span class='currency-symbol'></span><span class=''></span></label>
                                            </div>
                                            <div class='radio-inline' onclick="pass_donation(2000)">
                                                <label for='miglaAmount1' style='background-color:#d1345b;border: 1px solid #d1345b;' class='migla_amount_lbl'>
                                                    <input type='hidden' value='25' id='miglaAmount1' name='miglaAmount' class='migla_amount_choice '><span class='currency-symbol'></span>2000.00<span class='currency-symbol'></span><span class=''></span></label>
                                            </div>
                                            <div class='radio-inline' onclick="pass_donation(5000)">
                                                <label for='miglaAmount2' style='background-color:#d1345b;border: 1px solid #d1345b;' class='migla_amount_lbl'>
                                                    <input type='hidden' value='50' id='miglaAmount2' name='miglaAmount' class='migla_amount_choice '><span class='currency-symbol'></span>5000.00<span class='currency-symbol'></span><span class=''></span></label>
                                            </div>
                                            <div class='radio-inline' onclick="pass_donation(10000)">
                                                <label for='miglaAmount3' style='background-color:#d1345b;border: 1px solid #d1345b;' class='migla_amount_lbl'>
                                                    <input type='hidden' value='100' id='miglaAmount3' name='miglaAmount' class='migla_amount_choice '><span class='currency-symbol'></span>10000.00<span class='currency-symbol'></span><span class=''></span></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-3 hidden-xs'></div>
                                    </div>
                                    <div class='form-group mg_giving-levels'>
                                        <div class='col-sm-5 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_camount'></label>
                                            <div class='radio-inline miglaCustomAmount  '>
                                                <label for='miglaCustomAmount4' style='background-color:#d1345b;border: 1px solid #d1345b;' class='migla_amount_lbl'>
                                                    <input type='hidden' value='custom' id='miglaAmount4' name='miglaAmount' class='migla_amount_choice migla_custom_amount'>
                                                    <div></div>
                                                    <div class='input-group input-group-icon icon-before'><span class='input-group-addon mg_symbol-before'><span class='icon'></span></span>
                                                        <input readonly="true" type='text' value='0' id='d_amt_show' class='migla_positive_number_only'>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class='col-sm-3 hidden-xs'></div>
                                    </div>
                                </div>
                            </section>
                            <section class='migla-panel' style='background-color:#fafafa;border: 1px solid #eeeeee;'>
                                <?php
                                if($this->session->flashdata('reg'))
                                {
                                    ?>
                                    <script>
                                    swal("Good job!", "Registered Succesfully With Kettohelp!", "success");
                                    </script>
                                    <?php
                                }
                                 if($this->session->flashdata('reg_error'))
                                {
                                    echo "<script> swal('Error!', '".$this->session->flashdata('reg_error')."', 'error');</script>";
                                }
                                if($this->session->flashdata('login'))
                                {
                                    echo "<script> swal('Error!', '".$this->session->flashdata('login')."', 'error');</script>";
                                }
                                    
                                ?>
                                <header class='migla-panel-heading'>
                                    <h2 class='mg_DonorInformation'>Donor Information</h2></header>
                                <div class='migla-panel-body form-horizontal'>
                                    <form method="post" action="<?php echo base_url('website/register') ?>">
                                        <input type="hidden" id="plan_amt" name="plan_amt">
                                    
                                    <div class='form-group'>
                                        <div class='col-sm-3'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Donor Key <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-6 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="sponser_id" placeholder='Enter Here..' class='mg_form-control miglaNumAZ miglad_ required' />

                                        </div>
                                        
                                    </div>
                                    <div class='form-group'>
                                        
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Name<abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="name" placeholder='Enter name' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Last Name <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_lastname'></label>
                                            <input  required type='text'  name="l_name" placeholder='Enter Here..' class='mg_form-control  miglad_ required' />
                                        </div>
                                       
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label' >Email<abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_lastname'></label>
                                            <input required type='text' autocomplete="off"  name="email" placeholder='Enter Email' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Password <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='password'  name="password" placeholder='Password' autocomplete="off" class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>UPI ID <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="upi" placeholder='Enter UPI ID' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Phone <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="mobile_number" placeholder='Type Here..' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Account NO<abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  placeholder='Account number' name="ac_number" class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Pin <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="pin" placeholder='Enter Pin' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                   <!--  <div class='form-group'>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>A/c Holder <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='idfield' ></label>
                                            <input required type='text'  name="acn" placeholder='Enter Account Holder Name' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                        <div class='col-sm-2'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>IFSC Codee<abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-4 col-xs-12'>
                                            <label style='display:none' class='' ></label>
                                            <input required type='text'  placeholder='Enter IFSC Code' name="ifscc" class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div> -->

                                    
                                </div>
                            </section>
                            <div class='form-horizontal migla-payment-options'>
                              
                                <div class='mg_tab-content' style='border: 1px solid #eeeeee;'>
                                    <div id='sectionpaypal' class='mg_tab-pane mg_active' style='background-color:#fafafa'>
                                        <span>Licesning Fees</span>
                                        <div class='form-group'>
                                            <div class='col-sm-12 col-xs-12'>
                                                <div class='radio'>
                                                    <label for='miglaPaypalMethodPro'>
                                                        <input type='radio' value='1' id='miglaPaypalMethodPro' name='fees' checked>1000 - Every Three Months</label>
                                                </div>
                                                <div class='radio'>
                                                    <label for='miglaPaypalMethodStd'>
                                                        <input type='radio' value='2' id='miglaPaypalMethodStd' name='fees'>  2000 - Every Six Months</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <div class='col-sm-12 col-xs-12'>
                                                <button  class=''>Donate Now</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style='display:none'>
                            <div id='mg_warning1'>Please insert all the required fields</div>
                            <div id='mg_warning2'>Please insert correct email</div>
                            <div id='mg_warning3'>Please fill in a valid amount</div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Registraation  Modal Ends Here -->

        <!-- login modal start from here -->

         <div class="remodal" data-remodal-id="login_popup">
            <button data-remodal-action="close" class="remodal-close"></button>
            <p>
                <div style='clear:both' class='bootstrap-wrapper'>
                    <div id='wrap-migla'>
                        <div id='migla_donation_form' style=''>
                            <section class='migla-panel' style='background-color:#fafafa;border: 1px solid #eeeeee;'>
                                <header class='migla-panel-heading'>
                                    <h2 class='mg_DonationInformation'>Login</h2></header>
                                <div class='migla-panel-body form-horizontal'>
                                    <input type='hidden' id='mg_level_active_color' value='#34d1bf'>
                                    <input type='hidden' id='mg_level_color' value='#d1345b'>
                                    <input type='hidden' id='mg_level_active_border' value='1px solid #d1345b'>
                                    <div class='form-group mg_giving-levels'>
                                        <div class='col-sm-12 col-xs-12'>
                                            <label class='mg_control-label'>Login With Kettohelp To Get Your Donation</label>
                                        </div>
                                        
                                        <div class='col-sm-3 hidden-xs'></div>
                                    </div>
                                   
                                </div>
                            </section>
                            <section class='migla-panel' style='background-color:#fafafa;border: 1px solid #eeeeee;'>
                               <!-- space for session -->

                               <!--/ space for session -->
                                <header class='migla-panel-heading'>
                                    <h2 class='mg_DonorInformation'>Login Details</h2></header>
                                <div class='migla-panel-body form-horizontal dummy'>
                                    <form method="post" action="<?php echo base_url('website/login') ?>">
                                    <div class='form-group'>
                                        <div class='col-sm-3'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Email<abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-5 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_firstname'></label>
                                            <input type='text'  name="user_name" placeholder='Enter Email' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>                                       
                                    </div>
                                    <div class='form-group'>
                                        <div class='col-sm-3'>
                                            <div class='input-group input-group-icon'>
                                                <label class='mg_control-label'>Password <abbr class='mg_asterisk' title='required'> *</abbr></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-5 col-xs-12'>
                                            <label style='display:none' class='idfield' id='miglad_lastname'></label>
                                            <input type='password'  name="password" placeholder='Enter Password' class='mg_form-control miglaNumAZ miglad_ required' />
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                            <div class='col-sm-12 col-xs-12'>
                                                <button  style="background-color: #d1345b" class='migla_donate_now mg-btn-grey'>Login</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </section>
                            
                        </div>
                           
                        <div style='display:none'>
                            <div id='mg_warning1'>Please insert all the required fields</div>
                            <div id='mg_warning2'>Please insert correct email</div>
                            <div id='mg_warning3'>Please fill in a valid amount</div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- login modal closed here -->
    <p></p>
    </p>
    </div>

    <div id="home">
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="full-height">
                            <div id="particles-js" style="background-image:url(wp-content/uploads/2016/12/12.jpg);">
                                <div class="klb-centered">
                                    <div class="text-big">SUPPORT  KETTOHELP
                                        <br /> CAMPAIGN TODAY</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fundraiser-bar" class="bottom-bar-responsive bg-brand-secondary-darkest">
                            <div class="col-md-6 fundraiser-progress-bar animated-longer-delay-3 fadeIn">
                                <div class="vert-centered-wrapper-120px">
                                    <div class="vert-centered">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-tertiary" role="progressbar" style="width:66%;">
                                                <h3><span class="responsive-hide">Family Engagement</span> &nbsp;<b><div style='display:inline;' class='wrapper'>$2,578.00</div><form id='mgtextlink1388587213' action='http://klbtheme.com/zirto/donation-form/family-engagement/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'><input type='hidden' name='campaign' value='Family Engagement' style='display:inline;padding:0px;margin:0px !important' /><input type='hidden' name='thanks' value='widget_bar' /></form></b></h3></div>
                                            <h3 class="goal"><span class="responsive-hide">Goal</span> <b><div style='display:inline;' class='wrapper'>$5,000.00</div><form id='mgtextlink1144445886' action='http://klbtheme.com/zirto/donation-form/family-engagement/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'><input type='hidden' name='campaign' value='Family Engagement' style='display:inline;padding:0px;margin:0px !important' /><input type='hidden' name='thanks' value='widget_bar' /></form></b></h3></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-9 col-xs-12 fundraiser-stats">
                                <div class="col-md-4 col-sm-4  col-xs-4 animated-longer-delay-7 fadeIn">
                                    <div class="vert-centered-wrapper-120px">
                                        <div class="vert-centered">
                                            <h2><span class="timer" data-to="66">66</span>%</h2>
                                            <h4>of our goal</h4></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 animated-longer-delay-8 fadeIn">
                                    <div class="vert-centered-wrapper-120px">
                                        <div class="vert-centered">
                                            <h2><span class="timer" data-to="-6" data-speed="1000">-6</span></h2>
                                            <h4>Days Left</h4></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4 animated-longer-delay-9 fadeIn end">
                                    <div class="vert-centered-wrapper-120px">
                                        <div class="vert-centered">
                                            <h2><span class="timersa" data-speed="2500"><div style='display:inline;' class='wrapper'>16</div><form id='mgtextlink897597734' action='http://klbtheme.com/zirto/donation-form/family-engagement/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'><input type='hidden' name='campaign' value='Family Engagement' style='display:inline;padding:0px;margin:0px !important' /><input type='hidden' name='thanks' value='widget_bar' /></form></span></h2>
                                            <h4>Donations</h4></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-12  make-a-donation  animated-longer-delay-10 fadeIn">
                                <div class="vert-centered-wrapper-120px">
                                    <div class="vert-centered">
                                        <div style='display:inline;' class='wrapper'></div>
                                        <form id='mgtextlink1952313494' action='http://klbtheme.com/zirto/donation-form/family-engagement/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'>
                                            <input type='hidden' name='campaign' value='Family Engagement' style='display:inline;padding:0px;margin:0px !important' />
                                            <input type='hidden' name='thanks' value='widget_bar' />
                                        </form>
                                        <form action='http://klbtheme.com/zirto/donation-form/family-engagement/' method='post'>
                                            <input type='hidden' name='campaign' value='Family Engagement' />
                                           <!--  <button class='migla_donate_now mg-btn-grey'>Donnate Now</button> -->
                                           <a href="#donate-popup" class="donate-btn">Registration</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
    <div id="about">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1481617296337 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
            }
        </style>
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1481617296337">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">About Us</h1>
                                <h4 style="color:">We Care For Children, Protect Their Welfare, And Prepare Them For The Future Are The Mostthe Future Are The Most</h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-archive"></i>
                                <div class="about-text">
                                    <h3>Read Our Stories</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-users"></i>
                                <div class="about-text">
                                    <h3>Join The Coalition</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-globe"></i>
                                <div class="about-text">
                                    <h3>Impact The World</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-university"></i>
                                <div class="about-text">
                                    <h3>School based programs</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-book"></i>
                                <div class="about-text">
                                    <h3>family resource centers</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="about-item"><i class="fa fa-university"></i>
                                <div class="about-text">
                                    <h3>School based programs</h3>
                                    <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="projects">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1481624234150 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
                background-color: #070707 !important;
            }
        </style>
        <div class="container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1481624234150 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">Our Projects</h1>
                                <h4 style="color:#c7c7c7">We Care For Children, Protect Their Welfare, And Prepare Them For The Future Are The Mostthe Future Are The Most</h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div id="js-filters-mosaic" class="cbp-l-filters-button">
                                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All Works</div>
                                <div data-filter=".helping" class="cbp-filter-item">Helping</div>
                                <div data-filter=".social" class="cbp-filter-item">Social</div>
                                <div data-filter=".volunteer" class="cbp-filter-item">Volunteer</div>
                            </div>
                            <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                                <div class="cbp-item social ">
                                    <a href="<?php echo base_url('assets/wp-content/uploads/2016/12/1.jpg')?>" class="cbp-caption cbp-lightbox" data-title="Save Humanity<br>Social">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/1.jpg')?>" alt="Save Humanity"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Save Humanity</div>
                                                    <div class="cbp-l-caption-desc">Social</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item volunteer ">
                                    <a href="wp-content/uploads/2016/12/2.jpg" class="cbp-caption cbp-lightbox" data-title="Good Kids<br>Volunteer">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/2.jpg')?>" alt="Good Kids"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Good Kids</div>
                                                    <div class="cbp-l-caption-desc">Volunteer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item volunteer ">
                                    <a href="<?php echo base_url('assets/wp-content/uploads/2016/12/3.jpg')?>" class="cbp-caption cbp-lightbox" data-title="Helping Hands<br>Volunteer">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/3.jpg')?>" alt="Helping Hands"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Helping Hands</div>
                                                    <div class="cbp-l-caption-desc">Volunteer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item social ">
                                    <a href="wp-content/uploads/2016/12/4.jpg" class="cbp-caption cbp-lightbox" data-title="Social Startups<br>Social">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/4.jpg')?>" alt="Social Startups"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Social Startups</div>
                                                    <div class="cbp-l-caption-desc">Social</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item social ">
                                    <a href="wp-content/uploads/2016/12/5.jpg" class="cbp-caption cbp-lightbox" data-title="The Water Project<br>Social">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/5.jpg')?>" alt="The Water Project"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">The Water Project</div>
                                                    <div class="cbp-l-caption-desc">Social</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="cbp-item helping ">
                                    <a href="wp-content/uploads/2016/12/6.jpg" class="cbp-caption cbp-lightbox" data-title="Helping Children<br>Helping">
                                        <div class="cbp-caption-defaultWrap"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/6.jpg')?>" alt="Helping Children"> </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <div class="cbp-l-caption-title">Helping Children</div>
                                                    <div class="cbp-l-caption-desc">Helping</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>
    <div id="team">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1481626171365 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
            }
        </style>
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1481626171365">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">Our Staff</h1>
                                <h4 style="color:">We Care For Children, Protect Their Welfare, And Prepare Them For The Future Are The Mostthe Future Are The Most</h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="team-img"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/person1.png')?>" alt="Elly" />
                                <div class="team-img-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target=" _blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.facebook.com/https://twitter.com/" target=" _blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/" target=" _blank" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target=" _blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target=" _blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Elly <span>/ Cfo</span></h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="team-img"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/person2.png')?>" alt="Victor" />
                                <div class="team-img-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target=" _blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.facebook.com/https://twitter.com/" target=" _blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/" target=" _blank" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target=" _blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target=" _blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Victor <span>/ Cfo</span></h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="team-img"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/person3.png')?>" alt="Jessie" />
                                <div class="team-img-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target=" _blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.facebook.com/https://twitter.com/" target=" _blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/" target=" _blank" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target=" _blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target=" _blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Jessie <span>/ Volunteer</span></h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="team-img"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/person4.png')?>" alt="David" />
                                <div class="team-img-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li><a href="https://www.facebook.com/" target=" _blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.facebook.com/https://twitter.com/" target=" _blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://plus.google.com/" target=" _blank" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target=" _blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://www.pinterest.com/" target=" _blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>David <span>/ Volunteer</span></h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="news-events">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1481636632954 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
                background-color: #070707 !important;
            }
        </style>
        <div class="container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1481636632954 vc_row-has-fill">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">Events &amp; News</h1>
                                <h4 style="color:#c7c7c7">We Care For Children, Protect Their Welfare, And Prepare Them For The Future Are The Mostthe Future Are The Most</h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="campaign-box">
                                <h3 style="color:#c7c7c7;"><i class="fa fa-bullhorn"></i>Recent Campaign</h3>
                                <div class="events">
                                    <div class="events-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/1.png" alt="Build School For Poor Children" /></div>
                                    <div class="events-content">
                                        <h4><div style='display:inline;' class='wrapper'></div><form id='mgtextlink2078670658' action='http://klbtheme.com/zirto/donation-form/build-school-for-poor-children/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'><input type='hidden' name='campaign' value='Build School For Poor Children' style='display:inline;padding:0px;margin:0px !important' /><input type='hidden' name='thanks' value='widget_bar' /></form><form action='http://klbtheme.com/zirto/donation-form/build-school-for-poor-children/' method='post'><input type='hidden' name='campaign' value='Build School For Poor Children' /><button class='migla_donate_now mg-btn-grey'>Donate Now</button></form><a class="title">Build School For Poor Children</a></h4>
                                        <div class="skillbar clearfix" data-percent="47%">
                                            <div class="skillbar-title"></div>
                                            <div class="skillbar-bar" style="background-color:#D1345B;">
                                                <div class="skill-bar-percent">47%</div>
                                            </div>
                                        </div>
                                        <p><span style="color: #c7c7c7;">Lorem Ipsum is simply dummy text of the printing and.Lorem Ipsum is simply dummy printing and.Lorem Ipsum is simply dummy text of the printing and.Lorem Ipsum is simply dummy printing and.</span></p>
                                        <div style='display:inline;' class='wrapper'></div>
                                        <form id='mgtextlink1935537825' action='http://klbtheme.com/zirto/donation-form/build-school-for-poor-children/' method='post' style='display:none inline;padding:0px;margin:0px !important' class='form-inline' role='form'>
                                            <input type='hidden' name='campaign' value='Build School For Poor Children' style='display:inline;padding:0px;margin:0px !important' />
                                            <input type='hidden' name='thanks' value='widget_bar' />
                                        </form>
                                        <form action='http://klbtheme.com/zirto/donation-form/build-school-for-poor-children/' method='post'>
                                            <input type='hidden' name='campaign' value='Build School For Poor Children' />
                                            <button class='migla_donate_now mg-btn-grey'>Donate Noww</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h3 class="event-title" style="color:#c7c7c7;"><i class="fa fa-book"></i>Featured Events</h3>
                            <div id="js-grid-slider-team" class="events-carousel cbp cbp-slider-edge">
                                <div class="cbp-item">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <a href="event/our-new-event/index.html" title="Our New Event"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/unicef-360x235.jpg')?>" alt="Our New Event"></a>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-wrap">
                                        <div class="cbp-l-grid-slider-team-name"><a href="event/our-new-event/index.html" title="Our New Event"><h4>Our New Event</h4></a></div>
                                        <div class="cbp-l-grid-slider-team-position">
                                            <div class="date"><i class="fa fa-calendar"></i>02 January 17</div>
                                            <div class="map-link"><i class="fa fa-map-marker"></i><a class="tribe-events-gmap" href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Champs-%C3%89lys%C3%A9es+Paris+France" title="Click to view a Google Map" target="_blank">+ Google Map</a></div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-desc">A UNICEF event always promises to be a night that you and your guests will enjoy and recall for years to come. It is an occasion to join an impressive array of both corporate and individual philanthropists who are committed</div>
                                </div>
                                <div class="cbp-item">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <a href="event/a-landmark-moment-for-zirto/index.html" title="A Landmark Moment"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/blog2-360x235.jpg')?>" alt="A Landmark Moment"></a>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-wrap">
                                        <div class="cbp-l-grid-slider-team-name"><a href="event/a-landmark-moment-for-zirto/index.html" title="A Landmark Moment"><h4>A Landmark Moment</h4></a></div>
                                        <div class="cbp-l-grid-slider-team-position">
                                            <div class="date"><i class="fa fa-calendar"></i>03 January 17</div>
                                            <div class="map-link"><i class="fa fa-map-marker"></i><a class="tribe-events-gmap" href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Champs-%C3%89lys%C3%A9es+Paris+France" title="Click to view a Google Map" target="_blank">+ Google Map</a></div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-desc">The Paris Marathon is one of the most scenic city runs in the world, join our team and help us beat cancer sooner. The 26.2 mile route will take you on a whistle-stop tour of some of Paris’ most famous landmarks,</div>
                                </div>
                                <div class="cbp-item">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <a href="event/help-a-stormtrooper/index.html" title="Help a Stormtrooper"><img src="<?php echo base_url('assets/wp-content/uploads/2016/12/child-360x235.jpg')?>" alt="Help a Stormtrooper"></a>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-wrap">
                                        <div class="cbp-l-grid-slider-team-name"><a href="event/help-a-stormtrooper/index.html" title="Help a Stormtrooper"><h4>Help a Stormtrooper</h4></a></div>
                                        <div class="cbp-l-grid-slider-team-position">
                                            <div class="date"><i class="fa fa-calendar"></i>04 January 17</div>
                                            <div class="map-link"><i class="fa fa-map-marker"></i><a class="tribe-events-gmap" href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Champs-%C3%89lys%C3%A9es+Paris+France" title="Click to view a Google Map" target="_blank">+ Google Map</a></div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-slider-team-desc">The Paris Marathon is one of the most scenic city runs in the world, join our team and help us beat cancer sooner. The 26.2 mile route will take you on a whistle-stop tour of some of Paris’ most famous landmarks,</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h3 class="latest-news"><i class="fa fa-handshake-o"></i>latest news</h3>
                            <ul class="latestnews">
                                <li>
                                    <div class="latestnew">
                                        <div class="latestnew-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/blog2-144x94.jpg" alt="About Our Foundation" /></div>
                                        <div class="latestnew-content"><a href="about-our-foundation/index.html" title="About Our Foundation"><h6>About Our Foundation</h6></a><span><i class="fa fa-calendar"></i>December 29, 2016</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="latestnew">
                                        <div class="latestnew-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/blog3-144x94.jpg" alt="Our Process" /></div>
                                        <div class="latestnew-content"><a href="our-process/index.html" title="Our Process"><h6>Our Process</h6></a><span><i class="fa fa-calendar"></i>December 28, 2016</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="latestnew">
                                        <div class="latestnew-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/blog2-144x94.jpg" alt="CREATIVE POST" /></div>
                                        <div class="latestnew-content"><a href="creative-post/index.html" title="CREATIVE POST"><h6>CREATIVE POST</h6></a><span><i class="fa fa-calendar"></i>December 24, 2016</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="latestnew">
                                        <div class="latestnew-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/blog3-144x94.jpg" alt="THIRD BLOG POST ENTRY" /></div>
                                        <div class="latestnew-content"><a href="third-blog-post-entry/index.html" title="THIRD BLOG POST ENTRY"><h6>THIRD BLOG POST ENTRY</h6></a><span><i class="fa fa-calendar"></i>December 23, 2016</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="latestnew">
                                        <div class="latestnew-img"><img src="<?php echo base_url('assets')?>/wp-content/uploads/2016/12/blog3-144x94.jpg" alt="Save Humanity" /></div>
                                        <div class="latestnew-content"><a href="hello-world-2/index.html" title="Save Humanity"><h6>Save Humanity</h6></a><span><i class="fa fa-calendar"></i>December 9, 2016</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>
    <div id="take-action">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1483089123342 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
            }
            
            .vc_custom_1483092736542 {
                padding-top: 80px !important;
                padding-bottom: 80px !important;
                background-image: url(wp-content/uploads/2016/12/7.jpg) !important;
                background-position: center;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
        </style>
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1483089123342 vc_column-gap-1 vc_row-o-equal-height vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">Make an Impact</h1>
                                <h4 style="color:">Interested in connecting with a larger community? We'd love to hear from you! Check out the number of ways to get involved.</h4></div>
                        </div>
                    </div>
                </div>
                <style>
                    .btn.klb_34d1bf:hover {
                        background-color: #34d1bf !important;
                    }
                    
                    .btn.klb_ffffff:hover {
                        color: #ffffff !important;
                    }
                    
                    .btn.klb_404040:hover {
                        border-color: #404040 !important;
                    }
                </style>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="help-us-visible-item">
                                <div class="overlay-darker"></div><i class="fa fa-paper-plane"></i>
                                <h3>Spread the word</h3>
                                <p>Contact us with your genius social media marketing strategy. If we like it, we’ll put you in charge of it.</p>
                            </div>
                            <div class="button-klb text-center">
                                <div class="remodal" data-remodal-id="modal1">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    </p>
                                    <h3><strong><span style="color: #d1345b;">Spread the Word</span></strong></h3>
                                    <p>Nam consequat lacus purus, ac hendrerit ipsum pellentesque ut. Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Suspendisse scelerisque dolor felis, a consequat est eleifend vitae. Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit.</p>
                                    <h4><strong>Opportunities</strong></h4>
                                    <p>Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit. Sed bibendum nulla et ante tincidunt vestibulum. Aenean dapibus malesuada sodales. Vestibulum scelerisque tincidunt condimentum.</p>
                                    <h4><strong>Requirements</strong></h4>
                                    <p>Sed bibendum nulla et ante tincidunt vestibulum. Aenean dapibus malesuada sodales. Vestibulum scelerisque tincidunt condimentum.Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit.</p>
                                    <h4><strong>Tell us who you are</strong></h4>
                                    <div role="form" class="wpcf7" id="wpcf7-f191-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="http://klbtheme.com/zirto/#wpcf7-f191-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="191" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f191-o1" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name*" /></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email*" /></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div><a class="btn btn-black klb_34d1bf klb_ffffff klb_404040 " href="#modal1" title="Contact Us" style="color:#ffffff;background-color:#d1345b; border:2px solid #d1345b;">Contact Us</a></div>
                        </div>
                    </div>
                </div>
                <style>
                    .btn.klb_34d1c0:hover {
                        background-color: #34d1c0 !important;
                    }
                    
                    .btn.klb_ffffff:hover {
                        color: #ffffff !important;
                    }
                    
                    .btn.klb_34d1bf:hover {
                        border-color: #34d1bf !important;
                    }
                </style>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="help-us-visible-item">
                                <div class="overlay-darker"></div><i class="fa fa-graduation-cap"></i>
                                <h3>Be an Ambassador</h3>
                                <p>Do you want to spearhead initiatives that inspire mass change? Click below to apply to become an ambassador.</p>
                            </div>
                            <div class="button-klb text-center">
                                <div class="remodal" data-remodal-id="modal2">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    </p>
                                    <h2><span style="color: #d1345b;"><strong>Be an Ambassador</strong></span></h2>
                                    <p>Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Suspendisse scelerisque dolor felis, a consequat est eleifend vitae. Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit.</p>
                                    <div role="form" class="wpcf7" id="wpcf7-f205-o2" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="http://klbtheme.com/zirto/#wpcf7-f205-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="205" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f205-o2" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email *" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-city"><input type="text" name="your-city" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="City" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-state"><input type="text" name="your-state" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="State" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div><a class="btn btn-black klb_34d1c0 klb_ffffff klb_34d1bf " href="#modal2" title="Apply Now" style="color:#ffffff;background-color:#d1345b; border:2px solid #d1345b;">Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <style>
                    .btn.klb_34d1c0:hover {
                        background-color: #34d1c0 !important;
                    }
                    
                    .btn.klb_ffffff:hover {
                        color: #ffffff !important;
                    }
                    
                    .btn.klb_34d1bf:hover {
                        border-color: #34d1bf !important;
                    }
                </style>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="help-us-visible-item">
                                <div class="overlay-darker"></div><i class="fa fa-calendar"></i>
                                <h3>Host An Event</h3>
                                <p>We need people! If your up for hosting one of our monthly events in your area, we want to hear from you.</p>
                            </div>
                            <div class="button-klb text-center">
                                <div class="remodal" data-remodal-id="modal3">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    </p>
                                    <h2><span style="color: #d1345b;"><strong>Host an Event</strong></span></h2>
                                    <p>Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Suspendisse scelerisque dolor felis, a consequat est eleifend vitae. Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit.</p>
                                    <div role="form" class="wpcf7" id="wpcf7-f215-o3" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="http://klbtheme.com/zirto/#wpcf7-f215-o3" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="215" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f215-o3" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email *" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-city"><input type="text" name="your-city" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="City" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-state"><input type="text" name="your-state" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="State" /></span> </label>
                                            </p>
                                            <p>
                                                <label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div><a class="btn btn-black klb_34d1c0 klb_ffffff klb_34d1bf " href="#modal3" title="Apply Now" style="color:#ffffff;background-color:#d1345b; border:2px solid #d1345b;">Apply Now</a></div>
                        </div>
                    </div>
                </div>
                <style>
                    .btn.klb_34d1c0:hover {
                        background-color: #34d1c0 !important;
                    }
                    
                    .btn.klb_ffffff:hover {
                        color: #ffffff !important;
                    }
                    
                    .btn.klb_34d1bf:hover {
                        border-color: #34d1bf !important;
                    }
                </style>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="help-us-visible-item">
                                <div class="overlay-darker"></div><i class="fa fa-calendar"></i>
                                <h3>Come Work for Us</h3>
                                <p>Are you a leader who shares our passion for social change? If your up to the challenge, submit your creds below.</p>
                            </div>
                            <div class="button-klb text-center">
                                <div class="remodal" data-remodal-id="modal4">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    </p>
                                    <h2><span style="color: #d1345b;"><strong>Come Work for Us</strong></span></h2>
                                    <p>Aliquam adipiscing, metus sit amet vehicula egestas, justo dolor ultricies mauris, vel porttitor augue nisi vitae metus. Ut et faucibus lorem. Vestibulum sit amet tellus velit.</p>
                                    <div role="form" class="wpcf7" id="wpcf7-f218-o4" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response"></div>
                                        <form action="http://klbtheme.com/zirto/#wpcf7-f218-o4" method="post" class="wpcf7-form" novalidate="novalidate">
                                            <div style="display: none;">
                                                <input type="hidden" name="_wpcf7" value="218" />
                                                <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f218-o4" />
                                                <input type="hidden" name="_wpcf7_container_post" value="0" />
                                            </div>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" /></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" /></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-city"><input type="text" name="your-city" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="City" /></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-state"><input type="text" name="your-state" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="State" /></span> </label>
                                            </p>
                                            <p>
                                                <label> Years of Experience * <span class="wpcf7-form-control-wrap your-experience"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item first"><span class="wpcf7-list-item-label">1</span>
                                                    <input type="radio" name="your-experience" value="1" />
                                                    </span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">2</span>
                                                    <input type="radio" name="your-experience" value="2" checked="checked" />
                                                    </span><span class="wpcf7-list-item"><span class="wpcf7-list-item-label">3</span>
                                                    <input type="radio" name="your-experience" value="3" />
                                                    </span><span class="wpcf7-list-item last"><span class="wpcf7-list-item-label">4</span>
                                                    <input type="radio" name="your-experience" value="4" />
                                                    </span>
                                                    </span>
                                                    </span>
                                                </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tell us about your work experience *"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <label> <span class="wpcf7-form-control-wrap about-you"><textarea name="about-you" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Tell us about yourself *"></textarea></span> </label>
                                            </p>
                                            <p>
                                                <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                            </p>
                                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                                        </form>
                                    </div>
                                </div><a class="btn btn-black klb_34d1c0 klb_ffffff klb_34d1bf " href="#modal4" title="Submit Your Resume" style="color:#ffffff;background-color:#d1345b; border:2px solid #d1345b;">Submit Your Resume</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="10" class="vc_row wpb_row vc_row-fluid vc_custom_1483092736542 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving">
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="counter-item"><i class="fa fa-graduation-cap"></i><span class="counter">74</span>
                                <h6>Events</h6></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="counter-item"><i class="fa fa-diamond"></i><span class="counter">15</span>
                                <h6>Causes</h6></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="counter-item"><i class="fa fa-child"></i><span class="counter">765</span>
                                <h6>Children</h6></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-3">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="counter-item"><i class="fa fa-users"></i><span class="counter">57</span>
                                <h6>Volunteers</h6></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>
    </div>
    <div id="contact">
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1483095086275 {
                padding-top: 100px !important;
                padding-bottom: 100px !important;
            }
        </style>
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1483095086275">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="header">
                                <h1 style="color:">Contact Us</h1>
                                <h4 style="color:">We view ourselves as relational. If you prefer to talk to a real live person, please pick up the phone and give us a call.</h4></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div role="form" class="wpcf7" id="wpcf7-f190-o5" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="http://klbtheme.com/zirto/#wpcf7-f190-o5" method="post" class="wpcf7-form" novalidate="novalidate">
                                    <div style="display: none;">
                                        <input type="hidden" name="_wpcf7" value="190" />
                                        <input type="hidden" name="_wpcf7_version" value="5.1.3" />
                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f190-o5" />
                                        <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    </div>
                                    <p>
                                        <label><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name *" /></span> </label>
                                    </p>
                                    <p>
                                        <label> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email" /></span> </label>
                                    </p>
                                    <p>
                                        <label> <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" /></span> </label>
                                    </p>
                                    <p>
                                        <label><span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span> </label>
                                    </p>
                                    <p>
                                        <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
            <script data-cfasync="false" src="<?php echo base_url('cdn-cgi/scripts/email-decode.min.js')?>"></script>
            <script type="a76da377714191f35fde4b3d-text/javascript">
                jQuery(document).ready(function() {
                    function initialize() {

                        var styles = [{
                            stylers: [{
                                hue: "#eec55b"
                            }, {
                                saturation: -100
                            }, {
                                gamma: 0.9
                            }]
                        }, {
                            featureType: "road",
                            elementType: "geometry",
                            stylers: [{
                                lightness: 100
                            }, {
                                visibility: "simplified"
                            }]
                        }, {
                            featureType: "road",
                            elementType: "labels",
                            stylers: [{
                                visibility: "on"
                            }]
                        }];
                        var styledMap = new google.maps.StyledMapType(styles, {
                            name: "Gray Map"
                        });

                        var latlng = new google.maps.LatLng(40.703383, -74.012796);
                        var myOptions = {
                            zoom: 13,
                            center: latlng,
                            scrollwheel: false,
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            mapTypeControlOptions: {
                                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                            }
                        };

                        var map = new google.maps.Map(document.getElementById("map"),
                            myOptions);
                        map.mapTypes.set('map_style', styledMap);
                        map.setMapTypeId('map_style');

                        var markerimage = '';
                        var marker = new google.maps.Marker({
                            position: {
                                lat: 40.703383,
                                lng: -74.012796
                            },
                            map: map,
                            icon: markerimage,
                        });
                    }
                    google.maps.event.addDomListener(window, "load", initialize);
                });
            </script>
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div id="map_container" class="contact-map ">
                            <div id="map" class="google-map" style="height:500px;"></div>
                            <div class="cover-map">
                                <div class="mm-open">Open The Map <i class="fa fa-angle-down"></i></div>
                                <div class="mm-close">Close The Map <i class="fa fa-angle-up"></i></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="find-us-items">
                                            <div class="col-md-8 col-md-offset-2 header">
                                                <h1>Find Us</h1>
                                                <h4>We Care For Children, Protect Their Welfare, And Prepare Them For The Future Are The Mostthe Future Are The Most</h4></div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 find-us-item">
                                                <div class="map-header"><i class="fa fa-phone"></i>
                                                    <h2>Phone</h2></div><!-- <span>+359 288 55 999 <br>
+359 288 55 999</span> --></div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 find-us-item">
                                                <div class="map-header"><i class="fa fa-map-marker"></i>
                                                    <h2>Address</h2></div><span>4 Byala Cherkva Str.3rd <br>
FloorSofia, 1000, los angeles</span></div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 find-us-item">
                                                <div class="map-header"><i class="fa fa-envelope-o"></i>
                                                    <h2>Emails</h2></div><span><a href="http://klbtheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b72757d745b7077796f737e767e35787476">[email&#160;protected]</a><br>
<a href="http://klbtheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ee7e0e8e1cee5e2ecfae6ebe3eba0ede1e3">[email&#160;protected]</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
    <footer id="footerdown">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <p>
                        Copyright 2017.Kettohelp . All rights reserved</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="footer-social">
                        <li><a href="https://web.facebook.com/?_rdr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script data-cfasync="false" src="<?php echo base_url('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')?>"></script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
        /* <![CDATA[ */
        var tribe_l10n_datatables = {
            "aria": {
                "sort_ascending": ": activate to sort column ascending",
                "sort_descending": ": activate to sort column descending"
            },
            "length_menu": "Show _MENU_ entries",
            "empty_table": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "info_empty": "Showing 0 to 0 of 0 entries",
            "info_filtered": "(filtered from _MAX_ total entries)",
            "zero_records": "No matching records found",
            "search": "Search:",
            "all_selected_text": "All items on this page were selected. ",
            "select_all_link": "Select all pages",
            "clear_selection": "Clear Selection.",
            "pagination": {
                "all": "All",
                "next": "Next",
                "previous": "Previous"
            },
            "select": {
                "rows": {
                    "0": "",
                    "_": ": Selected %d rows",
                    "1": ": Selected 1 row"
                }
            },
            "datepicker": {
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Prev",
                "currentText": "Today",
                "closeText": "Done",
                "today": "Today",
                "clear": "Clear"
            }
        };
        var tribe_system_info = {
            "sysinfo_optin_nonce": "62458f0a7b",
            "clipboard_btn_text": "Copy to clipboard",
            "clipboard_copied_text": "System info copied",
            "clipboard_fail_text": "Press \"Cmd + C\" to copy"
        }; /* ]]> */
    </script>
    <link rel='stylesheet' id='remodal-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/remodal/remodal5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='remodal-theme-css' href='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/remodal/remodal-default-theme5152.css?ver=1.0 ')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='<?php echo base_url('assets/wp-content/plugins/js_composer/assets/css/js_composer.min5b21.css?ver=6.0.2 ')?>' type='text/css' media='all' />
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/circle-progress4963.js?ver=1.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
    </script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/contact-form-7/includes/js/scriptsbdeb.js?ver=5.1.3 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-includes/js/comment-reply.min7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/counter-up/waypoints.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/counter-up/jquery.counterup.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/cubeportfolio/jquery.cubeportfolio.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/progressbar.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/bootstrap/js/bootstrap.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/countto/jquery.countTo5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/theme/js/theme5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-includes/js/wp-embed.min7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/remodal/remodal.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min5b21.js?ver=6.0.2 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/particles/particles.min5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
        /* <![CDATA[ */
        var particle = {
            "dotcolor": "#fff",
            "linecolor": "#fff",
            "number": "80",
            "hovertype": "false",
            "hover": "true"
        };
        /* ]]> */
    </script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/themes/zirto/assets/external/particles/particular-app5152.js?ver=1.0 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min5b21.js?ver=6.0.2 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAAYi6itRZ0rPgI76O3I83BhhzZHIgMwPg&amp;ver=1.0'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/respond.min7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
    </script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/migla_checkOut7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript">
    </script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/migla_form7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/boot-tabs7752.js?ver=5.2.1 ')?>'></script>
    <script type="a76da377714191f35fde4b3d-text/javascript" src='<?php echo base_url('assets/wp-content/plugins/totaldonations/js/bootstrap_tooltip7752.js?ver=5.2.1 ')?>'></script>
    <script src="<?php echo base_url('assets/cdn-cgi/scripts/rocket-loader.min.js')?>" data-cf-settings="a76da377714191f35fde4b3d-|49" defer=""></script>
</body>

<!-- Mirrored from klbtheme.com/zirto/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jul 2019 06:26:24 GMT -->

</html>
<script>
function pass_donation(val)
{
    $('#d_amt_show').val(val);
    $('#plan_amt').val(val);
    //alert(val);
}
</script>
<script>

     //function open_login_modal()
    //{
      //  $('#login_popup').modal('show');
    //}
</script>