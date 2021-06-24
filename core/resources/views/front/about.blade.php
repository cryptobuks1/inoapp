@extends('layout')

@section('css')
@endsection
@section('content')



    <!-- breadcrumb area start -->
    <section class="breadcrumb-area breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                        <h1 class="title">{{__($page_title)}}</h1>
                    </div><!-- //.breadcrumb inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->




    <!-- about page content area start -->
    <section class="about-page-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-page-content-inner"><!-- about page content inner -->
                        <h2 class="title">{{__($basic->about_title)}}</h2>
                        <p>{!! $basic->about !!}</p>

                        <div class="video-inner-wrapper">
                            <img src="{{asset('assets/images/about-video-image.jpg')}}" alt="about video image">
                            <div class="hover">
                                <a href="{{$basic->about_video}}" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div><!-- //.about page content inner -->
                </div>
            </div>
        </div>
    </section>
    <!-- about page content area end -->

  @include('partials.achievement')

  
    <!-- testimonial area start -->
    <section class="testimonial-area " id="testimonial_carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content-area"><!-- left content area -->
                        <h3 class="title">{{__($basic->testimonial_h)}}</h3>
                        <p>{{__($basic->testimonial_p)}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content-area">
                        <div class="testimonial-carousel" id="testimonial-carousel">
                            @foreach($testimonial as $data)
                            <div class="single-testimonial-carousel"><!-- single testimonial carousel -->
                                <div class="author-details">
                                    <div class="pro-immage">
                                        <img src="{{asset('assets/images/testimonial/'.$data->image)}}" alt="testimonial image">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{__($data->name)}}</h4>
                                        <span class="post">{{__($data->designation)}}</span>
                                    </div>
                                </div>

                                <div class="description">
                                    <p>{!! $data->details !!}</p>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->


    @include('partials.subscribe')

@endsection
@section('js')
@endsection
