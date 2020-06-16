@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Opportunity</h1>
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
                            <?php $count=$opportunity->count()?>
                                <thead>
                                    <tr>
                                    <th scope="col" width="20px">#</th>
                                    <th scope="col" width="100px">Organization Name</th>
                                    <th scope="col" width="120px">Post Type</th>
                                    <th scope="col" width="70px">Details</th>
                                    <th scope="col" width="70px">Accept</th>
                                    <th scope="col" width="70px">Decline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($opportunity as $o)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$o->org_name}}</td>
                                    @if($o->post_type == 1)
                                    <td>Training</td>
									@elseif($o->post_type == 2)
									<td>Job</td>
									@elseif($o->post_type == 3)
									<td>Cosultation</td>
									@endif
                                    <td><a href="/admin/opportunity-request/{{$o->id}}"><button class="btn btn-primary btn-sm">View Info</button></a></td>
                                    @if($o->active==0)
									<form action="/admin/opportunity-request/{{$o->id}}/accept" method="post">
									@csrf
									<td><a href=""><button class="btn btn-primary btn-sm">Accept</button></a></td>
									</form>
									@else
									<td>Accepted</td>
									@endif
									<form action="/admin/opportunity-request/{{$o->id}}/decline" method="post">
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
                    {{$opportunity->links()}}
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>

@endsection