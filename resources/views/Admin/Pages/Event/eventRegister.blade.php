@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Event/Training Registration Details</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Event/Training Registration Details</a>
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
                    <p><strong>Number of registered user:</strong> {{$users->count()}}</p>
						<div class="row">
							<div class="col-md-12">
                            <table class="table table-striped fixed">
                                <thead>
                                    <tr>
                                        <th scope="col" width="20px">#</th>
                                        <th scope="col" width="100px">Name</th>
                                        <th scope="col" width="100px">Email</th>
                                        <th scope="col" width="50px">Membership</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <th scope="row"> {{$user->name}}</th>
                                        <th scope="row"> {{$user->email}}</th>
                                        @if($user->meber ==0)
                                        <th scope="row"> No</th>
                                        @elseif($user->member==1)
                                        <th scope="row"> Yes</th>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>         
                                </table>
							</div>
						</div>
					</div>
                    {{$users->links()}}
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>

@endsection