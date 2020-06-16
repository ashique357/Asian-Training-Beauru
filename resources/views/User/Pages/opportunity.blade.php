@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" >
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Post Opportunity</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Post Opportunity</li>
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
            <form method="POST" id="signup-form" class="signup-form" action="/member/opportunity">
               @csrf
               <h2 class="form-title pb-20">Post Opportunity</h2>
               <div class="form-group">
                  <select name="post_type" class="form-control" @change="hide" id="post_type">
                     <option disabled="false">Select post Category</option>
                     <option value="1">Training</option>
                     <option value="2">Job</option>
                     <option value="3">Consultation</option>
                  </select>
               </div>
               <div id="individual" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="org_name[0]" id="name" placeholder="Organization Name" autocomplete="org_name" autofocus >
                     @error('org_name')
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
                     <textarea name="assignment_details[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your assignment" autofocus></textarea>
                     @error('assignment_details')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea name="requirements[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your requirements" autofocus></textarea>
                     @error('requirements')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="approx[]" id="name" placeholder="Duration of Course" autofocus>
                     @error('approx')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="fees[]" id="name" placeholder="Course Fee">
                     @error('fees')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <!-- job -->
               <div id="provider" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="org_name[1]" id="name" placeholder="Organization Name" autofocus>
                     @error('org_name')
                     <span class="invalid-feedback" style="display:block" role="alert">
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
                     <input type="text" class="form-input" name="position" id="name" placeholder="Job Position" autofocus>
                     @error('position')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea name="assignment_details[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your job description" autofocus></textarea>
                     @error('assignment_details')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="location" id="name" placeholder="Location" autofocus>
                     @error('location')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea name="requirements[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your requirements" autofocus></textarea>
                     @error('requirements')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="approx[]" id="name" placeholder="Time of Submission">
                     @error('approx')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="fees[]" id="name" placeholder="Salary" autofocus>
                     @error('fees')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <!-- consultation -->
               <div id="corporate" hidden>
                  <div class="form-group">
                     <input type="text" class="form-input" name="org_name[2]" id="name" placeholder="Organization Name" autofocus>
                     @error('org_name')
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
                     <textarea name="assignment_details[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your consultation" autofocus></textarea>
                     @error('assignment_details')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <textarea name="requirements[]"  class="form-input" id="" cols="30" rows="10" placeholder="Write details about your consultation requirements" autofocus></textarea>
                     @error('requirements')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="approx[]" id="name" placeholder="Time of Consultation">
                     @error('approx')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-input" name="fees[]" id="name" placeholder="Consultation Fees" autofocus>
                     @error('fees')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <div class="form-group">
                  <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Submit">
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
            
            var v=document.getElementById('post_type').value;
   
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