@extends('partials.landingLayout') @section('main_content')
<div class="wm-mini-header">
   <span class="wm-blue-transparent"></span>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="wm-mini-title">
               <h1>Student Dashboard</h1>
            </div>
            <div class="wm-breadcrumb">
               <ul>
                  <li><a href="'/'">Home</a></li>
                  <li><a href="#">Student Dashboard</a></li>
                  <li>My Courses</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="wm-main-content">
<!--// Main Section \\-->
<div class="wm-main-section">
   <div class="container">
      <div class="row">
         <aside class="col-md-4">
            <div class="wm-student-dashboard-nav">
               <div class="wm-widget-heading">
                  <h2>Quick Links</h2>
               </div>
               <div class="wm-student-nav">
                  <ul>
                     <li><a href="/membership-verify">Verify Membership</a>
                     </li>
                     <li>
                        <a href="/way-to-become-a-member">
                           </i>How to Become a Member
                     </li>
                     <li><a href="">Membership Application</a>
                     </li>
                  </ul>
               </div>
            </div>
         </aside>
         <div class="col-md-8" id="card">
            <div class="card-body">
               <form method="" action="">
                  @csrf
                  <div class="form-group row">
                    <label for="country" class="col-md-12 label-form text-md-right">{{ __('Country') }}<span class="required">(*)</span></label>
                    <div class="col-md-12">
                       <select name="country" id="" class="form-control form-class" required autocomplete="country" autofocus>
                           <option disabled="false">Select Country</option>
                       <option value="">1</option>
                       </select>
                       @error('country')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                     <label for="search" class="col-md-12 label-form text-md-left">{{ __('Organization Name') }}</label>
                     <div class="col-md-12">
                        <input id="org_name" type="text"  class="form-control form-class" name="org_name"  required placeholder="org_name for name,registration id...">
                        @error('country')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                    <label for="country" class="col-md-12 label-form text-md-right">{{ __('Country') }}<span class="required">(*)</span></label>
                    <div class="col-md-12">
                       <select name="country" id="" class="form-control form-class" required autocomplete="country" autofocus>
                           <option disabled="false">Select Country</option>
                       <option value="">1</option>
                       </select>
                       @error('country')
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <strong>Assignment Details</strong>
                        <textarea class="form-control summernote" id="summernote" name="membership_benefit" ></textarea>
                 </div>
                  <div class="form-group row mb-0">
                     <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">
                        {{ __('Search') }}
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!--// Main Section \\-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> --}}
<script type="text/javascript">

    $(document).ready(function() {

     $('.summernote').summernote({

           height: 300,

      });
	  $('.dropdown-toggle').dropdown();

   });

</script>

@endsection

