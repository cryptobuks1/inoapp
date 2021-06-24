@extends('user')
@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area breadcrumb-bg white-bg extra">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                        <h1 class="title">{{$page_title}}</h1>
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
                    <div class="login-form-wrapper p-0 shadow-none card">
                        <div class="card-header text-center py-3">
                            <h5 class="title">@lang('Change Password')</h5>
                        </div>
                        <div class="card-body">
                            @include('errors.alert')
                            <form action="" method="post" role="form">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-element margin-bottom-20">
                                            <input type="password" name="current_password"  class="input-field" placeholder="Current Password">
                                            @if ($errors->has('current_password'))
                                                <span class="error">
                                                    <strong>{{ $errors->first('current_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-element margin-bottom-20">
                                            <input type="password" name="password"  class="input-field" placeholder="New Password">
                                            @if ($errors->has('password'))
                                                <span class="error">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-element margin-bottom-20">
                                            <input type="password" name="password_confirmation"  class="input-field" placeholder="Confirm Password">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="error">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="btn-wrapper text-right">
                                            <input type="submit" class="cmn-btn" value=" Change Password">
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

@section('script')
@endsection
