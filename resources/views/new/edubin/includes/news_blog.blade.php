<section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the Opportunities</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Latest News</h5>
                        <h2>From the Events</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">

            <!-- opportunities -->
            
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                    @foreach($opportunities as $op)
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="/opportunity/{{$op['image']}}">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="/opportunity/{{$op['id']}}"><i class="fa fa-calendar"></i>{{$op['approx']}}</a></li>
                                        @if($op['member_id']==null)
                                        <span><i class="fa fa-user"></i> Posted by <i>Admin</i></span>
                                        @elseif($op['member_id'] != null)
                                        <span><i class="fa fa-user"></i> Posted by <i>{{$op['member']['name']}}</i></span>
                                         @endif 
                                    </ul>
                                    <a href="/opportunity/{{$op['id']}}"><h3>{{$op['org_name']}}</h3></a>
                                   <p>{!!substr($op['assignment_details'],106,120)!!}</p>
                                   </div>
                            </div>
                        </div> <!-- row -->
                        @endforeach
                    </div> <!-- singel news -->
                </div>
               
                <!-- Events -->
                <div class="col-lg-6">
                    <div class="singel-news news-list">
                    @foreach($events as $event)
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="news-thum mt-30">
                                    <img src="/events/{{$event['image']}}">
                                </div>
                            </div>
                            <?php $x=urldecode($event['title']); ?>
                            <div class="col-sm-8">
                                <div class="news-cont mt-30">
                                    <ul>
                                        <li><a href="/event/{{$x}}"><i class="fa fa-calendar"></i>{{$event['date']}}</a></li>
                                        
                                    </ul>
                                    <a href="/event/{{$x}}"><h3>{{$event['title']}}</h3></a>
                                    <p>{!!substr($event['purpose'],106,200)!!}</p>
                                </div>
                            </div>
                        </div> <!-- row -->
                        @endforeach
                    </div> <!-- singel news -->
                    
                </div>
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>