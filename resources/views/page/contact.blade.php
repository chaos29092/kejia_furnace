@extends('master')

@section('title')
    {{Lang::get('meta.contact_title')}} - Kejia
@stop
@section('description',Lang::get('meta.home_des'))
@section('keywords',Lang::get('meta.home_keywords'))

@section('content')
    <div class="top_wrapper   no-transparent">


        <!-- .header -->


        <section id="content" style="" class="composer_content">








            <div id="fws_5486f9743fcb6" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element">
                                <div class="row-fluid row-google-map " style="position:relative; height:450px;">
                                    <div class="overlay" onClick=" style.pointerEvents= &apos; none &apos; "></div>
                                    <iframe class="googlemap " style="height:450px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d418449.33228166954!2d113.21204960355837!3d34.97827284482311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35d77ae76cdf092b%3A0x988857ff8319a2e5!2z5Zu95a625aSn5a2m56eR5oqA5Zut!5e0!3m2!1sen!2s!4v1444793001004"></iframe>
                                    <div class="desc"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f974404b9" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el section-style    " style="padding-top: 60px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element dynamic_page_header style_1">
                                    <h1 style="font-size:36px; font-family:Bebas Neue; color:#009dd1">{{Lang::get('page.get_in_touch')}}</h1>
                                    <div class="line_under">
                                        <div class="line_left"></div>
                                        <div class="line_center"></div>
                                        <div class="line_right"></div>
                                    </div>
                                    <p class="description">{{Lang::get('page.get_in_touch_1')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fws_5486f97440b3d" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-8 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="contact_form wpb_content_element">
                                    <div class="row-fluid">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <form name="contactForm" class="standard-form row-fluid" action="mailPost" method="post">
                                                    <input class="span6" name="name" placeholder="Name" type="text" id="themeple_name" value="" />
                                                    <input class="span6" name="email" placeholder="E-Mail" type="text" id="themeple_e-mail" value="" />
                                                    <input class="span6" name="subject" placeholder="Subject" type="text" id="themeple_subject" value="" />
                                                    <textarea class="span12" placeholder="Message" name="mes" cols="40" rows="7" id="themeple_message"></textarea>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="pageid" value="@yield('title')">
                                                    <p class="perspective">
                                                        <input type="submit" value="Submit Form" class="btn-system normal default" />
                                                    </p>
                                                </form>
                                                <div id="ajaxresponse"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_col-sm-4 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">
                                <div class="wpb_content_element contact_info">
                                    <h2>{{Lang::get("page.contact_info")}}</h2>
                                    <div class="content">
                                        <p>{{Lang::get('page.address_1')}},
                                            <br />{{Lang::get('page.address_2')}}
                                            <br>Email : web@kejiafurnace.com
                                            <br>skype:
                                            <br>Tel : +86-371-67826992
                                        <div class="social">
                                            <ul>
                                                <li><a href="#"><i class="icon-google_plus"></i></a>
                                                </li>
                                                <li><a href="#" target="_blank"><i class="icon-linkedin"></i></a>
                                                </li>
                                                <li><a href="#"><i class="icon-pinterest"></i></a>
                                                </li>
                                                <li><a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                                </li>
                                                <li><a href="#" target="_blank"><i class="icon-facebook"></i></a>
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


        </section>

    </div>
@stop
