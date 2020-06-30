@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Footer</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Landing Page Setup</a>
						</li>
						<li class="breadcrumb-item active">Footer</li>
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
               <h3 class="card-title">Footer</h3>
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
               </div>
            </div>
            @include('flash')
            <!-- /.card-header -->
            <form action="/admin/landing-page-setup/footer" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>First Paragraph</label>
                           <textarea type="text" class="form-control"  rows="4" cols="50" name="f_para1"  id="address" value="{{$data['f_para1']}}" placeholder="{{$data['f_para1']}}" required></textarea>
                        </div>
                        <div class="form-group">
                           <label>Second Paragraph</label>
                           <textarea type="text" class="form-control" name="f_para2"  rows="4" cols="50" id="address" value="{{$data['f_para2']}}" placeholder="{{$data['f_para2']}}" required></textarea>
                        </div>
                        <div class="form-group">
                           <label>Third Paragraph</label>
                           <textarea type="text" class="form-control" name="f_para3"  rows="4" cols="50" id="address" value="{{$data['f_para3']}}" placeholder="{{$data['f_para3']}}" required></textarea>
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