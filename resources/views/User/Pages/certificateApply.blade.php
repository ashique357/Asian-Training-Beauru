@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Apply For Certification</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Apply For Certification</li>
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
                      <table class="table table-bordered table-responsive fixed">
                        <thead class="thead">
                            <tr>
                                <th scope="col" width="5%">#</th>
                                <th scope="col" width="50%">Program Name</th>
                                <th scope="col" width="20%">Medium</th>
                                <th scope="col" width="10%">Duration</th>
                                <th scope="col" width="5%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificates as $c)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$c->name}}</td>
                                @if($c->medium==1)
                                <td>Online</td>
                                @elseif($c->medium==2)
                                <td>Classroom</td>
                                @elseif($c->medium==3)
                                <td>Online & Classroom</td>
                                @endif
                                <td>{{$c->approx}}</td>
                                <td><button class="btn btn-primary btn-sm" type="submit">Apply</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
           <div class="row">
                <div class="col-md-4">
                    {{$certificates->links()}}
                </div>
           </div>
        </div> <!-- container -->
    </section>

@endsection
