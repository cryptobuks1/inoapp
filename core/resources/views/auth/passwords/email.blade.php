@extends('layout')

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



    <!-- login page content area start -->
    <section class="login-page-area">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="login-form-wrapper shadow-none p-0 card">
                        <div class="card-header py-3 text-center">
                            <h5 class="title">@lang('Forget Password')</h5>
                        </div>

                        <div class="card-body">
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if(Session::has('danger'))
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ Session::get('danger') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('user.password.email') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-element margin-bottom-20">
                                            <input type="email" name="email" value="{{ old('email') }}" class="input-field" placeholder="@lang('Email Address')">
                                            @if ($errors->has('email'))
                                                <span class="error ">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">

                                        <div class="btn-wrapper">
                                                <input type="submit" class="cmn-btn" value="@lang('Send Reset Link')">
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page content area end -->


@endsection
