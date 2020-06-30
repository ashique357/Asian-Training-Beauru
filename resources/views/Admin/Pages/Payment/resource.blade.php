@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Paid Resources</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Resource Payment</a>
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
                                    <th scope="col" width="100px">User name</th>
                                    <th scope="col" width="120px">Product name</th>
                                    <th scope="col" width="70px">Price</th>
                                    <th scope="col" width="70px">Invoice number</th>
                                    <th scope="col" width="70px">View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($paid as $p)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$p->user->name}}</td>
                                    <td>{{$p->product->name}}</td>
                                    <td>{{$p->price}}</td>
                                    <td>{{$p->invoice_id}}</td>
									<form action="/admin/paid/product/details/{{$p->id}}" method="post">
									@csrf
                                    <td><button type="submit" class="btn btn-primary btn-sm">View</button></td>
									</form>
									</tr>
                               @endforeach
                                </tbody>         
                                </table>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 offset md-5">
                            <div class="pagination">
                                {{$paid->links()}}
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