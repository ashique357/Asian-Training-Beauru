<section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h2>{{$data['team_title']}}</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        {!!substr($data['team_details'],106,889)!!}
                        <a href="/our-team" class="main-btn mt-55">Learn More</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                        @foreach($teachers as $t)
                            <div class="col-lg-6">
                                <div class="singel-teachers mt-30 text-center">
                                    <div class="image">
                                        <img src="/uploads/images/{{$t['image']}}">
                                    </div>
                                    <div class="cont">
                                        <a href="/our-team/{{$t->name}}"><h6>{{$t['name']}}</h6></a>
                                        <span>{{$t['role']}}</span>
                                    </div>
                                </div> <!-- singel teachers -->
                            </div>
                        @endforeach
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>