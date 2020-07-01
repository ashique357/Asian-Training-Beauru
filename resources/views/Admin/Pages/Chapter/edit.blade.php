@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Chapter</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Edit Chapter</a>
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
                     <form method="POST" id="signup-form"  action="/admin/chapter/edit/{{$chapter->id}}" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Edit Chapter</h2>
                        
                        <!-- consultation -->
                            <div class="form-group">
                            <label >Name</label>
                                 <input type="text" class="form-control" name="name"  placeholder="{{$chapter->name}}" value="{{$chapter->name}}" autocomplete="name" autofocus >
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            
                           <div class="form-group">
                           <label >Country</label>
                              <select name="country" class="form-control"  id="event_type">
                                 <option disabled="false">Select Country</option>
                                 @foreach($countries as $country)
                                 <option value="{{$country->nicename}}">{{$country->nicename}}</option>
                                 @endforeach
                              </select>
                           </div>

                            <div class="form-group">
                            <label >Member Since</label>
                                 <input type="text" class="form-control" name="year"  placeholder="{{$chapter->year}}" value="{{$chapter->year}}" autocomplete="modules" autofocus >
                                 @error('year')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                            <label >Contact Person</label>
                                 <input type="text" class="form-control" name="contact_person"  placeholder="{{$chapter->contact_person}}" value="{{$chapter->contact_person}}" autocomplete="approx" autofocus >
                                 @error('contact_person')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>

                            <div class="form-group">
                            <label >Web address</label>
                                 <input type="text" class="form-control" name="web"  placeholder="{{$chapter->web}}" value="{{$chapter->web}}" autocomplete="level" autofocus >
                                 @error('web')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                            <label >Contact No</label>
                                 <input type="text" class="form-control" name="contact"  placeholder="{{$chapter->contact}}" value="{{$chapter->contact}}" autocomplete="fees" autofocus >
                                 @error('contact')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            
                            <div class="form-group">
                            <label >Committee Members</label>
                                 <input type="text" class="form-control" name="members"  placeholder="{{$chapter->members}}" value="{{$chapter->members}}" autocomplete="currency" autofocus >
                                 @error('members')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                            </div>
                            <div class="form-group">
                              <label for="">Details</label>
                              <textarea class="form-control summernote" name="details" >{!! $chapter->details!!}</textarea>
                                 @error('details')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
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
