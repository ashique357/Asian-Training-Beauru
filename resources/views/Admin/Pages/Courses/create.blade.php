@extends('Admin.partials.adminLayout')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Create Course</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active"><a href="#">Certification</a></li>
                  <li class="breadcrumb-item active">Crteate</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content" >
      <div class="container-fluid">
         <!-- Slider Content -->
         <!-- Find Course Content -->
         <div class="card card-default">
            <div class="card-header">
               <h3 class="card-title">Certification</h3>
               @include('flash')
               <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
               </div>
            </div>
            <!-- /.card-header -->
            <form action="/admin/course-create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body" id="app">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Certificate Title</label>
                        <input type="text" class="form-control" name="course_title" value="{{ old('course_title') }}" required autofocus>
                        @error('course_title')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label>Upload image/Icon</label><br>
                            <input type="radio" id="icon" name="course_icon" value="icon" @change="hide">
                                <label for="icon">Icon</label><br>
                            <input type="radio" id="image" name="course_icon" value="image" @change="hide">
                                <label for="image">Image</label><br>
                     </div>
                     <div id="block" hidden>
                     <div id="hide">
                        <div class="form-group">
                           <label>Course Icon URL</label>
                           <input type="text" class="form-control" value="" name="course_url">
                           <span style="color:grey">Ex:fa fa-suitcase</span>
                           @error('course_url')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                     </div>
                     <div id="show">
                        <div class="form-group">
                           <label for="exampleInputFile">Add Course Image</label>
                           <div class="input-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" name="course_image" id=""    value="">
                                 <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                              </div>
                              <div class="input-group-append">
                                 <span class="input-group-text" id="">Upload</span>
                              </div>
                           </div>
                           <span style="color:grey">Image size will be 158.66x175</span>
                           @error('course_image')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </div>
                     </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Save</button>
                     </div>
                  </div>
               </div>
            </div>
            </form>
         </div>
         <!-- Find Course Content --> 
         <!-- Slider Content -->
      </div>
   </section>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
let v=new Vue({
el:'#app',
      
methods:{
    hide:function(){
 
        if(document.getElementById('icon').checked){
            var a=document.getElementById('icon').value;
        }
       else if(document.getElementById('image').checked){
            var a=document.getElementById('image').value;
        }
      if(a=='icon'){
            document.getElementById('block').removeAttribute('hidden'); 
            $('#show').hide();
            $('#hide').show();   
        }
        if(a=='image' ){
            document.getElementById('block').removeAttribute('hidden');
            $('#hide').hide();
            $('#show').show();
        }
        console.log(a);
    }
}

});
</script>

@endsection