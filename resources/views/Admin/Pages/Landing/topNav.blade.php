@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Top Nav</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Landing Page Setup</a>
						</li>
						<li class="breadcrumb-item active">Top Nav</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- Main content -->
	<section class="content" >
      <div class="container-fluid">
         <!-- Top Navigation -->
         <div class="card card-default" id="app">
            <div class="card-header">
               <h3 class="card-title">Top Navigation Bar</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
               </div>
            </div>
            @include('flash')
            <!-- /.card-header -->
            <form action="/admin/landing-page-setup/top-nav" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Address</label>
                           <input type="text" class="form-control" name="address"  id="address" value="{{$data['address']}}" placeholder="{{$data['address']}}" required>
                        </div>
                        <div class="form-group">
                           <label>Phone Number</label>
                           <input type="text" class="form-control"  name="phone" value="{{$data['phone']}}" placeholder="{{$data['phone']}}" required>
                        </div>
                        <div class="form-group">
                           <label>Email</label>
                           <input type="text" class="form-control"  name="email" value="{{$data['email']}}" placeholder="{{$data['email']}}" required>
                        </div>
                        <div class="form-group">
                           <label>Close/Open</label>
                           <input type="text" class="form-control" name="time"  value="{{$data['time']}}" placeholder="{{$data['time']}}" required>
                        </div>
                        <div class="form-group">
                           <label>Upload Logo</label>
                           <input type="file" class="form-control" value="" name="logo" required>
                           <span>Logo will be 240x110 px</span>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-block btn-primary">Apply Changes</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>
</div>
</div>


@endsection