@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Certificate</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
                        <li class="breadcrumb-item active"><a href="#">{{$certificate->name}}</a>
						</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Slider Content -->
			<div class="card card-default" id="banner">
				<div class="card-header">
					<h3 class="card-title">{{$certificate->name}}</h3>
                    <div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
						</button>
					</div>
				</div>
				@include('flash')
				<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
                                <div class="content">
                                <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Certificate Banner</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="/certificates/{{$certificate->image}}"><p class="text-details"><img src="/certificates/{{$certificate->image}}" alt="" style="height:195;width:160"></p></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Certificate Name</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Medium:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            @if($certificate->medium ==1)
                                            <p class="text-details">Online</p>
                                            @elseif($certificate->medium ==2)
                                            <p class="text-details">Classroom</p>
                                            @elseif($certificate->medium ==3)
                                            <p class="text-details">Online & Classroom</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Modules:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->modules}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Time Duration:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->approx}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Participants level:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->level}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$certificate->details!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Context:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$certificate->context!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Objective:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$certificate->objective!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Evaluation Process:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$certificate->evaluation!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Fees:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        <p class="text-details">{{$certificate->fees}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Currency:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Category:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$certificate->category->name}}</p>
                                        </div>
                                    </div>
                                </div>
                              
							</div>
						</div>
					</div>
				
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>

@endsection