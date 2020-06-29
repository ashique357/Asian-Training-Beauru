@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Payment</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Payment</li>
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
                <div class="col-md-12">
                    <p>Payment is successfully done.Thank you for purchasing.</p> <a href="/">Go back to home</a>
                </div>
           </div> <!-- row -->
         
        </div> <!-- container -->
</section>
@endsection