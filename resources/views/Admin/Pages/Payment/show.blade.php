@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
                @if($paid->sell_type==1)
					<h1>Paid Product Details</h1>
                @elseif($paid->sell_type==2)
                <h1>Paid Certificate Details</h1>
                @endif
                </div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
						</li>
                        <li class="breadcrumb-item active">
                        @if($paid->sell_type==1)
                        <a href="#">Paid Product Details</a>
                        @elseif($paid->sell_type==2)
                            <a href="#">Paid Certificate Details</a>
                         @endif
                        
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
                @if($paid->sell_type==1)
                <h3 class="card-title">Paid Product Details</h3>
                @elseif($paid->sell_type==2)
                <h3 class="card-title">Paid Certificate Details</h3>
                @endif
                    <h3 class="card-title">Paid Product Details</h3>
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
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Product name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->product->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Buyer name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->user->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Buyer email:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->user->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Product type:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            @if($paid->sell_type==1)
                                                @if($paid->product->product_type==1)
                                                <p class="text-details">Book</p>
                                                @elseif($paid->product->product_type==2)
                                                <p class="text-details">Material</p>
                                                @elseif($paid->product->product_type==3)
                                                <p class="text-details">Tool</p>
                                                @endif
                                            @elseif($paid->sell_type==2)
                                            <p class="text-details">Certificate</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->price}} USD</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Invoice number:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->invoice_id}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Token:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->token}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Payer ID</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$paid->payerId}}</p>
                                        </div>
                                    </div>
                        
                                </div>    
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