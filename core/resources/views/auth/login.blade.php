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
                <div class="col-lg-5">
                    <div class="login-form-wrapper card shadow-none p-0"><!-- login form wrapper -->
                        <div class="card-header text-center py-3">
                            <h5 class="title">@lang('Login Your Account')</h5>
                        </div>
                        <div class="card-body">
                            @if (session('logout'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('logout') }}
                                </div>
                            @endif
                            @if (session('success'))
                                    <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('danger'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{ session('danger') }}
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-element has-icon margin-bottom-20">
                                    <input type="text" class="input-field" name="username" placeholder="@lang('Enter Username')"  value="{{ old('username') }}">
                                    <div class="the-icon">
                                        <i class="far fa-user"></i>
                                    </div>
                                    @if ($errors->has('username'))
                                        <span class="error ">
                                                    <strong>{{ $errors->first('username') }}</strong>
                                                </span>
                                    @endif
                                </div>
                                <div class="form-element has-icon margin-bottom-20">
                                    <input type="password" class="input-field" name="password" placeholder="@lang('Enter Password')">
                                    <div class="the-icon">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                </div>
                                <div class="checkbox-area margin-bottom-20">
                                    <div class="checkbox-element">
                                        <div class="checkbox-wrapper">
                                            <label class="checkbox-inner">@lang('Keep me logged in')
                                                <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper margin-bottom-20 d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="right-content float-none">
                                        <a href="{{ route('password.request') }}" class="anchor">@lang('Forgot Password?')</a>
                                    </div>
                                    <div class="left-content float-none">
                                        <input type="submit" class="submit-btn" value="Login">
                                    </div>
                                </div>
                                <div class="from-footer">
                                    <span class="ftext">@lang('Not a member?')  <a href="{{ route('register') }}">@lang('Create an Account')</a></span>
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
