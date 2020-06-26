<section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Why us?</h5>
                        <!-- <h2>Welcome to Edubin </h2> -->
                    </div> <!-- section title -->
                    <div class="about-cont">
                    {!!substr($data['about_content'],106,889)!!}
                        <a href="/about" class="main-btn mt-55">Learn More</a>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Upcoming events</h3>
                        </div> <!-- event title -->
                        <ul>
                        @foreach($events as $event)
                            <li>
                                <div class="singel-event">
                                    <span><i class="fa fa-calendar"></i> {{$event['date']}}</span>
                                    <a href="/event/{{$event->title}}"><h4>{{$event['title']}}</h4></a>
                                    <span><i class="fa fa-clock-o"></i> {{$event->time}}</span>
                                    <span><i class="fa fa-map-marker"></i> {{$event->location}}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul> 
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
       
    </section>