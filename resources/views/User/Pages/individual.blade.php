@extends('partials.landingLayout')
@section('main_content')
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                       <h1>Member Registration</h1> 
                </div>
                <div class="wm-breadcrumb">
                      <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="/member/registration">Member Registration</a></li>
                      </ul>
                </div>      
            </div>
        </div>
    </div>    
</div>
<div class="container-fluid">
<div class="col-md-12">
   <div class="wm-form-wrap wm-typography-element">
      <div class="row">
         <div class="col-md-8">
            @include('flash')
            <div class="card-body">
               <form method="POST" action="/member/registration" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                     <label for="name" class="col-md-4 label-form text-md-right">{{ __('Username') }}<span class="required">(*)</span></label>
                     <div class="col-md-8">
                        <input id="name" type="text" class="form-control form-class" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <input type="hidden" name="member_type" value="1">
                  <div class="form-group row">
                     <label for="email" class="col-md-4 label-form text-md-right">{{ __('E-Mail Address') }}<span class="required">(*)</span></label>
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
                    <label for="country" class="col-md-4 label-form text-md-right">{{ __('Country') }}<span class="required">(*)</span></label>
                    <div class="col-md-8">
                       <select name="country" id="" class="form-control form-class" required autocomplete="country" autofocus>
                           <option disabled="false">Select Country</option>
                           @foreach ($countries as $c)
                       <option value="{{$c->id}}">{{$c->name}}</option>
                           @endforeach
                       </select>
                       @error('country')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>

                  <div class="form-group row">
                    <label for="email" class="col-md-4 label-form text-md-right">{{ __('Phone') }}<span class="required">(*)</span></label>
                    <div class="col-md-8">
                       <input id="phone" type="phone" class="form-control form-class" name="phone" value="{{ old('phone') }}" required autocomplete="Phone" autofocus>
                       @error('phone')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>
                 <div class="form-group row">
                    <label for="address" class="col-md-4 label-form text-md-right">{{ __('Address') }} <span class="required">(*)</span></label>
                    <div class="col-md-8">
                       <input id="address" type="text" class="form-control form-class" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                       @error('address')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>
                 <div class="form-group row">
                  <label for="photo" class="col-md-4 label-form text-md-right">{{ __('Upload Your Image') }}<span class="required">(*)</span></label>
                  <div class="col-md-8">
                     <input id="photo" type="file" class="form-control form-class" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>
                     @error('photo')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
                 <div class="form-group row">
                    <label for="address" class="col-md-4 label-form text-md-right">{{ __('Designation Organization') }}</label>
                    <div class="col-md-8">
                       <input id="desg" type="text" class="form-control form-class" name="desg" value="{{ old('desg') }}">
                       @error('desg')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message}}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>
                 <div class="form-group row">
                    <label for="address" class="col-md-4 label-form text-md-right">{{ __('Years Of Experience ') }}</label>
                    <div class="col-md-8">
                       <input id="exp" type="text" class="form-control form-class" name="exp" value="{{ old('exp') }}">
                       @error('exp')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message}}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>

                 <div class="form-group row">
                    <label for="address" class="col-md-4 label-form text-md-right">{{ __('About Me') }}</label>
                    <div class="col-md-8">
                       <textarea id="msg" rows="4" cols="50" class="form-control form-class" name="msg" value="{{ old('msg') }}" style="height: auto !important"></textarea>
                       @error('msg')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message}}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>

                 <div class="form-group row">
                    <label for="linkedin" class="col-md-4 label-form text-md-right">{{ __('Linkedin Profile ') }}</label>
                    <div class="col-md-8">
                       <input id="linkedin" type="text" class="form-control form-class" name="linkedin" value="{{ old('linkedin') }}"  autofocus>
                       @error('linkedin')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>
                
                  <div class="form-group row mb-0">
                     <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                        </button>
                     </div>
                  </div>
                  
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection