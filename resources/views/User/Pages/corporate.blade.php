@extends('partials.landingLayout')
@section('main_content')
<div class="wm-mini-header">
    <span class="wm-blue-transparent"></span>
     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wm-mini-title">
                       <h1>Training Provider Registration</h1> 
                </div>
                <div class="wm-breadcrumb">
                      <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="/member/corporate/registration">Corporate Membership Registration</a></li>
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
               <form method="POST" action="/member/corporate/registration" >
                  @csrf
                  <div class="form-group row">
                     <label for="name" class="col-md-4 label-form text-md-right">{{ __('Organization Name') }}<span class="required">(*)</span></label>
                     <div class="col-md-8">
                        <input id="name" type="text" class="form-control form-class" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
                  <input type="hidden" name="member_type" value="3">
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
                    <label for="employee" class="col-md-4 label-form text-md-right">{{ __('Number of Empolyee') }} <span class="required">(*)</span></label>
                    <div class="col-md-8">
                       <input id="employee" type="text" class="form-control form-class" name="employee" value="{{ old('employee') }}" required autocomplete="employee" autofocus>
                       @error('employee')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>

                 <div class="form-group row">
                    <label for="address" class="col-md-4 label-form text-md-right">{{ __('Contact Person Name ') }}<span class="required">(*)</span></label>
                    <div class="col-md-8">
                       <input id="con_person" type="text" class="form-control form-class" name="con_person" value="{{ old('con_person') }}" required autocomplete="con_person" autofocus>
                       @error('con_person')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message}}</strong>
                       </span>
                       @enderror
                    </div>
                 </div>

                  <div class="form-group row">
                     <label for="email" class="col-md-4 label-form text-md-right">{{ __('Contact Person Email') }}<span class="required">(*)</span></label>
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
                    <label for="email" class="col-md-4 label-form text-md-right">{{ __('Contact Person Phone') }}<span class="required">(*)</span></label>
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
                    <label for="msg" class="col-md-4 label-form text-md-right">{{ __('About organization') }}</label>
                    <div class="col-md-8">
                       <textarea id="msg" rows="4" cols="50" class="form-control form-class" name="msg" value="{{ old('msg') }}" style="height: auto !important"></textarea>
                       @error('msg')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message}}</strong>
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