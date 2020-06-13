@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Register</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Register</li>
                  </ol>
               </nav>
            </div>
            <!-- page banner cont -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
<section class="signup pt-105 pb-120 gray-bg">
   <div class="container">
      <div class="col-md-8 offset-md-2">
         <div class="signup-content">
            <form method="POST" action=action="{{ route('register') }}" id="signup-form" class="signup-form">
            @csrf
            <h2 class="form-title pb-20">Create Account</h2>
            <div class="form-group">
               <input type="text" class="form-input" placeholder="Username" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
               @error('name')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="form-group">
               <input type="email" class="form-input" name="email" placeholder="E-mail" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="form-group">
               <input type="password" class="form-input" name="password" id="password" placeholder="Password"  required autocomplete="current-password">
               <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="form-group">
               <input type="password" class="form-input" name="password_confirmation" required autocomplete="new-password" id="re_password" placeholder="Repeat your password">
            </div>
            <div class="form-group">
               <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
               <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
            </div>
            <div class="form-group">
               <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Sign up">
            </div>
            </form>
            <span class="span-social">or try our socials</span>
            <ul class=>
               <li><a href="{{ url('login/facebook') }}""><i class="wmicon-social5"></i> Facebook</a></li>
               <!-- <li class="wm-twitter-color"><a href="{{ url('login/twitter') }}""><i class="wmicon-social4"></i> twitter</a></li> -->
               <li><a href="{{ url('login/google') }}""><i class="fa fa-google"></i> Google</a></li>
            </ul>
         </div>
      </div>
   </div>
</section>
@endsection