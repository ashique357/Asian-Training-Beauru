<section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5>Publications</h5>
                        <h2>From Store </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
                        
            <div class="row justify-content-center">
            @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="singel-publication mt-30">
                    @foreach(json_decode($product['cover_image'], true) as $image)
                            <div class="image cart-image">
                            <img src="{{URL::to('/products/'.$image)}}">
                            </div>
                        @endforeach
                        <div class="cont">
                            <div class="name">
                                <a href="/resources/{{$product['name']}}"><h6>{{$product['name']}} </h6></a>
                                @if($product['product_type']==1)
                                <span>Book</span>
                                @elseif($product['product_type']==2)
                                <span>Material</span>
                                @elseif($product['product_type']==3)
                                <span>Tools</span>
                                @endif
                            </div>
                            <div class="button text-right">
                                <a href="#" class="main-btn">Buy ({{$product['price_user']}} {{$product['currency']}})</a>
                            </div>
                        </div>
                    </div> <!-- singel publication -->
                </div>
            @endforeach
            </div> <!-- row -->
        </div> <!-- container -->
    </section>