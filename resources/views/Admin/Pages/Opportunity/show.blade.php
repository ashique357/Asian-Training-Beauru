@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Way of Membership</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
                        <li class="breadcrumb-item active"><a href="#">Opportunity</a>
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
					@if($op->post_type==1)
                    <h3 class="card-title">Training Opportunity</h3>
                    @elseif($op->post_type==2)
                    <h3 class="card-title">Job Opportunity</h3>
                    @else
                    <h3 class="card-title">Consultation Opportunity</h3>
                    @endif
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
                                @if($op->post_type==1)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Organization name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->org_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Country name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$c->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Assignment details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->assignment_details}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Requirements:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->requirements}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Approximate time:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->approx}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Fees:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->fees}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Accepted:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            @if($op->active ==1)
                                            <p class="text-details">Accepted</p>
                                            @else
                                            <p class="text-details">Not Accepted</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @elseif($op->post_type==2)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Organization name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->org_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Country name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$c->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Job Position:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->position}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Job description:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->assignment_details}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Location:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->location}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Requirements:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->requirements}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Approximate time:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->approx}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Fees:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->fees}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Accepted:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            @if($op->active ==1)
                                            <p class="text-details">Accepted</p>
                                            @else
                                            <p class="text-details">Not Accepted</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @elseif($op->post_type==3)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Organization name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->org_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Country name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$c->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Assignment details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->assignment_details}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Requirements:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->requirements}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Approximate time:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->approx}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Fees:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$op->fees}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Accepted:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            @if($op->active ==1)
                                            <p class="text-details">Accepted</p>
                                            @else
                                            <p class="text-details">Not Accepted</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
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