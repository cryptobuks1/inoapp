<section class="marketing-area grd-overlay video-area-bg" style="background: url('{{asset('assets/images/subscribe_background.jpg')}}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="marekting-inner">
                    <h2 class="title cl-white">@lang('Get More Update  News')</h2>
                    <div class="subscribe-form-wapper">
                        <form action="{{route('subscribe')}}" method="post" class="subscribe-form">
                            @csrf
                            <div class="form-element">
                                <input type="email" name="email"  class="input-field" placeholder="Enter your email..." required>
                            </div>
                            <input type="submit" class="submit-btn" value="Subscribe now">
                        </form>
                         @if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>