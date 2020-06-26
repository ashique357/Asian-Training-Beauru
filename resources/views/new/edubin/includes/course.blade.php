<section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Featured courses </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
                
                        @foreach($certificates as $certificate)
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course">
                                <div class="thum">
                                    <div class="image">
                                        <img src="certificates/{{$certificate->image}}">
                                    </div>
                                    <div class="semi">
                                        <span>{{$certificate->fees}} {{$certificate->currency}}</span>
                                    </div>
                                </div>
                                <div class="cont">
                                    <!-- <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    
                                    <span>(20 Reviws)</span> -->
                                    <p>No of participents:<span>100</span></p><br>
                                    <a href=""><h4>{{$certificate->name}}</h4></a>
                                    
                                    <ul>
                                        <li>
                                            
                                            <div class="form-group">
                                            <a href="/certicate/details/{{$certificate->name}}">
                                                <input type="submit" name="submit" id="submit" class="main-btn register-submit d-witdth" value="Details">
                                            </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                             <a href="certificate/apply/{{$certificate->name}}"><input type="submit" name="submit" id="submit" class="main-btn register-submit d-witdth" value="Apply"></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        @if($certificate->medium==1)
                                        <span>Online</span>
                                        @elseif($certificate->medium==2)
                                        <span>Classroom</span>
                                        @elseif($certificate->medium==3)
                                        <span>Online & Classroom</span>
                                        @endif
                                        </div>
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        <span>{{$certificate->modules}} Modules</span>
                                        </div>
                                        <div class="col-md-4 text-center">
                                        <a href="#"><i class="fa fa-user"></i></a>
                                        <br>
                                        <span>{{$certificate->approx}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- singel course -->
                        </div>
                        @endforeach
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>