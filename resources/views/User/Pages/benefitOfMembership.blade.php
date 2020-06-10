@extends('partials.landingLayout') @section('main_content')
<div class="wm-mini-header"> <span class="wm-blue-transparent"></span>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wm-mini-title">
					<h1>Benefit of Membership</h1> 
				</div>
				<div class="wm-breadcrumb">
					<ul>
						<li><a href="/">Home</a>
						</li>
						<li><a href="/benefit-of-membership">Benefit of Membership</a>
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
							<li><a href="/benefit-of-membership">Benefit of Membership</a>
							</li>
							<li>
								<a href="/way-to-become-a-member">
									</i>How to Become a Member</li>
							<li><a href="">Membership Application</a>
							</li>
						</ul>
					</div>
				</aside>
				<div class="col-md-9">
					<div class="wm-detail-editore">{!! $data['membership_benefit']!!}</div>
				</div>
			</div>
		</div>
	</div>
	<!--// Main Section \\-->
	<!--// Main Section \\-->
</div>@endsection