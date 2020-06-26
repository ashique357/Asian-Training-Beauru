<section id="slider-part" class="slider-active">
@foreach(json_decode($data['banner_image'], true) as $image)
<div class="single-slider bg_cover pt-150" style="background-image: url(/extras/{{$image}})" data-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-9">
                <div class="slider-cont">
                    <h1 data-animation="bounceInLeft" data-delay="1s">{{$data['banner_title']}}</h1>
                    <ul>
                        <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="/president-message">President's Message</a></li>
                        
                    </ul>
                </div>
            </div>
        </div> <!-- row -->
    </div>
</div>
@endforeach
</section>