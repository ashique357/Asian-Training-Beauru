@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" >
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Member Register</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Membership Application</li>
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
<section class="signup pt-105 pb-120 gray-bg" id="block">
   <div class="container">
      <div class="col-md-12">
       @include('flash')
         <div class="signup-content" >
            <form method="POST" id="signup-form" class="signup-form" action="/member/registration" enctype="multipart/form-data">
               @csrf
               <h2 class="form-title pb-20">Membership Application</h2>
               <div class="form-group">
                     <select name="member_type" class="form-control" @change="hide" id="member_type">
                        <option disabled="false">Select Member Category</option>
                        <option value="1">Individual</option>
                        <option value="2">Training Provider</option>
                        <option value="3">Corporate</option>
                     </select>
               </div>
 
               <div id="individual" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="name[]" id="name" placeholder="User name" autocomplete="name" autofocus>
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="email" class="form-input" name="email[]" id="email" placeholder="E-mail" autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <select name="country" id="" class="form-control"  autocomplete="country" autofocus>
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
                  <div class="form-group">
                     <input id="address" type="text" class="form-input" placeholder="Address" name="address[]"   autocomplete="address" autofocus>
                     @error('address')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input id="phone" type="phone" class="form-input" placeholder="Phone" name="phone[]"   autocomplete="Phone" autofocus>
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input id="photo" type="file" class="form-input" name="photo"  autocomplete="photo" autofocus>
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input id="desg" type="text" class="form-input" placeholder="Designation Organization" name="desg"   autocomplete="desg" autofocus>
                     @error('con_person')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                       
                  </div>
                  <div class="form-group">
                     <input id="exp" type="text" class="form-input" placeholder="Year of experience" name="exp[]" autofocus>
                     @error('exp')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                        
                  </div>
                  <div class="form-group">
                     <input id="linkedin" type="text" class="form-input" placeholder="Linkedin" name="linkedin"   autocomplete="linkedin" autofocus>
                     @error('linkedin')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                        
                  </div>
                  <div class="form-group">
                     <textarea id="msg" rows="4" cols="50" class="form-input" placeholder="Say something about yourself...." name="msg[]"  style="height: auto !important"></textarea>
                     @error('msg')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               
               <div id="provider" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="name[]" id="name" placeholder="Training Provider Name">
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <select name="country" id="country" class="form-control"  autocomplete="country" autofocus>
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
                  <div class="form-group">
                     <input id="tp_address" type="text" class="form-input" placeholder="Address" name="address[]"   autocomplete="tp_address" autofocus>
                     @error('address')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input id="web" class="form-input" name="web" placeholder="Web address">
                     @error('web')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input id="tp_exp" type="text" class="form-input" placeholder="Year of establishment" name="exp[]"  autocomplete="exp" autofocus>
                     @error('exp')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                        
                  </div>
                  <div class="form-group">
                     <input id="con_person" type="text" class="form-input" placeholder="Contact Persons's Name" name="con_person[]"   autocomplete="con_person" autofocus>
                     @error('con_person')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                       
                  </div>
                  <div class="form-group">
                     <input id="tp_email" type="email" class="form-input" placeholder="Contact Person Email" name="email[]"  autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror                       
                  </div>
                  <div class="form-group">
                     <input id="tp_phone" type="text" class="form-input" placeholder="Contact Person Phone" name="phone[]"  autocomplete="phone" autofocus>
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea id="msg" rows="4" cols="50" class="form-input" placeholder="Say something about your Training organization...." name="msg[]"  style="height: auto !important"></textarea>
                     @error('msg')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div id="corporate" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="name[]" id="name" placeholder="Organization Name">
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <select name="country" id="" class="form-control"  autocomplete="country" autofocus>
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
                  <div class="form-group">
                     <input id="employee" type="text" class="form-input" placeholder="Number of employee" name="employee"   autocomplete="employee" autofocus>
                     @error('employee')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  
                  <div class="form-group">
                     <input id="con_person" type="text" class="form-input" placeholder="Contact Person Name" name="con_person[1]"   autocomplete="con_person[]" autofocus>
                     @error('con_person')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror                       
                  </div>
                  <div class="form-group">
                     <input id="email" type="email" class="form-input" placeholder="Contact Person Email" name="email[]"   autocomplete="email" autofocus>
                     @error('email')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror                       
                  </div>
                  <div class="form-group">
                     <input id="phone" type="text" class="form-input" placeholder="Contact Person Phone" name="phone[]"   autocomplete="Phone" autofocus>
                     @error('phone')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea id="msg" rows="4" cols="50" class="form-input" placeholder="Say something about your organization...." name="msg[]"  style="height: auto !important"></textarea>
                     @error('msg')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message}}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Sign up">
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>



<script type="module">
let vm=new Vue({
   el:'#block',
   
   methods:{
      hide:function(){
         
         var v=document.getElementById('member_type').value;

         if(v==1){
           document.getElementById('individual').removeAttribute('hidden');
           var a=document.getElementById('provider').setAttribute('hidden','hidden');
           var a=document.getElementById('corporate').setAttribute('hidden','hidden');
         }
         if(v==2){
           document.getElementById('provider').removeAttribute('hidden');
           var a=document.getElementById('individual').setAttribute('hidden','hidden');
           var a=document.getElementById('corporate').setAttribute('hidden','hidden');
         }
         if(v==3){
           document.getElementById('corporate').removeAttribute('hidden');
           var a=document.getElementById('provider').setAttribute('hidden','hidden');
           var a=document.getElementById('individual').setAttribute('hidden','hidden');
         }
        
      }
   }
});

</script>