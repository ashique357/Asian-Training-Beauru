@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Resource center</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Resource Center</a>
                  </li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content" id="block">
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
                     <form method="POST" id="signup-form"  action="/admin/resource/edit/{{$product->id}}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Edit Material</h2>
                        <div class="form-group">
                             <input type="hidden" value="{{$product->product_type}}" name="product_type">
                        </div>
                    
                        <!-- job -->
                        <div id="provider">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name"  placeholder="{{$product->name}}" value="{{$product->name}}" autocomplete="name" autofocus >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                           <div class="form-group">
                           <textarea class="form-control summernote" name="material_details" value="{{$product->materail_details}}">{!!$product->materail_details!!}</textarea>
                              @error('material_details')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Upload Cover Image</label>
                              <input type="file" class="form-control" name="cover_image">
                              @error('cover_image')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Upload Files</label>
                              <input type="file" class="form-control" name="filenames[]" multiple>
                              @error('files')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="price_user" value="{{$product->price_user}}" placeholder="{{$product->price_user}}" autocomplete="issn" autofocus >
                              @error('price_user')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="price_member" value="{{$product->price_member}}" placeholder="{{$product->price_member}}" autocomplete="price_member" autofocus >
                              @error('price_member')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="currency" value="{{$product->currency}}"  placeholder="{{$product->currency}}" autocomplete="currency" autofocus >
                              @error('currency')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Apply Changes</button>
                        </div>
                     </form>
         </div>
         <!-- Slider Content -->
      </div>
   </section>
</div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function() {

     $('.summernote').summernote({
            
           height: 300,

      });
	  $('.dropdown-toggle').dropdown();

   });
</script>
