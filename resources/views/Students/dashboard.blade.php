@extends('partials.landingLayout')
@section('main_content')
<div class="wm-mini-header">
			<span class="wm-blue-transparent"></span>
			 <div class="container">
			    <div class="row">
				    <div class="col-md-12">
				        <div class="wm-mini-title">
				       		<h1>Student Dashboard</h1> 
				        </div>
				        <div class="wm-breadcrumb">
				          	<ul>
				          	 	<li><a href="">Home</a></li>
				          	 	<li><a href="#">Student Dashboard</a></li>
				           		<li>My Courses</li>
				          	</ul>
				        </div>      
				    </div>
			    </div>
			</div>    
		</div>
  		<!--// Mini Header \\-->
<div class="wm-main-content">


			<!--// Main Section \\-->
			<div class="wm-main-section">
				<div class="container">
					<div class="row">
						<aside class="col-md-4">
							<div class="wm-student-dashboard-nav">
								<div class="wm-student-nav">
									<figure>
										<a href="#"><img src="extra-images/students-setting-1.jpg" alt=""></a>
									</figure>
									<div class="wm-student-nav-text">
										<h6>Kevin Nickols</h6>
										<a href="#">update image</a>
									</div>
									<ul>
										<li>
											<a href="#">
												<i class="wmicon-avatar"></i>
												Profile Details
											</a>
										</li>
										<li class="active">
											<a href="#">
												<i class="wmicon-book"></i>
												My Courses
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-favorite"></i>
												Favorites
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-paper"></i>
												Statement
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-three"></i>
												Settings
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-arrow"></i>
												Logout
											</a>
										</li>
									</ul>
								</div>
							</div>						
						</aside>
						<div class="col-md-8">
							<div class="wm-student-dashboard-courses wm-dashboard-courses">
								<div class="wm-plane-title">
									<h2>My Courses</h2>
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-courses-start wm-student">
											<span>Course Name</span>
										</li>
										<li class="wm-student">
											<span>Status</span>
										</li>
										<li class="wm-student">
											<span>Rating</span>
										</li>
									</ul>									
								</div>
							</div>										
						</div>
					</div>
				</div>
			</div>
	
@endsection
