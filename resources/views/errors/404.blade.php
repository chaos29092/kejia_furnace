@extends('master')

@section('title','Page Not Found - Veteye')
@section('description','Veteye info, p1, p2, p3, and more. Find your way around veteye.com.')
@section('keywords','keywordsss')

@section('menu')
    <li class="hasSubMenu"><a href="/">Home</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('product')}}">Product</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('support')}}">Support</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('contact')}}">Contact</a></li>
    <li class="hasSubMenu"><a href="{{URL::to('shortcode')}}">Shortcode</a></li>
@stop

@section('content')

    <div class="top_wrapper   no-transparent">

        <section id="content" style="padding-top:0px !important; padding-bottom:0px !important;">



            <div class="row-fluid row-dynamic-el" style=" margin-bottom:100px;">

                <div class="container">

                    <div class="row-fluid">

                        <div class="row-fluid row-dynamic-el " style="">

                            <div class="container">

                                <div class="row-fluid">

                                    <div class="span12 dynamic_page_header not_found_error">

                                        <div class="headings">
                                            <h2> <strong>Ohh!!</strong>You have requested the page that its no longer avaible</h2>
                                            <h3>or the page may have been removed.</h3>
                                        </div>

                                        <div class="image_not_found">
                                            <img src="img/404.png" />
                                        </div>

                                        <div class='title'>
                                            <h1> PAGE NOT FOUND                                                    </h1></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <a href="#" class="scrollup">Scroll</a>

    </div>

@stop
