@extends('fronts.layouts.app')
@section('content')
<section id="features" class="features mt-5">
    <div class="container aos-init aos-animate" data-aos="fade-up">
      <div class="row feature-item">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('themes/rapid')}}/assets/img/register.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 mt-5 wow fadeInUp pt-5 pt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="150">
          <h4>Ayo Daftar!</h4>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <div class="form-group row">
                    <div class="col">
                        <label for="first_name">Nama Depan</label>
                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="last_name">Nama Belakang</label>
                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">Konfirmasi Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
        </div>
      </div>
    </div>
</section>
@endsection
