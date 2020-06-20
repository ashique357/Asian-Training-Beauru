@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{$opportunity->org_name}}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Opportunity</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$opportunity->org_name}}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
</section>

<section id="event-singel" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>{{$opportunity->org_name}}</h3>@if($opportunity->member_id==null)
                              <span><i class="fa fa-user"></i> Posted by <i>Admin</i></span>
                            @elseif($opportunity->member_id != null)
                              <span><i class="fa fa-user"></i> Posted by <i>{{$opportunity->member->name}}</i></span>
                            @endif 
                            @if($opportunity->post_type ==2)
                                <a href="#"><span><i class="fa fa-user-circle-o"></i> {{$opportunity->position}}</span></a>
                                <a href="#"><span><i class="fa fa-map-marker"></i> {{$opportunity->location}}</span></a>
                            @endif
                            <a href="#"><span><i class="fa fa-flag"></i> {{$opportunity->country}}</span></a>
    
                            <img src="/opportunity/{{$opportunity->image}}" alt="Event">
                            <div class="details">
                            <h6>Assignment:</h6>
                            <p>{{$opportunity->assignment_details}}</p>
                            </div>
                            <div class="details">
                            <h6>Requirements:</h6>
                            <p>{{$opportunity->requirements}}</p>
                            </div>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                            <div class="events-coundwon bg_cover" data-overlay="8">
                                
                                <div class="events-coundwon-btn pt-30">
                                @if($opportunity->post_type ==1)
                                    <a href="#" class="main-btn">Training Opportunity</a>
                                @elseif($opportunity->post_type ==2)
                                    <a href="#" class="main-btn">Job Opportunity</a>
                                @else
                                <a href="#" class="main-btn">Consultation Opportunity</a>
                                @endif
                                </div>
                            </div> 
                            <!-- events coundwon -->
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-flag"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Country</h6>
                                                <span>{{$opportunity->country}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Time</h6>
                                                <span>{{$opportunity->approx}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-money"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Fees</h6>
                                                <span>{{$opportunity->fees}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    @if($opportunity->post_type==2)
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-user-circle-o"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Position</h6>
                                                <span>{{$opportunity->position}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    <li>
                                        <div class="singel-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                                <h6>Location</h6>
                                                <span>{{$opportunity->location}}</span>
                                            </div>
                                        </div> <!-- singel address -->
                                    </li>
                                    @endif
                                </ul>
                                
                            </div> <!-- events address -->
                        </div> <!-- events right -->
                    </div>
                </div> <!-- row -->
            </div> <!-- events-area -->
        </div> <!-- container -->
</section>
@endsection