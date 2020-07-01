@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>{{$chapter->name}}</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">{{$chapter->name}}</li>
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
              <div class="col-md-12">
                  <div class="blog-details mt-30" style=width:1200px>
                     
                      <div class="cont">
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Country</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->country}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Name</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->name}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Member Since:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->year}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Contact Person:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->contact_person}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Web address:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <a href="/{{$chapter->web}}">
                                 <p class="text-details">{{$chapter->web}}</p><br>
                              </a>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Contact No:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->contact}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Committee members:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->members}}</p><br>
                           </div>
                        </div>
                        <hr>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Details:</strong></h6><br>
                           </div>
                           <div class="col-md-9">
                              <p >{!!$chapter->details!!}</p><br>
                           </div>
                        </div>
                        <hr>
                     </div>
                      
                  </div> <!-- blog details -->
              </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>

@endsection
