@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Verify Membership</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Verify Membership</li>
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

<section id="blog-singel" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">
                  <div class="blog-details mt-30">
                      <div class="cont">
                        <form action="/member-verify" method="Post" @submit.prevent="find">
                           @csrf
                           <input type="text" class="form-input" name="search" v-model="search" placeholder="Keyword:Search for Name/Registration number" required>                      
                           <div class="form-group" style="margin-top:10px";>
                              <button type=submit class="main-btn register-submit" @click="find">Search</button>
                           </div>
                        </form>
                      </div> <!-- cont -->
                  </div> <!-- blog details -->
              </div>
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               
                               <div class="categories mt-30">
                                   <h4>Quick Links</h4>
                                   <ul>
                                       <li><a href="benefit-of-membership">Benefit Of Membership</a></li>
                                       <li><a href="/way-to-become-a-member">How To Become A Member</a></li>
                                       <li><a href="/member/registration">Apply For Membership</a></li>
                                       <li><a href="member-verify">Verify Member</a></li>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                           
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
</section>
@endsection