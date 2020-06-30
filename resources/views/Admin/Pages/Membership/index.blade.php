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
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
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
                            <table class="table table-striped fixed">
                            <?php $count=$members->count()?>
                                <thead>
                                    <tr>
                                    <th scope="col" width="20px">#</th>
                                    <th scope="col" width="100px">Name</th>
                                    <th scope="col" width="120px">Email</th>
                                    <th scope="col" width="90px">Contact No</th>
									<th scope="col" width="100px">Application Type</th>
                                    <th scope="col" width="70px">Details</th>
                                    <th scope="col" width="70px">Accept</th>
                                    <th scope="col" width="70px">Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($members as $m)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    @if($m->member_type == 1)
									<td>{{$m->name}}</td>
                                    <td>{{$m->email}}</td>
                                    <td>{{$m->phone}}</td>
									<td>Individual</td>
									@elseif($m->member_type == 2)
									<td>{{$m->tp_name}}</td>
                                    <td>{{$m->tp_email}}</td>
                                    <td>{{$m->tp_phone}}</td>
									<td>Training Provider</td>
									@elseif($m->member_type == 3)
									<td>{{$m->org_name}}</td>
                                    <td>{{$m->org_email}}</td>
                                    <td>{{$m->org_phone}}</td>
									<td>Corporate</td>
									@endif
                                    <td><a href="/admin/membership-request/{{$m->id}}"><button class="btn btn-primary btn-sm">View Info</button></a></td>
                                    @if($m->approved==0)
									<form action="/admin/membership-request/{{$m->id}}/accept" method="post">
									@csrf
									<td><a href=""><button class="btn btn-primary btn-sm">Accept</button></a></td>
									</form>
									@else
									<td>Accepted</td>
									@endif
									<form action="/admin/membership-request/{{$m->id}}/decline" method="post">
									@csrf
                                    <td><a href=""><button class="btn btn-danger btn-sm">Decline</button></a></td>
									</form>
									</tr>
                                @endforeach
                                </tbody>         
                                </table>
							</div>
						</div>
					</div>
                    {{$members->links()}}
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>

@endsection