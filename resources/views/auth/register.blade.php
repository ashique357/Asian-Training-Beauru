@extends('partials.landingLayout')
@section('main_content')
<div class="col-md-12">
   <div class="wm-classic-heading">
      <h2>Register</h2>
   </div>
</div>

<div class="col-md-12">
   <div class="wm-form-wrap wm-typography-element">
      <div class="row">
         <div class="col-md-8">
            <div class="card-body">
               <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="form-group row">
                     <label for="name" class="col-md-4 label-form text-md-right">{{ __('Username') }}</label>
                     <div class="col-md-8">
                        <input id="name" type="text" class="form-control form-class " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="email" class="col-md-4 label-form text-md-right">{{ __('E-Mail Address') }}</label>
                     <div class="col-md-8">
                        <input id="email" type="email" class="form-control form-class" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="form-group row">
                     <label for="password" class="col-md-4 label-form text-md-right">{{ __('Password') }}</label>
                     <div class="col-md-8">
                        <input id="password" type="password"  class="form-control form-class" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="password-confirm" class="col-md-4 label-form text-md-right">{{ __('Confirm Password') }}</label>
                     <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control form-class" name="password_confirmation" required autocomplete="new-password">
                     </div>
                  </div>
                  <div class="form-group row mb-0">
                     <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                        </button>
                     </div>
                  </div>
                  <span class="span-social">or try our socials</span>
                  <ul class="wm-login-social-media">
                     <li><a href="{{ url('login/facebook') }}""><i class="wmicon-social5"></i> Facebook</a></li>
                     <!-- <li class="wm-twitter-color"><a href="{{ url('login/twitter') }}""><i class="wmicon-social4"></i> twitter</a></li> -->
                     <li class="wm-googleplus-color"><a href="{{ url('login/google') }}""><i class="fa fa-google"></i> Google</a></li>
                  </ul>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection