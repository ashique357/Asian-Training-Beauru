@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Member Request</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Membership</a>
						</li>
						<li class="breadcrumb-item active">Member Request</li>
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
                            <table class="table table-striped">
                            <?php $count=$members->count()?>
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contact No</th>
									<th scope="col">Application Type</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Accept</th>
                                    <th scope="col">Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $m)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->email}}</td>
                                    <td>{{$m->phone}}</td>
									@if($m->member_type == 1)
									<td>Individual</td>
									@elseif($m->member_type == 2)
									<td>Training Provider</td>
									@else
									<td>Corporate</td>
									@endif
                                    <td><a href="/admin/membership-request/{{$m->id}}"><button class="btn btn-primary btn-sm">View Info</button></a></td>
                                    <form action="/admin/membership-request/{{$m->id}}/accept" method="post">
									@csrf
									<td><a href=""><button class="btn btn-primary btn-sm">Accept</button></a></td>
									</form>
									@csrf
									<form action="">
                                    <td><a href=""><button class="btn btn-danger btn-sm">Decline</button></a></td>
									</form>
									</tr>
                                @endforeach
                                </tbody>         
                                </table>
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