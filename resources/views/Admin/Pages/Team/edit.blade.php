@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Create Team Member</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">About Us</a>
						</li>
						<li class="breadcrumb-item active">Create Team member</li>
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
					<h3 class="card-title">Create Team Member</h3>
					<div class="card-tools">
						<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
						</button>
						<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
						</button>
					</div>
				</div>@include('flash')
				<!-- /.card-header -->
				<form action="/admin/team/edit/{{$team->id}}" method="POST" enctype="multipart/form-data">@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Member Name</label>
									<input type="text" class="form-control" name="name" value="{{ $team->name }}" placeholder="{{$team->name}}">
								</div>
                                <div class="form-group">
									<label>Member Role</label>
									<input type="text" class="form-control" name="role" value="{{ $team->role }}" placeholder="{{$team->role}}">
								</div>

                                <div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" value="{{ $team->email }}" palceholder="{{$team->email}}">
								</div>

                                <div class="form-group">
									<label>Phone</label>
									<input type="text" class="form-control" name="phone" value="{{ $team->phone }}" placeholder="{{$team->phone}}">
								</div>
                                <div class="form-group">
									<label>Facebook URL</label>
									<input type="text" class="form-control" name="fb_url" value="{{ $team->fb_url }}" placeholder="{{$team->fb_url}}">
								</div>
                                <div class="form-group">
									<label>Twitter URL</label>
									<input type="text" class="form-control" name="twitt_url" value="{{ $team->twitt_url }}" placeholder="{{$team->twitt_url}}">
								</div>
                                
								<div class="form-group">
									<label for="exampleInputFile">Upload Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="image" id="" value="{{$team->image}}">
											<label class="custom-file-label" for="exampleInputFile">Choose Image</label>
										</div>
									</div>
									<p><span style="color: grey">The image size will be 720 x 293 pixels</span>
									</p>
								</div>
								<div class="form-group">	<strong>Biography</strong>
									<textarea class="form-control summernote" name="bio">{!!$team->bio!!}</textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary">Apply Changes</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- Slider Content -->
		</div>
	</section>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	
	     $('.summernote').summernote({
	
	           height: 300,
	
	      });
		  $('.dropdown-toggle').dropdown();
	
	   });
</script>@endsection