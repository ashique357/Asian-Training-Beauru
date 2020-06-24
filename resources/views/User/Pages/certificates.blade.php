@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Certificates</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Certificates</li>
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

<section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                           
                            <li class="nav-item">Showning 4 0f 24 Results</li>
                        </ul> <!-- nav -->
                        
                        <div class="courses-search float-right">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div> <!-- courses search -->
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                    @foreach($certificates as $certificate)
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="certificates/{{$certificate->image}}">
                                    </div>
                                    <div class="semi">
                                        <span>{{$certificate->fees}} {{$certificate->currency}}</span>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    
                                    <span>(20 Reviws)</span> -->
                                    <p>No of participents:<span>100</span></p><br>
                                    <a href=""><h4>{{$certificate->name}}</h4></a>
                                    
                                    <ul>
                                        <li>
                                            
                                            <div class="form-group">
                                            <a href="/certicate/details/{{$certificate->name}}">
                                                <input type="submit" name="submit" id="submit" class="main-btn register-submit d-witdth" value="Details">
                                            </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                             <a href="certificate/apply/{{$certificate->name}}"><input type="submit" name="submit" id="submit" class="main-btn register-submit d-witdth" value="Apply"></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        @if($certificate->medium==1)
                                        <span>Online</span>
                                        @elseif($certificate->medium==2)
                                        <span>Classroom</span>
                                        @elseif($certificate->medium==3)
                                        <span>Online & Classroom</span>
                                        @endif
                                        </div>
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        <span>{{$certificate->modules}} Modules</span>
                                        </div>
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        <span>{{$certificate->approx}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        @endforeach
                    </div> <!-- row -->
                </div>
               
            </div> <!-- tab content -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        {{$certificates->links()}}
                    </nav>  <!-- courses pagination -->
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>

@endsection
