@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Resources</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
                        <li class="breadcrumb-item active"><a href="#">Resources</a>
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
					@if($product->product_type==1)
                    <h3 class="card-title">Books/eBooks</h3>
                    @elseif($product->product_type==1)
                    <h3 class="card-title">Materials</h3>
                    @else
                    <h3 class="card-title">Tools</h3>
                    @endif
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
                                @if($product->product_type==1)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Book name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Author's name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->author_name}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Publication Year:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->publication}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">ISSN:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->issn}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Book Details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$product->content!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Cover photo:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        @foreach(json_decode($product->cover_image, true) as $image)
                                            <div class="image cart-image">
                                                 <img src="{{URL::to('/products/'.$image)}}">
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">User Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_user}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Member Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_member}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Attached Files:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        
                                        @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            <div class="image cart-image">
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                        <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href="/products/{{$image}}"><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @elseif($product->product_type==2)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Material's name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->name}}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Material's Details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$product->material_details!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Cover photo:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        @foreach(json_decode($product->cover_image, true) as $image)
                                            <div class="image cart-image">
                                                 <img src="{{URL::to('/products/'.$image)}}">
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">User Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_user}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Member Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_member}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Attached Files:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        
                                        @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            <div class="image cart-image">
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                        <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href="/products/{{$image}}"><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @elseif($product->product_type ==3)
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Tool's name:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->name}}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Tool's Details:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{!!$product->tool_details!!}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Cover photo:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        @foreach(json_decode($product->cover_image, true) as $image)
                                            <div class="image cart-image">
                                                 <img src="{{URL::to('/products/'.$image)}}">
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">User Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_user}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Member Price:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-details">{{$product->price_member}} &nbsp{{$product->currency}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6><strong class="heading">Attached Files:</strong></h6>
                                        </div>
                                        <div class="col-md-9">
                                        
                                        @foreach(json_decode($product->filenames, true) as $image)
                                        <?php $extensions = pathinfo(storage_path($image), PATHINFO_EXTENSION);?>
                                            <div class="image cart-image">
                                                 <ul>
                                                    @if($extensions == 'jpg' || $extensions == 'png' || $extensions =='jpeg')
                                                        <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/'.$image)}}"></a></li>
                                                    @elseif($extensions =='doc' || $extensions=='docx')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/doc.jpg')}}"></a></li>
                                                    @elseif($extensions =='pdf')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/pdf.png')}}"></a></li>
                                                    @elseif($extensions == 'zip')
                                                    <li><a href="/products/{{$image}}"><img src="{{URL::to('/products/zip.png')}}"></a></li>
                                                    @else
                                                    <li><li><a href="/products/{{$image}}"><p>Attached files</p></a></li>
                                                    </li>
                                                    @endif
                                                 </ul>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif
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