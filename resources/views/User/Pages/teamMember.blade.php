@extends('partials.landingLayout') @section('main_content')
<div class="wm-mini-header"> <span class="wm-blue-transparent"></span>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wm-mini-title">
					<h1>Our Team</h1> 
				</div>
				<div class="wm-breadcrumb">
					<ul>
						<li><a href="/">Home</a>
						</li>
						<li><a href="/our-team">Our Team</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wm-main-content">
	<!--// Main Section \\-->
	<div class="wm-main-section">
		<div class="container">
        <div class="row">

<aside class="col-md-3">
    <div class="widget widget_our-professors">
        <figure>
        @if($team->image)
            <a href="#">
                <img src="/uploads/images/{{$team->image}}" alt="">
            </a>
            @else
            <a href="#">
                <img src="/images/avatar.jpg" alt="">
            </a>
            @endif
            <figcaption>
                <a href="#">{{$team->name}}</a>
                <span>{{$team->role}}</span>
            </figcaption>
        </figure>
        <ul>
             <li><a href="{{$team->fb_url}}"><i class="wmicon-social5" aria-hidden="true"></i></a></li>
             <li><a href="{{$team->twitt_url}}"><i class="wmicon-social4" aria-hidden="true"></i></a></li>
             
        </ul>
    </div>
    <!-- <div class="widget widget_contact-form">
        <h6>Contact Chester</h6>
        <form>
               <ul>
                    <li>    
                        <input type="text" value="Your Name" onblur="if(this.value ==  '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                    </li>
                    <li>    
                        <input type="text" value="Your E-mail" onblur="if(this.value ==  '') { this.value ='Your E-mail'; }" onfocus="if(this.value =='Your E-mail') { this.value = ''; }">
                    </li>
                    <li class="full">
                        <textarea placeholder="Message" name="send"></textarea>
                    </li>
                    <li class="full">
                        <input type="submit" value="contact">
                    </li>
               </ul> 
        </form>
    </div> -->
             
</aside>
<div class="col-md-9">
    <div class="wm-professor-info">
        <h2>About Me</h2>
        <ul class="row">
            <li class="col-md-6">
                <div class="wm-professor-contact">
                    <div class="wm-professor-icon">
                       <a href="#" class="icon-hidden"><i class="wmicon-technology4" aria-hidden="true"></i></a>
                    </div>
                    <h6>Phone:</h6>
                    <span>{{$team->phone}}</span>
                </div>
            </li>
            <li class="col-md-6">
                <div class="wm-professor-contact">
                    <div class="wm-professor-icon">
                       <a href="#"><i class="wmicon-web2" aria-hidden="true"></i></a>
                    </div>
                    <h6>Email:</h6>
                    <span>{{$team->email}}</span>
                </div>
            </li>
            <!-- <li class="col-md-4">
                <div class="wm-professor-contact">
                    <div class="wm-professor-icon">
                       <a href="#"><i class="wmicon-pen" aria-hidden="true"></i></a>
                    </div>
                    <h6>Experience:</h6>
                    <span>15+ years</span>
                </div>
            </li> -->
        </ul>    
    </div>
    <div class="wm-rich-aditor">
        {!!$team->bio!!}
    </div>
</div>
</div>
		</div>
	</div>
	<!--// Main Section \\-->
	<!--// Main Section \\-->
</div>@endsection