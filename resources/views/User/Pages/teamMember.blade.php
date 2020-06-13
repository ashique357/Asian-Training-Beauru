@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Teachers</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Our Team</li>
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
                  @if($team->image)
                  <a href="#">
                  <img src="/uploads/images/{{$team->image}}" alt="" style="width:250px;height:250px;">
                  </a>
                  @else
                  <a href="#">
                  <img src="/images/avatar.jpg" alt="" style="width:250px;height:250px;">
                  </a>
                  @endif
               </div>
               <div class="name">
                  <h6>{{$team->name}}</h6>
                  <span>{{$team->role}}</span>
               </div>
               <div class="singel-dashboard pt-40">
                  <h5>Email</h5>
                  <p>{{$team->email}}</p>
               </div>
               <!-- singel dashboard -->
               <div class="singel-dashboard pt-40">
                  <h5>Contact No:</h5>
                  <p>{{$team->phone}}</p>
               </div>
               <!-- singel dashboard -->
               <div class="social">
                  <ul>
                     <li><a href="{{$team->fb_url}}"><i class="fa fa-facebook-square"></i></a></li>
                     <li><a href="{{$team->twitt_url}}"><i class="fa fa-twitter-square"></i></a></li>
                  </ul>
               </div>
            </div>
            <!-- teachers left -->
         </div>
         <div class="col-lg-8">
            <div class="teachers-right mt-50">
               <ul class="nav nav-justified" id="myTab" role="tablist">
                  <li class="nav-item">
                     <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">{{$team->name}}'s Bio</a>
                  </li>
               </ul>
               <!-- nav -->
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                     <div class="dashboard-cont">
                        <div class="singel-dashboard pt-40">
                           {!!$team->bio!!}
                        </div>
                        <!-- singel dashboard -->
                     </div>
                     <!-- dashboard cont -->
                  </div>
               </div>
               <!-- tab content -->
            </div>
            <!-- teachers right -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
@endsection