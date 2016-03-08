<!DOCTYPE html>

<html class="css3transitions">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

	<![endif]-->
    <link rel='stylesheet' id='rs-plugin-settings-css' href='plugins/revslider/rs-plugin/css/settings.css' type='text/css' media='all' />

    <link rel='stylesheet' id='woocommerce-layout-css' href='plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css' href='plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
     
    <link rel='stylesheet' id='font_extra-css' href='http://fonts.googleapis.com/css?family=Satisfy&amp;ver=4.0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-responsive-css' href='css/bootstrap-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.fancybox-css' href='fancybox/source/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='hoverex-css' href='css/hoverex-all.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vector-icons-css' href='css/vector-icons.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css' href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='linecon-css' href='css/linecon.css' type='text/css' media='all' />
    <link rel='stylesheet' id='steadysets-css' href='css/steadysets.css' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery.easy-pie-chart-css' href='css/jquery.easy-pie-chart.css' type='text/css' media='all' />
    <link rel='stylesheet' id='idangerous.swiper-css' href='css/idangerous.swiper.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='plugins/js_composer/assets/css/js_composer.css' type='text/css' media='all' />

</head>

<!-- End of Header -->

<body class="home page header_1_body fixed_slider with_slider_page wpb-js-composer vc_responsive">

    <!-- Used for boxed layout -->


    <!-- Start Top Navigation -->
    <div class="top_nav">

        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <div class="pull-left">
                        <div id="text-2" class="widget widget_text">
                            <div class="textwidget">{{Lang::get('page.language')}}： <a href="http://zirconia-furnace.com/">English</a> | <a href="http://zirconia-furnace.com/">Español</a></div>
                        </div>
                        <div id="text-3" class="widget widget_text">
                            <div class="textwidget"><a href="mailto:web@kejiafurnace.com">web@kejiafurnace.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="pull-right">
                        <div id="text-4" class="widget widget_text">
                            <div class="textwidget">{{Lang::get('page.follow_us')}}:</div>
                        </div>
                        <div id="social_widget-3" class="widget social_widget">
                            <div class="row-fluid social_row">
                                <div class="span12">
                                    <ul class="footer_social_icons">
                                        <li class="google_plus"><a href="#"><i class="moon-google_plus"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="#" target="_blank"><i class="moon-linkedin"></i></a>
                                        </li>
                                        <li class="pinterest"><a href="#"><i class="moon-pinterest"></i></a>
                                        </li>
                                        <li class="twitter"><a href="#" target="_blank"><i class="moon-twitter"></i></a>
                                        </li>
                                        <li class="facebook"><a href="#" target="_blank"><i class="moon-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Top Navigation -->

    <!-- Page Background used for background images -->
    <div id="page-bg"></div>


    <!-- Header BEGIN -->

    <div class="header_wrapper header_1 no-transparent  ">
        <header id="header" class=" ">



            <div class="container">
                <div class="row-fluid">
                    <div class="span12">

                        <!-- Logo -->
                        <div id="logo" class="">
                            <a href='/'>
                                <img src="images/logo.png" alt='{{Lang::get('page.logo_alt')}}' />
                            </a>
                        </div>
                        <!-- #logo END -->

                        <!-- Show for all header expect header 4 -->
                        <div id="navigation" class="nav_top pull-right ">
                            <nav>
                                <ul id="menu-menu-1" class="menu themeple_megemenu sub-menu">
                                    <li class="hasSubMenu"><a href="/">{{Lang::get('page.home')}}</a></li>
                                    {{--<li class="hasSubMenu"><a href="{{URL::to('shortcode')}}">Shortcode</a></li>--}}
                                    <li class="hasSubMenu"><a href="{{URL::to('pad')}}">{{Lang::get('page.menu_pad')}}</a></li>
                                    <li class="hasSubMenu"><a href="{{URL::to('portable')}}">{{Lang::get('page.menu_portable')}}</a></li>
                                    <li class="hasSubMenu"><a href="{{URL::to('laptop')}}">{{Lang::get('page.menu_laptop')}}</a></li>
                                    <li class="hasSubMenu"><a href="{{URL::to('support')}}">{{Lang::get('page.support')}}</a></li>
                                    <li class="hasSubMenu"><a href="{{URL::to('contact')}}">{{Lang::get('page.contact')}}</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- #navigation -->


                        <!-- End custom menu here -->
                        <a href="#" class="mobile_small_menu open"></a>
                    </div>
                </div>
            </div>
        </header>


        <div class="header_shadow"><span class=""></span>
        </div>
        <!-- Responsive Menu -->
        <div class="menu-small">
            <ul class="menu">
                <li class="hasSubMenu"><a href="/">{{Lang::get('page.home')}}</a></li>
                {{--<li class="hasSubMenu"><a href="{{URL::to('shortcode')}}">Shortcode</a></li>--}}
                <li class="hasSubMenu"><a href="{{URL::to('pad')}}">{{Lang::get('page.menu_pad')}}</a></li>
                <li class="hasSubMenu"><a href="{{URL::to('portable')}}">{{Lang::get('page.menu_portable')}}</a></li>
                <li class="hasSubMenu"><a href="{{URL::to('laptop')}}">{{Lang::get('page.menu_laptop')}}</a></li>
                <li class="hasSubMenu"><a href="{{URL::to('support')}}">{{Lang::get('page.support')}}</a></li>
                <li class="hasSubMenu"><a href="{{URL::to('contact')}}">{{Lang::get('page.contact')}}</a></li>
            </ul>
        </div>
        <!-- End Responsive Menu -->
    </div>

    @yield('content')



    <div class="footer_wrapper">
        <div class="footer_social_bar">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="top_footer">
                            <div class="container">
                                <ul class='tweet_list' id='tweet_footer'>
                                    <li class="tweet">
                                        <h5><img alt="" src="images/2014/11/Xnm33bK6_normal.png"> {{Lang::get('page.subscribe_notice')}} </h5>
                                    </li>
                                    <li class="tweet">
                                        <h5><img alt="" src="images/2014/11/Xnm33bK6_normal.png"> {{Lang::get('page.subscribe_notice')}} </h5>
                                    </li>
                                </ul>
                                <div class="pagination pull-right">
                                    <a href="#" class="back" style="display: block"><i class="moon-arrow-left"></i></a>
                                    <a href="#" class="next" style="display: block"><i class="moon-arrow-right-2"></i></a>
                                </div>
                                <span class="shadow_top_footer"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="type_">


            <div class="inner">
                <div class="container">
                    <div class="row-fluid ff">

                        <!-- widget -->
                        <div class="span3">

                            <div id="text-5" class="widget widget_text">
                                <h4 class="widget-title">{{Lang::get('page.upgrade_promotions')}}</h4>
                                <div class="thin_line"></div>
                                <div class="textwidget">{{Lang::get('page.upgrade_promotions_1')}}</div>
                            </div>



                            <!--End mc_embed_signup-->
                        </div>




                        <div class="span3">

                            <div id="recent-posts-4" class="widget widget_recent_entries">
                                <h4 class="widget-title">{{Lang::get('page.products')}}</h4>
                                <div class="thin_line"></div>
                                <ul>
                                    <li>
                                        <a href="pad">{{Lang::get('page.foot_pad')}}</a>
                                    </li>
                                    <li>
                                        <a href="portable">{{Lang::get('page.foot_portable')}}</a>
                                    </li>
                                    <li>
                                        <a href="laptop">{{Lang::get('page.foot_laptop')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>




                        <div class="span3">

                            <div id="recent-posts-4" class="widget widget_recent_entries">
                                <h4 class="widget-title">{{Lang::get('page.service_support')}}</h4>
                                <div class="thin_line"></div>
                                <ul>
                                    <li>
                                        <a href="support">{{Lang::get('page.transport_payment')}}</a>
                                    </li>
                                    <li>
                                        <a href="support">{{Lang::get('page.service')}}</a>
                                    </li>
                                </ul>
                            </div>

                        </div>




                        <div class="span3">

                            <div id="recent-posts-4" class="widget widget_recent_entries">
                                <h4 class="widget-title">{{Lang::get('page.about_vetool')}}</h4>
                                <div class="thin_line"></div>
                                <ul>
                                    <li>
                                        <a href="about">{{Lang::get('page.about_vetool')}}</a>
                                    </li>
                                    <li>
                                        <a href="contact">{{Lang::get('page.contact_vetool')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

            <div id="copyright">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12 desc">COPYRIGHT © 2015 - ALL RIGHTS RESERVED</div>

                    </div>
                </div>
            </div>
            <!-- #copyright -->

        </footer>
        <!-- #footer -->
    </div>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/jquery/jquery.form.min.js'></script>
    <script type='text/javascript' src='js/jquery/ui/jquery.ui.core.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>

    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js'></script>

    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='fancybox/source/jquery.fancybox.js'></script>
    <script type='text/javascript' src='fancybox/source/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='js/jquery.hoverex.js'></script>
    <script type='text/javascript' src='js/main.js'></script>

    <script type='text/javascript' src='js/jquery/ui/jquery.ui.widget.min.js'></script>
    <script type='text/javascript' src='js/jquery/ui/jquery.ui.accordion.min.js'></script>
    <script type='text/javascript' src='js/js.js'></script>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69019284-1', 'auto');
  ga('send', 'pageview');

</script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '154516114933547');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=154516114933547&ev=PageView&noscript=1"
                /></noscript>
    <!-- End Facebook Pixel Code -->

</body>

</html>