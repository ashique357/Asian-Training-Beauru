@extends('new.edubin.partials.main')
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-3.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Shop</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="#">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Resource Center</li>
                     <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
<section id="shop-singel" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="shop-destails">
                @if($product->product_type==1) 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shop-left pt-30">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-image-1" role="tabpanel" aria-labelledby="pills-image-1-tab">
                                  
                                    @foreach(json_decode($product->cover_image, true) as $image)
                                    <div class="shop-image">
                                        <a href="" class="shop-items"><img src="{{URL::to('/products/'.$image)}}"></a>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                            <div class="row" style="margin-top:20px">
                                <div class="col-md-12">
                                <div class="image side-image">
                                    <h6>Attached Files:</h6>
                                    @if($product->filenames != 'null')
                                @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                    <li><a href=""><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href=""><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href=""><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href=""><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href=""><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            
                                        @endforeach
                                        @else
                                        <p>No file attached</p>
                                        @endif
                                        </div>
                                </div>
                            </div>
                        </div> <!-- shop left -->
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-right pt-30">
                            <h6>{{$product->name}} </h6>
                            <span>User:{{$product->price_user}} &nbsp{{$product->currency}}</span><br>
                            <span>Member:{{$product->price_member}} &nbsp{{$product->currency}}</span><br>
                            <span>Author name:{{$product->author_name}}</span><br>
                            <span>Publication Year:{{$product->publication}}</span><br>
                            <span>ISSN:{{$product->issn}}</span><br>
                            <p>{!!$product->content!!}</p>
                            <form action="/product/payment" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            
                                <div class="add-btn pt-15">
                                    <button type="submit" class="main-btn">Purchase</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  <!-- row -->
                

                @elseif($product->product_type==2) 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shop-left pt-30">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-image-1" role="tabpanel" aria-labelledby="pills-image-1-tab">
                                  
                                    @foreach(json_decode($product->cover_image, true) as $image)
                                    <div class="shop-image">
                                        <a href="" class="shop-items"><img src="{{URL::to('/products/'.$image)}}"></a>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                            <div class="row" style="margin-top:20px">
                                <div class="col-md-12">
                                <div class="image side-image">
                                    <h6>Attached Files:</h6>
                                    @if($product->filenames != 'null')
                                    @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                    <li><a href=""><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href=""><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href=""><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href=""><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href=""><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            
                                        @endforeach
                                        @else
                                        <p>No file attached</p>
                                        @endif
                                        </div>
                                </div>
                            </div>
                        </div> <!-- shop left -->
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-right pt-30">
                            <h6>{{$product->name}} </h6>
                            <span>User:{{$product->price_user}} &nbsp{{$product->currency}}</span><br>
                            <span>Member:{{$product->price_member}} &nbsp{{$product->currency}}</span><br>
                            <p>{!!$product->material_details!!}</p>
                            <form action="/product/payment" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                            
                                <div class="add-btn pt-15">
                                    <button type="submit" class="main-btn">Purchase</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  <!-- row -->
                @elseif($product->product_type==3) 
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shop-left pt-30">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-image-1" role="tabpanel" aria-labelledby="pills-image-1-tab">
                                  
                                    @foreach(json_decode($product->cover_image, true) as $image)
                                    <div class="shop-image">
                                        <a href="images/shop-singel/ss-1.jpg" class="shop-items"><img src="{{URL::to('/products/'.$image)}}"></a>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                            <div class="row" style="margin-top:20px">
                                <div class="col-md-12">
                                <div class="image side-image">
                                    <h6>Attached Files:</h6>
                                    @if($product->filenames != 'null')
                                @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                    <li><a href=""><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href=""><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href=""><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href=""><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href=""><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            
                                        @endforeach
                                        @else
                                        <p>No file attached</p>
                                        @endif
                                        </div>
                                </div>
                            </div>
                        </div> <!-- shop left -->
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-right pt-30">
                            <h6>{{$product->name}} </h6>
                            <span>User:{{$product->price_user}} &nbsp{{$product->currency}}</span><br>
                            <span>Member:{{$product->price_member}} &nbsp{{$product->currency}}</span><br>
                            <p>{!!$product->tool_details!!}</p>
                            <form action="/product/payment" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="add-btn pt-15">
                                    <button type="submit" class="main-btn">Purchase</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif
            </div> <!-- shop-destails -->
        </div> <!-- container -->
    </section>
@endsection