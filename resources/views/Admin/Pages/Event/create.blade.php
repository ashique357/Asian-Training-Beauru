@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Events/Training</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Create Events</a>
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
                     <form method="POST" id="signup-form"  action="/admin/event/create" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Create Events</h2>
                        <div class="form-group">
                           <select name="event_type" class="form-control" @change="hide" id="event_type">
                              <option disabled="false">Select Event Category</option>
                              <option value="1">Seminar/Congress</option>
                              <option value="2">Networking</option>
                           </select>
                        </div>
                        <div id="block">
                            <div class="form-group">
                                <input type="text" class="form-control" name="title"  placeholder="Event name" autocomplete="title" autofocus >
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="date"  placeholder="Date" autocomplete="date" autofocus >
                              @error('date')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <div class="form-group">
                              <input type="text" class="form-control" name="time"  placeholder="Time" autocomplete="time" autofocus >
                              @error('time')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           
                           <div class="form-group">
                              <input type="text" class="form-control" name="location"  placeholder="Location" autocomplete="location" autofocus >
                              @error('location')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <label for="exampleInputFile">Upload Image</label>
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                 </div>
                              </div>
                              <p><span style="color: grey">The image size will be 722 X 404 pixels</span>
                              </p>
								   </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="contact"  placeholder="Contact Person" autocomplete="contact" autofocus >
                              @error('contact')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <div class="form-group">
                           <textarea class="form-control summernote" name="purpose" ></textarea>
                              @error('purpose')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="fees"  placeholder="Fees" autocomplete="fees" autofocus >
                              @error('fees')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Check Registration option(Yes/No):</label>
                           <input type="radio"  name="registration" value="0">
                             <label for="contactChoice1">No</label>
                             <input type="radio"  name="registration" value="1">
                             <label for="contactChoice1">Yes</label>
                              @error('registration')
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function() {

     $('.summernote').summernote({
            
           height: 300,

      });
	  $('.dropdown-toggle').dropdown();

   });
</script>
