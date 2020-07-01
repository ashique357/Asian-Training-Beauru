@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Dashboard</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
<section id="teachers-singel" class="pt-70 pb-120 gray-bg">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-4 col-md-8">
            <div class="teachers-left mt-50">
               <div class="hero">
                  <h5>Dashboard</h5>
                  <a href="#">
                  <img src="/images/avatar.jpg" alt="" style="width:250px;height:250px;">
                  </a>
               </div>
               <!-- singel dashboard -->
               <aside class="sidebar">
                  <ul class="nav-side">
                     <li><a href="">Timeline</a></li>
                     <li><a href="">Learning Circle</a></li>
                     <li><a href="">Activity</a></li>
                     <li><a href="">Purchased</a></li>
                     <li><a href="">Settings</a></li>
                     <li><a href="">Logout</a></li>
                  </ul>
               </aside>
               <!-- singel dashboard -->
            </div>
            <!-- teachers left -->
         </div>
         <div class="col-lg-8">
            <div class="blog-details mt-50">
               <div class="cont">
               </div>
               <!-- cont -->
            </div>
            <!-- blog details -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
@endsection