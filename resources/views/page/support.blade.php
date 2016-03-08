@extends('master')

@section('title')
    {{Lang::get('meta.support')}} - Kejia
@stop
@section('description',Lang::get('meta.home_des'))
@section('keywords',Lang::get('meta.home_keywords'))

@section('content')
    <div class="top_wrapper   no-transparent">

        <!-- .header -->


        <section id="content" style="" class="composer_content">








            <div id="fws_5481cb0e0f758" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="background-color: #f6f6f6; padding-top: 60px !important; padding-bottom: 8px !important; ">
                <div class="col span_12  dark">
                    <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                        <div class="wpb_wrapper">
                            <div class="wpb_content_element dynamic_page_header style_2">
                                <h1 style="font-size:36px; font-family:Bebas Neue; color:#303030">{{Lang::get('page.welcome_to_support')}}</h1>
                                <p class="description">{{Lang::get('page.welcome_to_support')}}.</p>
                                <div class="line_under_full">
                                    <div class="line_full"></div>
                                    <div class="full_center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section id="content" class="composer_content">








                <div id="fws_5486f94bc9bef" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                    <div class="container  dark">
                        <div class="section_clear">
                            <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                                <div class="wpb_wrapper">
                                    <div class="">
                                        <!-- Portfolio Filter -->
                                        <nav id="faq-filter" class="">
                                            <ul class="">
                                                <li class="active all"><a href="#" data-filter="*">{{Lang::get('page.view_all')}}</a><span></span></li>

                                                <li class="other"><a href="#" data-filter=".payment">{{Lang::get('page.payment_warranty')}}</a><span></span></li>

                                                {{--<li class="other"><a href="#" data-filter=".wordpress">yunshu</a><span></span></li>--}}
                                            </ul>
                                        </nav>
                                        <div class="accordion faq style_1" id="accordion759">

                                            <div class="accordion-group payment">
                                                <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion759" href="#toggle21977"><i class=""></i>{{Lang::get('page.payment_terms')}}</a>
                                                </div>
                                                <div id="toggle21977" class="accordion-body in collapse ">
                                                    <div class="accordion-inner">{{Lang::get('page.payment_terms_1')}}
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="accordion-group payment">
                                                <div class="accordion-heading "><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion759" href="#toggle21978"><i class=""></i>{{Lang::get('page.methods_transportation')}}</a>
                                                </div>
                                                <div id="toggle21978" class="accordion-body  collapse ">
                                                    <div class="accordion-inner">{{Lang::get('page.methods_transportation_1')}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-group payment">
                                                <div class="accordion-heading "><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion759" href="#toggle43155"><i class=""></i>{{Lang::get('page.warranty')}}</a>
                                                </div>
                                                <div id="toggle43155" class="accordion-body  collapse ">
                                                    <div class="accordion-inner">{{Lang::get('page.warranty_1')}}</div>
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

        </section>
    </div>
@stop
