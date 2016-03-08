@extends('master')

@section('title')
{{Lang::get('meta.about_title')}} - Kejia
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
                                <h1 style="font-size:36px; font-family:Bebas Neue; color:#303030">{{Lang::get('page.about_vetool')}}</h1>
                                <p class="description">{{Lang::get('page.banner_slogan')}}</p>
                                <div class="line_under_full">
                                    <div class="line_full"></div>
                                    <div class="full_center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fws_548854f46f934" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
                <div class="container  dark">
                    <div class="section_clear">
                        <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                            <div class="wpb_wrapper">

                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <p>{{Lang::get('page.about_1')}}</p>
                                        <p>{{Lang::get('page.about_2')}}</p>

                                        <p>{{Lang::get('page.about_3')}}</p>

                                        <p>{{Lang::get('page.about_4')}}</p>

                                        <p>{{Lang::get('page.about_5')}}</p>
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
