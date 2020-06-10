@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>All Team Members</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">About Us</a>
						</li>
						<li class="breadcrumb-item active">All Team members</li>
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
					<!-- <h3 class="card-title">Banner</h3> -->
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
						</button>
					</div>
				</div>@include('flash')
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-lg-12">
							<?php $columns=3; $i=0; $col_width=12/$columns ?>
							<div class="row">@foreach($teams as $t)
								<div class="col-md-<?php echo $col_width ?> card-class">
									<div class="card" >@if($t->image)
										<img src="<?php echo asset("uploads/images/$t->image")?>" class="card-img-top table-image" alt="..." > @else
										<img src="<?php echo asset("images/avatar.jpg")?>" class="card-img-top table-image" alt="...">@endif
										<div class="card-body">
											<h5 class="card-class">{{$t->name}}</h5>
										</div>
										<ul class="list-group list-group-flush">
											<li class="list-group-item">Facebook:{{$t->role}}</li>
											<li class="list-group-item">Phone:{{$t->phone}}</li>
											<li class="list-group-item">Email:{{$t->email}}</li>
											<li class="list-group-item">Facebook:{{$t->fb_url}}</li>
											<li class="list-group-item">Twitter:{{$t->twitt_url}}</li>
											<p class="card-text"></p>
										</ul>
										<div class="card-body">
											<ul class="button-group">
												<li><a href="#" class="card-link">
												<button class="btn btn-dark btn-sm">Read More</button>
											</a></li><li>
											<a href="/admin/team/edit/{{$t->id}}" class="card-link">
												<button class="btn btn-primary btn-sm">Edit</button>
											</a></li></li>
											<a href="/admin/team/delete/{{$t->id}}" class="card-link">
												<button class="btn btn-danger btn-sm">Delete</button>
											</a></li>
											</ul>
										</div>
									</div>
								</div>
								<?php $i++; if($i % $columns==0){ echo '</div><div class="row">'; } ?>@endforeach</div>
						</div>
					</div>
				</div>
			</div>{{$teams->links()}}
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>@endsection