@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
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
<section id="teachers-page" class="pt-90 pb-120 gray-bg">
   <div class="container">
      <div class="row">
         <?php $columns=4; $i=0; $col_width=12/$columns ?>
         @foreach($teams as $team)
         <div class="col-lg-<?php echo $col_width ?> col-sm-<?php echo $col_width/2 ?>">
            <div class="singel-teachers mt-30 text-center">
               <div class="image">
                  @if($team->image)
                  <a href="/our-team/{{$team->id}}">
                  <img src="/uploads/images/{{$team->image}}" alt="" style="width:250px;height:250px;">
                  </a>
                  @else
                  <a href="/our-team/{{$team->id}}">
                  <img src="/images/avatar.jpg" alt="">
                  </a>
                  @endif
               </div>
               <div class="cont">
                  <a href="/our-team/{{$team->id}}">
                     <h6>{{$team->name}}</h6>
                  </a>
                  <span>{{$team->role}}</span>
               </div>
            </div>
            <!-- singel teachers -->
         </div>
         <?php $i++; if($i % $columns==0){ echo '</div><div class="row">'; } ?>
         @endforeach
      </div>
      <!-- row -->
      <!-- row -->
   </div>
   <!-- container -->
</section>
@endsection