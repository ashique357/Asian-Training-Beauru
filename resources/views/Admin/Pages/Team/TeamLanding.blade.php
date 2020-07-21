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
				<form action="/admin/landing-page-setup/team" method="POST" enctype="multipart/form-data">@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Add title</label>
									<input type="text" class="form-control" name="team_title" value="{{ old('team_title') }}">
								</div>
                         
								<div class="form-group">	
                                <strong>Team Details</strong>
									<textarea class="form-control summernote" name="team_details"></textarea>
								</div>

                                <div class="form-group">
								<label for="">Select team members(4)</label>
								@if($teams !=null)
                                    @foreach($teams as $team)
                                    <input type="checkbox" id="team" name="team[]" value="{{$team->id}}" required>
                                    <label for="team"> {{$team->name}}</label><br>
                                    @endforeach
								@else
									<a href="/admin/team-create">Please add team members first</a>
								@endif
									
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