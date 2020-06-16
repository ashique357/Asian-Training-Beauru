@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Consultation</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Consultation</li>
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
         @foreach($cons as $op)
            <div class="blog-details mt-30">
               <div class="cont">
                  
                  @if($op->member_id==null)
                     <h5>Training <small>posted by</small><i>Admin</i></h5>
                  @elseif($op->member_id != null)
                     <<h5>Consultation <small>posted by</small><i>{{$op->member->name}}</i></h5>
                     
                  @endif 
                  <div class="content" style="margin-top:20px">
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Organization name:</strong></h6>
                        </div>
                        <div class="col-md-8">
                           <p class="text-details">{{$op->org_name}}</p>
                        </div>
                     </div>
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Country name:</strong></h6>
                        </div>
                        <div class="col-md-8">
                        <p class="text-details">{{$op->country}}</p>
                        </div>
                     </div>
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Assignment details:</strong></h6>
                        </div>
                        <div class="col-md-8">
                           <p class="text-details">{{$op->assignment_details}}</p>
                        </div>
                     </div>
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Requirements:</strong></h6>
                        </div>
                        <div class="col-md-8">
                           <p class="text-details">{{$op->requirements}}</p>
                        </div>
                     </div>
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Approximate time:</strong></h6>
                        </div>
                        <div class="col-md-8">
                           <p class="text-details">{{$op->approx}}</p>
                        </div>
                     </div>
                     <div class="row margin-gap">
                        <div class="col-md-4">
                           <h6><strong class="heading">Fees:</strong></h6>
                        </div>
                        <div class="col-md-8">
                           <p class="text-details">{{$op->fees}}</p>
                        </div>
                     </div>
                  </div>
                 
               </div>
               <!-- cont -->
            </div>
            @endforeach    
            {{$cons->links()}}
            <!-- blog details -->
         </div>
         <div class="col-lg-4">
            <div class="saidbar">
               <div class="row">
                  <div class="col-lg-12 col-md-6">
                     <div class="categories mt-30">
                        <h4>Quick Links</h4>
                        <ul>
                        <li><a href="/opportunity/trainings">Training</a></li>
                           <li><a href="/opportunity/jobs">Job</a></li>
                           <li><a href="/opportunity/consultations">Consultancy</a></li>
                        </ul>
                     </div>
                     <!-- <div class="categories mt-30">
                        <h4>Quick Links</h4>
                        <ul>
                           <li><a href="/president-message">President's Message</a></li>
                           <li><a href="/our-team">Our Team</a></li>
                        </ul>
                     </div> -->
                  </div>
                  <!-- categories -->
               </div>
               <!-- row -->
            </div>
            <!-- saidbar -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
@endsection