@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Resources</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
                        <li class="breadcrumb-item active"><a href="#">Resources</a>
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
					@if($event->event_type==1)
                    <h3 class="card-title">Training/congress</h3>
                    @elseif($event->event_type==2)
                    <h3 class="card-title">Networking</h3>
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
                                <div class="content">
                                <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Event Banner</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="/events/{{$event->image}}"><p class="text-details"><img src="/events/{{$event->image}}" alt="" style="height:195;width:160"></p></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Event Name</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$event->title}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Date:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$event->date}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Time:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$event->time}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Location:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$event->location}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Purpose:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$event->purpose!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Contact Person:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        <p class="text-details">{{$event->contact}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Fees:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$event->fees}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Registration option:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        @if($event->registration ==0)
                                            <p class="text-details">No registration option</p>
                                        @else
                                        <p class="text-details">Registration option is availabe</p>
                                        @endif
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