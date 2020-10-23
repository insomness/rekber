@extends('fronts.layouts.app')
@section('content')
<section id="features" class="features mt-5">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="row feature-item">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('themes/rapid')}}/assets/img/features-1.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 mt-5 wow fadeInUp pt-5 pt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="150">
          <h4>Login Sekarang</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div> --}}

                <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>

                        <p class="mt-2">Belum punya akun?
                            <a href="{{route('register')}}" class="btn-link">Daftar Sekarang</a>
                        </p>
                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                </div>
            </form>
        </div>
      </div>
    </div>
</section>

@endsection
