@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Resource Center</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Resource Center</li>
                     <li class="breadcrumb-item active" aria-current="page">Tools</li>
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
<section id="shop-page" class="pt-120 pb-120 gray-bg">
   <div class="container">
      <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="shop-grid" role="tabpanel" aria-labelledby="shop-grid-tab">
         <?php $columns=4; $i=0; $col_width=12/$columns ?>
            <div class="row justify-content-center">
               @foreach($products as $product)
               <div class="col-md-<?php echo $col_width ?>">
                  <div class="singel-publication mt-30">
                     <div class="thum">
                     @if($product['cover_image'] !='null')
                        @foreach(json_decode($product->cover_image, true) as $image)
                        <div class="image cart-image">
                           <img src="{{URL::to('/products/'.$image)}}">
                        </div>
                        @endforeach

                     @else
                     <div class="image cart-image">
                           <img src="">
                     </div>
                     @endif
                     </div>
                     <?php $x=urldecode($product->name); ?>
                     <div class="cont">
                        <div class="name">
                           <a href="/resources/{{$x}}">
                              <h6>{{$product->name}}</h6>
                           </a>
                        </div>
                        <form action="/product/payment" method="post">
                            @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="button text-right">
                           <button type="submit" class="main-btn" >Buy now</button>
                        </div>
                        </form>
                     </div>
                  </div>
                  <!-- singel publication -->
               </div>
               <?php $i++; if($i % $columns==0){ echo '</div><div class="row">'; } ?>
               @endforeach
            </div>
            <!-- row -->
         </div>
      </div>
      <!-- tab content -->
      {{$products->links()}}
   </div>
   <!-- container -->
</section>
@endsection