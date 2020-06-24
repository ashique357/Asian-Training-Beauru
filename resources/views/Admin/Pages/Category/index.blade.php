@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Categories</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Category List</a>
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
                                    <th scope="col" width="70px">Edit</th>
                                    <th scope="col" width="70px">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $c)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$c->name}}</td>
                                        <td><a href="/admin/category/edit/{{$c->id}}"><button class="btn btn-primary btn-sm">Edit</button></a></td>
                                        <td><a href="/admin/category/delete/{{$c->id}}"><button class="btn btn-danger btn-sm">Delete</button></a></td>
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