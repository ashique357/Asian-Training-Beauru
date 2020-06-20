@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Training</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Training</li>
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
           @foreach($trainings as $job)
               <div class="col-lg-6">
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
                           <img src="/opportunity/{{$job->image}}">
                       </div>
                       <?php $x=urldecode($job->org_name); ?>
                       <div class="event-cont">
                           <span><i class="fa fa-building-o"></i> {{$job->org_name}}</span>
                            <a href="/opportunity/{{$job->id}}"><h4>Training Opportunity</h4></a>
                            @if($job->member_id==null)
                              <span><i class="fa fa-user"></i> Posted by <i>Admin</i></span>
                            @elseif($job->member_id != null)
                              <span><i class="fa fa-user"></i> Posted by <i>{{$job->member->name}}</i></span>
                            @endif 
                            <span><i class="fa fa-money"></i> {{$job->fees}}</span>
                            <p>{!!substr($job->assignment_details,0,70)!!}</p>
                            
                           
                       </div>
                   </div>
               </div>
            @endforeach
           </div> <!-- row -->
           <div class="row">
               <div class="col-md-12">
                   {{$trainings->links()}}
               </div>
           </div>
        </div> <!-- container -->
</section>
@endsection