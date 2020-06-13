@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
				<div class="wm-our-professors">
				<?php $columns=4; $i=0; $col_width=12/$columns ?>
					<ul class="row">
						@foreach($teams as $team)
						<li class="col-md-<?php echo $col_width ?>">
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
								<figcaption>	<a href="/our-team/{{$team->id}}">Read More</a>	
								</figcaption>
							</figure>
							<div class="wm-team-info">
								<h5><a href="#">{{$team->name}}</a></h5>	
								<div class="wm-icon">
									<a class="wmicon-social5" href="{{$team->fb_url}}"></a>
									<a class="wmicon-social4" href="{{$team->twitt_url}}"></a>

								</div>	<span>{{$team->role}}</span>
							</div>
						</li>
						<?php $i++; if($i % $columns==0){ echo '</div><div class="row">'; } ?>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// Main Section \\-->
	<!--// Main Section \\-->
</div>@endsection
