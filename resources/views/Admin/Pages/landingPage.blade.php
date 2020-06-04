@extends('Admin.partials.adminLayout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Landing Page</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Landing Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- Main content -->
    <section class="content" id="app">
      <div class="container-fluid">
        <!-- Top Navigation -->
        
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Top Navigation Bar</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
          <success-alert v-if="successful"></success-alert>
          <!-- /.card-header -->
          <form action="/top-nav" method="POST" @submit.prevent="topNav">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                <input type="text" class="form-control" name="address" v-model="address" id="address" value="{{$data['address']}}" placeholder="{{$data['address']}}">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" v-model="phone" id="phone" value="{{$data['phone']}}" placeholder="{{$data['phone']}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" v-model="email" id="email" value="{{$data['email']}}" placeholder="{{$data['email']}}">
                </div>
                <div class="form-group">
                    <label>Close/Open</label>
                    <input type="text" class="form-control" id="time" v-model="time" value="{{$data['time']}}" placeholder="{{$data['time']}}">
                  </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary" @click="topNav">Apply Changes</button>
                </div>
                
              </div>
            </div>
          </div>
        </form>
        </div>
        <!-- Top Navigation -->

        <!-- Main Navigation -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Main Navigation Menu</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Add Menu</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label>Add Sub menu</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Home</option>
                        <option>About Us</option>
                        <option>Chapter</option>
                        <option>Certification</option>
                        <option>Event</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label>Add menu url</label>
                      <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                  
                </div>
              </div>
            </div>
           
        </div>
        <!-- Main Navigation -->

        <!-- Slider Content -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Banner</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Add Banner Image</label>
                    <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" value="{{$data['banner_image']}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                    </div>
                   </div>
                   <p><span style="color: grey">The image size will be 1920 x 722 pixels</span></p>
                  <div class="form-group">
                      <label>Title</label>
                      <input class="form-control" rows="3" placeholder="Enter ..." value="{{$data['banner_title']}}" placeholder="{{$data['banner_title']}}">
                  </div>

                  <div class="form-group">
                    <label>Slogan</label>
                    <input class="form-control" rows="3" placeholder="Enter ..." value="{{$data['banner_paragraph']}}" placeholder="{{$data['banner_paragraph']}}">
                </div>
                  
                  <div class="form-group">
                    <label>Button Url</label>
                    <input type="text-area " class="form-control" value="{{$data['banner_url']}}">
                </div>

                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                  
                </div>
              </div>
            </div>
           
        </div>
        <!-- Slider Content -->

        <!-- Find Course Content -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Course</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Title</label>
                        <input type="text" class="form-control" value="{{$data['course_title']}}">
                    </div>
                    <div class="form-group">
                        <label>Course Icon URL</label>
                        <input type="text" class="form-control" value="{{$data['course_url']}}">
                    </div>             
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                  
                </div>
              </div>
            </div>
           
        </div>
        <!-- Find Course Content --> 

         <!-- Faculty Content -->
         <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Faculty</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="{{$data['faculty_title']}}">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <input type="text" class="form-control" value="{{$data['faculty_paragraph']}}">
                    </div>
                    <div class="form-group">
                        <label>Faculty URL</label>
                        <input type="text" class="form-control" value="{{$data['faculty_url']}}">
                    </div>
                    <div class="form-group">
                        <label>Select Team Member</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Fardin Islam</option>
                          <option>Shamsujjoha</option>
                          <option>Lina Rahman</option>
                          <option>Rupak Isalm</option>
                          <option>Shahabuddin</option>
                        </select>
                    </div>      
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                  
                </div>
              </div>
            </div>
           
        </div>
          <!-- Faculty Content --> 

          <!-- Popular Course Content -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Popular Courses</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Check Items</label>
                  </div>
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                </div>
              </div>
            </div>
           
        </div>
          <!-- Popular Course Content -->

          <!-- Blog Content -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Blog</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Check Items</label>
                  </div>
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
          <!-- Blog Content -->

          <!-- Extra Content -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Extras</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Facebook Url</label>
                      <input type="text" class="form-control" value="{{$data['fb_url']}}">
                  </div>
                  <div class="form-group">
                    <label>Twitter Url</label>
                    <input type="text" class="form-control" value="{{$data['twitt_url']}}">
                 </div>
                <div class="form-group">
                    <label>Footer Paragraph 1</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." value="{{$data['f_para1']}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Footer Paragraph 2</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." value="{{$data['f_para2']}}"></textarea>
                </div>
                <div class="form-group">
                    <label>Footer Paragraph 3</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." value="{{$data['f_para3']}}"></textarea>
                </div>
                  <div class="form-group">
                      <button type="button" class="btn btn-block btn-primary">Apply Changes</button>
                  </div>
                </div>
              </div>
            </div>
           
        </div>
          <!-- Extra Content -->
      </div>
    </section>
    
  </div>
   
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> --}}

<script>
  Vue.component('validation-errors', {
      props: ['errors'],
      template: `<div v-if="validationErrors">
                  <ul class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                      <li v-for="(value, key, index) in validationErrors" style="list-style:none;">@{{ value }}</li>
                  </ul>
              </div>`,
      computed: {
          validationErrors(){
              let errors = Object.values(this.errors);
              errors = errors.flat();
              return errors;
          }
      }
  });

  Vue.component('success-alert',{
    props:['success'],
    template:`<div v-if="successful" class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <p><span>Top navbar is set!!.Please Check it out</span></p>
    </div>`,
    computed:{
      successful(){
        return true;
      }
    }
  });
let vm = new Vue({
   el: "#app",
   data: {
    phone: '',
    email: '',
    address: '',
    time:'',
    validationErrors: '',
    successful:''
   },
   methods: {
    topNav(){
     console.log('submitting');
     axios.post('/top-nav', {
      phone: this.phone,
      email: this.email,
      address: this.address,
      time:this.time
     }).then(response => {
      if(response.status ==200){
        this.successful=true
      }
     }).catch(error => {
      if (error.response.status == 422){
       this.validationErrors = error.response.data.errors;
      }
     })
    }
   }
   //top nav


  })

</script>

@endsection

