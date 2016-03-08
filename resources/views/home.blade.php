@extends('master')

@section('title')
Kejia Furnace
@stop
@section('description',Lang::get('meta.home_des'))
@section('keywords',Lang::get('meta.home_keywords'))

@section('content')
<div class="top_wrapper   no-transparent">
        <span class="slider-img"></span>
        <section id="slider-fixed" class="slider  padding_top_none" style="">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:500px;">
                            <!-- START REVOLUTION SLIDER 4.6.3 fullwidth mode -->
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:500px;height:500px;">
                                <ul>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner_1.jpg" alt="{{Lang::get('page.laptop')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->
                                    </li>
                                    <!-- SLIDE  -->
                                    <li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="500" data-saveperformance="off">
                                        <!-- MAIN IMAGE -->
                                        <img src="images/banner_2.jpg" alt="{{Lang::get('page.pad')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                        <!-- LAYERS -->

                                    </li>
                                    <!-- SLIDE  -->
                                    {{--<li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">--}}
                                        {{--<!-- MAIN IMAGE -->--}}
                                        {{--<img src="images/banner_3.jpg" alt="{{Lang::get('page.portable')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                                        {{--<!-- LAYERS -->--}}

                                    {{--</li>--}}
                                    <!-- SLIDE  -->
                                    {{--<li data-transition="fade,fadetoleftfadefromright,fadetorightfadefromleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">--}}
                                        {{--<!-- MAIN IMAGE -->--}}
                                        {{--<img src="images/banner_slogan.jpg" alt="{{Lang::get('page.banner_slogan')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">--}}
                                        {{--<!-- LAYERS -->--}}

                                    {{--</li>--}}
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>

                            <div class="revsliderstyles">
                                <style scoped></style>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>

                <div class="bottom_shadow"></div>
            </div>
        </section>

        <!-- .header -->

        <section id="content" style="" class="composer_content">
            <div id="fws_5481c495a5cee" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="padding-top: 30px !important; padding-bottom: 60px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element dynamic_page_header style_3">
                                <h1 style="font-size:36px; font-family:Bebas Neue; color:#444444">{{Lang::get('page.welcome')}}</h1>
                                <p class="description"></p>
                                <div class="line_under_full">
                                    <div class="line_full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5481c495a64e9" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 30px !important; padding-bottom: 90px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <a href="/pad"><h1>{{Lang::get('page.home_pad')}}</h1>
                                    <img src="images/product_1.jpg" alt="{{Lang::get('page.home_pad')}}" /></a>
                                    <div class="serv_content">
                                        <p>{{Lang::get('page.home_pad_des')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <a href="/portable"><h1>{{Lang::get('page.home_portable')}}</h1>
                                    <img src="images/product_2.jpg" alt="{{Lang::get('page.home_portable')}}" /></a>
                                    <div class="serv_content">
                                        <p>{{Lang::get('page.home_portable_des')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element services_media">
                                    <a href="/laptop"><h1>{{Lang::get('page.home_laptop')}}</h1>
                                    <img src="images/product_3.jpg" alt="{{Lang::get('page.home_laptop')}}" /></a>
                                    <div class="serv_content">
                                        <p>{{Lang::get('page.home_laptop_des')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Social Profiles -->

        <!-- Footer -->
    </div>
@stop
