@extends('partials.landingLayout') @section('main_content')
<div class="wm-mini-header"> <span class="wm-blue-transparent"></span>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wm-mini-title">
					<h1>President's Message</h1> 
				</div>
				<div class="wm-breadcrumb">
					<ul>
						<li><a href="/">Home</a>
						</li>
						<li><a href="/president-message">President's Message</a>
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
					<div class="widget widget_course-price">
						<div class="wm-widget-heading">
							<h2>Quick Links</h2>
						</div>
						<ul>
							<li><a href="/about">Why us?</a>
							</li>
							<li>
								<a href="/president-message">
									</i>President's Message</li>
							<li><a href="/team">Our Team</a>
							</li>
						</ul>
					</div>
				</aside>
				<div class="col-md-9">
					<div class="wm-blog-single">
						<figure class="wm-detail-thumb" style="width:100%">
							<img src="uploads/images/{{$data['about_president_image']}}" alt=""></figure>
					</div>
					<div class="wm-detail-editore">{!! $data['about_saying']!!}</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Main Section \\-->
	<!--// Main Section \\-->
</div>@endsection