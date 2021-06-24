@extends('layout')

@section('css')
@endsection
@section('content')

    <!-- breadcrumb area start -->
    <section class="breadcrumb-area breadcrumb-bg white-bg extra">
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



    <section class="contact-page-area pb-120">
        <div class="container">
            <div class="contact-page-container p-0 shadow-none card">
                <div class="card-header text-center py-3">
                    <h5 class="title">@lang('Send Us Message')</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="get_in_touch" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-element margin-bottom-30">
                                    <label for="name" class="label">@lang('Name') *</label>
                                    <input type="text" name="name" id="name" class="input-field"
                                            placeholder="@lang('Enter your name')">

                                    @if ($errors->has('name'))
                                        <span class="error">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-element margin-bottom-30">
                                    <label for="phone" class="label">@lang('Phone') *</label>
                                    <input type="text" name="phone" id="phone" class="input-field"
                                            placeholder="@lang('Enter phone number')">
                                    @if ($errors->has('phone'))
                                        <span class="error">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-element margin-bottom-30">
                                    <label for="email" class="label">@lang('Email') *</label>
                                    <input type="email" name="email" id="email" class="input-field"
                                            placeholder="@lang('Enter your email')">
                                    @if ($errors->has('email'))
                                        <span class="error">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-element margin-bottom-30">
                                    <label for="subject" class="label">@lang('Subject') *</label>
                                    <input type="text" name="subject" id="subject" class="input-field"
                                            placeholder="@lang('Enter your subject')">
                                    @if ($errors->has('subject'))
                                        <span class="error">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-element textarea margin-bottom-30">
                                    <label for="message" class="label">@lang('Message') *</label>
                                    <textarea name="message" id="message" placeholder="Enter message"
                                                class="input-field textarea" cols="30" rows="10"></textarea>

                                    @if ($errors->has('message'))
                                        <span class="error">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                                <div class="text-right">
                                    <input type="submit" class="cmn-btn" value="@lang('Send Message')">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <div class="brance-section pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="brance-item">
                        <div class="brance-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <ul>
                            <li>
                                {{$basic->address}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="brance-item">
                        <div class="brance-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <ul>
                            <li>
                                <a href="Tel:{{$basic->phone}}">{{$basic->phone}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="brance-item">
                        <div class="brance-icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <ul>
                            <li>
                                <a href="Mailto:{{$basic->email}}">{{$basic->email}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if($basic->location == 1)
    <!-- map area start -->
    <div class="map-area" id="map"  data-lag="{{$basic->latitude}}" data-loge="{{$basic->longitude}}"></div>
    <!-- map area end -->
        @else
        @include('partials.subscribe')
    @endif




@endsection

@section('js')

    <script src="https://maps.googleapis.com/maps/api/js?key={{$basic->map_api}}&callback=initMap"
            async defer></script>
    <!-- google map activate js -->
    <script src="{{asset('assets/front/js/google-map-activate.js')}}"></script>

@endsection
