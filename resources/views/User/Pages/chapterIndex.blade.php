@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Chapters</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Chapters</li>
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
        @foreach($chapters as $chapter)
           <div class="row">
              <div class="col-md-12">
                  <a href="/chapter/{{$chapter->name}}">
                  <div class="blog-details mt-30" style=width:1200px>
                      <div class="cont">
                        <a href="/chapter/{{$chapter->name}}"><h4>{{$chapter->name}}</h4></a>
                        <h5>{{$chapter->country}}</h5>
                      </div> <!-- cont -->
                  </div> <!-- blog details -->
                  </a>
            
              </div>
           </div> <!-- row -->
           @endforeach
        </div> <!-- container -->
    </section>

@endsection
