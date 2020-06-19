@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Events</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Networking</li>
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
<section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
           @foreach($events as $event)
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="/event/{{$event->image}}" alt="Event">
                       </div>
                       <?php $x=urldecode($event->title); ?>
                       <div class="event-cont">
                           <span><i class="fa fa-calendar"></i> {{$event->time}}</span>
                            <a href="/event/{{$x}}"><h4>{{$event->title}}</h4></a>
                            <span><i class="fa fa-clock-o"></i> {{$event->date}}</span>
                            <span><i class="fa fa-map-marker"></i> {{$event->location}}</span>
                            <p>{!!substr($event->purpose,555,70)!!}</p>
                            
                            <!-- <p class="card-text">{!! Str::limit($event->purpose,550) !!}</p> -->
                       </div>
                   </div>
               </div>
            @endforeach
           </div> <!-- row -->
           <div class="row">
               <div class="col-md-12">
                  {{$events->links()}}
               </div>
           </div>
        </div> <!-- container -->
    </section>
@endsection