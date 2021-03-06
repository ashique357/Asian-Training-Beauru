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
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
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
                                <thead>
                                    <tr>
                                    <th scope="col" width="20px">#</th>
                                    <th scope="col" width="100px">Name</th>
                                    <th scope="col" width="120px">Country</th>
                                    <th scope="col" width="70px">Details</th>
                                    <th scope="col" width="70px">Edit</th>
                                    <th scope="col" width="70px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($chapters as $chapter)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$chapter->name}}</td>
									<td>{{$chapter->country}}</td>
                                    <td><a href="/admin/chapter/{{$chapter->id}}"><button class="btn btn-primary btn-sm">View</button></a></td>
								
									<td><a href="/admin/chapter/edit/{{$chapter->id}}"><button class="btn btn-primary btn-sm">Edit</button></a></td>
									
									<form action="/admin/chapter/delete/{{$chapter->id}}" method="post">
									@csrf
                                    <td><a href=""><button class="btn btn-danger btn-sm">Delete</button></a></td>
									</form>
									</tr>
                                @endforeach
                                </tbody>         
                                </table>
							</div>
						</div>
					</div>
                    {{$chapters->links()}}
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>

@endsection