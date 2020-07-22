@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{$event->title}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$event->title}}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
</section>

<section id="event-singel" class="pt-120 pb-120 gray-bg">
@include('flash')
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>{{$event->title}}</h3>
                            <a href="#"><span><i class="fa fa-calendar"></i> {{$event->date}}</span></a>
                            <a href="#"><span><i class="fa fa-clock-o"></i> {{$event->time}}</span></a>
                            <a href="#"><span><i class="fa fa-map-marker"></i> {{$event->location}}</span></a>
                            <img src="/events/{{$event->image}}" alt="Event">
                            <p>{!!$event->purpose!!}</p>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                        @if($event->registration ==1)
                            <div class="events-coundwon bg_cover" data-overlay="8">
                                <form action="/event-booking" method="post">
                                @csrf
                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                    <div class="events-coundwon-btn pt-30">
                                        <button type="submit" class="main-btn">Book Your Seat</button>
                                    </div>
                                </form>
                            </div> <!-- events coundwon -->
                        @else
                        <div class="events-coundwon bg_cover" data-overlay="8">
                                  <div class="events-coundwon-btn pt-30">
                                        <button type="submit" class="main-btn">No registration</button>
                                    </div>
                            </div>
                        @endif
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Date</h6>
                                                <span>{{$event->date}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Time</h6>
                                                <span>{{$event->time}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Address</h6>
                                                <span>{{$event->location}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                </ul>
                                
                            </div> <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
</section>
@endsection