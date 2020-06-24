@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Certification</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Edit Certificate</a>
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
                     <form method="POST" id="signup-form"  action="/admin/certificate/edit/{{$c->id}}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Edit Certificate</h2>
                        
                        <!-- consultation -->
                            <div class="form-group">
                                 <input type="text" class="form-control" name="name" value="{{$c->name}}" placeholder="{{$c->name}}" autocomplete="name" autofocus >
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                              <label for="">Upload Cover Image</label>
                              <input type="file" class="form-control" name="image">
                              @error('cover_image')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <span><img src="/certificates/{{$c->image}}" style="height:300px;width:300px"></span>
                           </div>

                           <div class="form-group">
                              <select name="medium" class="form-control"  id="event_type">
                                 <option disabled="false">Select medium</option>
                                 <option value="1">Online</option>
                                 <option value="2">Classroom</option>
                                 <option value="3">Online & Classroom</option>
                              </select>
                           </div>

                            <div class="form-group">
                                 <input type="text" class="form-control" name="modules" value="{{$c->modules}}" placeholder="{{$c->modules}}" autocomplete="modules" autofocus >
                                 @error('modules')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                                 <input type="text" class="form-control" name="approx" value="{{$c->approx}}" placeholder="{{$c->approx}}" autocomplete="approx" autofocus >
                                 @error('approx')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                                 <input type="text" class="form-control" name="level" value="{{$c->level}}" placeholder="{{$c->level}}" autocomplete="level" autofocus >
                                 @error('level')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" name="fees" value="{{$c->fees}}" placeholder="{{$c->fees}}" autocomplete="fees" autofocus >
                                 @error('fees')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                                 <input type="text" class="form-control" name="currency" value="{{$c->currency}}" placeholder="{{$c->currency}}" autocomplete="currency" autofocus >
                                 @error('currency')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                              <label for="">Details about the course</label>
                              <textarea class="form-control summernote" name="details" >{!! $c->details !!}</textarea>
                                 @error('details')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Context of the course</label>
                              <textarea class="form-control summernote" name="context" >{!! $c->context !!}</textarea>
                                 @error('context')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Evaluation process</label>
                              <textarea class="form-control summernote" name="evaluation" >{!! $c->evaluation !!}</textarea>
                                 @error('evaluation')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Objective of the course</label>
                              <textarea class="form-control summernote" name="objective" >{!! $c->objective !!}</textarea>
                                 @error('objective')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                           </div>
                           <div class="form-group">
                              <label for="">Category of the course</label>
                              <select name="category_id" class="form-control"  id="event_type">
                                 <option disabled="false">Select course category</option>
                                 @foreach($categories as $category)
                                 <option value="{{$c->id}}">{{$category->name}}</option>
                                 @endforeach
                              </select>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function() {

     $('.summernote').summernote({
            
           height: 300,

      });
	  $('.dropdown-toggle').dropdown();

   });
</script>
@endsection
