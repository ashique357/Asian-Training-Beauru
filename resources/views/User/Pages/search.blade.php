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
               <form method="post" action="/member-verify" @submit.prevent="result">
                  @csrf
                  <div class="form-group row">
                     <label for="search" class="col-md-12 label-form text-md-left">{{ __('Keyword:') }}</label>
                     <div class="col-md-12">
                        <input id="search" type="text"  class="form-control form-class" name="search" v-model="search" required placeholder="Search for name,registration id...">
                     </div>
                  </div>
                  <div class="form-group row mb-0">
                     <div class="col-md-4">
                        <button type="submit" class="btn btn-primary" @click="result">
                        {{ __('Search') }}
                        </button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="wm-widget-heading">
                        <h2>Searched Result:</h2>
                     </div>
                     <table class="table table-bordered table-responsive fixed">
                        <thead>
                           <tr>
                              <th scope="col" width="10%">#</th>
                              <th scope="col" width="20%">Name of Professional</th>
                              <th scope="col" width="20%">Photo</th>
                              <th scope="col" width="25%">Member's ID</th>
                              <th scope="col" width="25%">Member's Type</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>@{{value}}</td>
                              <td>Oasdasdasdasdasdasdasdasdasdsadasdasdsadsadsadsatto</td>
                              <td>@mdasdasdsadasdsadasdsadasdasdasdasdsado</td>
                              <td>@mdasdasdsadasdsadasdsadasdasdasdasdsado</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--// Main Section \\-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> --}}
<script>
   let v=new Vue({
      el:'#card',
      data:{
         search:'',
      },
      value:{},
      methods:{
         result(){
         axios.post('/member-verify', {
         search: this.search,
         })
         .then((response) => {
            this.value=response.data[0];
            console.log(this.value);
         }, (error) => {
            console.log(error);
            });
         }
      }
   })
</script>
@endsection