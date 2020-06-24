@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Way to become Certified</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Way to become Certified</li>
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
                      {!! $data['way_to_certified']!!}
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
                                   <li><a href="/certification-benefit">Benefit Of Certification</a></li>
                                    <li><a href="/way-to-become-certified">Way To Become Certified</a></li>
                                    <li><a href="/certificate-list">List Of Certification</a></li>
                                    <li><a href="/certificate-apply">Apply For Certification</a></li>
                                    <li><a href="/certificate-verify">Verification Of Certified</a></li>
                                       
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
