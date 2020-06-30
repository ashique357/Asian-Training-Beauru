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
                  <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
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
                     <form method="POST" id="signup-form"  action="/admin/resource-create" enctype="multipart/form-data">
                        @csrf
                        <h2 class="form-title pb-20">Create Resources</h2>
                        <div class="form-group">
                           <select name="product_type" class="form-control" @change="hide" id="product_type">
                              <option disabled="false">Select post Category</option>
                              <option value="1">Book/eBook</option>
                              <option value="2">Material</option>
                              <option value="3">Tools</option>
                           </select>
                        </div>
                        <div id="individual" hidden>
                           <div class="form-group">
                              <input type="text" class="form-control" name="name[0]"  placeholder="Book Name/Title" autocomplete="name" autofocus >
                              @error('name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="author_name"  placeholder="Book author's name" autocomplete="author_name" autofocus >
                              @error('author_name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           
                           <div class="form-group">
                              <input type="text" class="form-control" name="publication"  placeholder="Book publication year" autocomplete="publication" autofocus >
                              @error('publication')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="issn"  placeholder="Write ISSN number" autocomplete="issn" autofocus >
                              @error('issn')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <div class="form-group">
                           <textarea class="form-control summernote" name="content" ></textarea>
                              @error('content')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <div class="form-group">
                           <label for="">Upload Cover Image</label>
                              <input type="file" class="form-control" name="cover_image[]">
                              @error('cover_image')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>

                           <div class="form-group">
                           <label for="">Upload Files</label>
                              <input type="file" class="form-control" name="filenames[]" multiple>
                              @error('filenames')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="price_user[]"  placeholder="Price for User" autocomplete="issn" autofocus >
                              @error('price_user')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="price_member[]"  placeholder="Price for members" autocomplete="price_member" autofocus >
                              @error('price_member')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="currency[]"  placeholder="Price Currency(Ex:USD)" autocomplete="currency" autofocus >
                              @error('currency')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <!-- job -->
                        <div id="provider" hidden>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name[1]"  placeholder="Material name" autocomplete="name" autofocus >
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                           <div class="form-group">
                           <textarea class="form-control summernote" name="material_details" ></textarea>
                              @error('material_details')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <label for="">Upload Cover Image</label>
                              <input type="file" class="form-control" name="cover_image[]">
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
                              <input type="text" class="form-control" name="price_user[]"  placeholder="Price for User" autocomplete="issn" autofocus >
                              @error('price_user')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="price_member[]"  placeholder="Price for members" autocomplete="price_member" autofocus >
                              @error('price_member')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="currency[]"  placeholder="Price Currency(Ex:USD)" autocomplete="currency" autofocus >
                              @error('currency')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <!-- consultation -->
                        <div id="corporate" hidden>
                           <div class="form-group">
                                 <input type="text" class="form-control" name="name[2]"  placeholder="Tool's name" autocomplete="name" autofocus >
                                 @error('name')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                              <textarea class="form-control summernote" name="tools_details" ></textarea>
                                 @error('material_details')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                           <label for="">Upload Cover Image</label>
                              <input type="file" class="form-control" name="cover_image[]">
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
                                 <input type="text" class="form-control" name="price_user[]"  placeholder="Price for User" autocomplete="issn" autofocus >
                                 @error('price_user')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="price_member[]"  placeholder="Price for members" autocomplete="price_member" autofocus >
                                 @error('price_member')
                                 <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="currency[]"  placeholder="Price Currency(Ex:USD)" autocomplete="currency" autofocus >
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
<script type="module">
   let vm=new Vue({
      el:'#block',
      
      methods:{
         hide:function(){
            
            var v=document.getElementById('product_type').value;
   
            if(v==1){
              document.getElementById('individual').removeAttribute('hidden');
              var a=document.getElementById('provider').setAttribute('hidden','hidden');
              var a=document.getElementById('corporate').setAttribute('hidden','hidden');
            }
            if(v==2){
              document.getElementById('provider').removeAttribute('hidden');
              var a=document.getElementById('individual').setAttribute('hidden','hidden');
              var a=document.getElementById('corporate').setAttribute('hidden','hidden');
            }
            if(v==3){
              document.getElementById('corporate').removeAttribute('hidden');
              var a=document.getElementById('provider').setAttribute('hidden','hidden');
              var a=document.getElementById('individual').setAttribute('hidden','hidden');
            }
           
         }
      }
   });
   
</script>