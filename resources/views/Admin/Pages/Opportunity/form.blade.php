@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Opportunity</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Opportunity</a>
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
                     <form method="POST" id="signup-form"  action="/admin/opportunity">
                        @csrf
                        <h2 class="form-title pb-20">Post Opportunity</h2>
                        <div class="form-group">
                           <select name="post_type" class="form-control" @change="hide" id="post_type">
                              <option disabled="false">Select post Category</option>
                              <option value="1">Training</option>
                              <option value="2">Job</option>
                              <option value="3">Consultation</option>
                           </select>
                        </div>
                        <div id="individual" hidden>
                           <div class="form-group">
                              <input type="text" class="form-control" name="org_name[0]"  placeholder="Organization Name" autocomplete="org_name" autofocus >
                              @error('org_name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <select name="country" id="" class="form-control"  autocomplete="country" autofocus>
                                 <option disabled="false">Select Country</option>
                                 @foreach ($countries as $c)
                                 <option value="{{$c->id}}">{{$c->name}}</option>
                                 @endforeach
                              </select>
                              @error('country')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <textarea class="form-control" cols="30" rows="10" name="assignment_details[0]"></textarea>
                              @error('assignment_details')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <textarea class="form-control" cols="30" rows="10" name="requirements[0]" placeholder="Write details about your requirements" autofocus></textarea>
                              @error('requirements')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="approx[0]"  placeholder="Duration of Course" autofocus>
                              @error('approx')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="fees[0]"  placeholder="Course Fee">
                              @error('fees')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <!-- job -->
                        <div id="provider" hidden>
                           <div class="form-group">
                              <input type="text" class="form-control" name="org_name[1]"  placeholder="Organization Name" autofocus>
                              @error('org_name')
                              <span class="invalid-feedback" style="display:block" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <select name="country" id="" class="form-control"  autocomplete="country" autofocus>
                                 <option disabled="false">Select Country</option>
                                 @foreach ($countries as $c)
                                 <option value="{{$c->id}}">{{$c->name}}</option>
                                 @endforeach
                              </select>
                              @error('country')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="position"  placeholder="Job Position" autofocus>
                              @error('position')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <textarea class="form-control" cols="30" rows="10" name="assignment_details[1]" placeholder="Write details about your job description" autofocus></textarea>
                              @error('assignment_details')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="location"  placeholder="Location" autofocus>
                              @error('location')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                           <textarea class="form-control" cols="30" rows="10" name="requirements[1]" placeholder="Write details about your job requirements" autofocus></textarea>
                              @error('requirements')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="approx[1]"  placeholder="Time of Submission">
                              @error('approx')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="fees[1]"  placeholder="Salary" autofocus>
                              @error('fees')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <!-- consultation -->
                        <div id="corporate" hidden>
                           <div class="form-group">
                              <input type="text" class="form-control" name="org_name[2]"  placeholder="Organization Name" autofocus>
                              @error('org_name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <select name="country" id="" class="form-control"  autocomplete="country" autofocus>
                                 <option disabled="false">Select Country</option>
                                 @foreach ($countries as $c)
                                 <option value="{{$c->id}}">{{$c->name}}</option>
                                 @endforeach
                              </select>
                              @error('country')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              
                           <textarea class="form-control" cols="30" rows="10" name="assignment_details[2]" placeholder="Write details about your consultation's assignment description" autofocus></textarea>
                              @error('assignment_details')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              
                           <textarea class="form-control" cols="30" rows="10" name="requirements[2]" placeholder="Write details about your requirements" autofocus></textarea>
                           @error('requirements')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="approx[2]"  placeholder="Time of Consultation">
                              @error('approx')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="fees[2]"  placeholder="Consultation Fees" autofocus>
                              @error('fees')
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
               </div>
            </div>
         </div>
         <!-- Slider Content -->
      </div>
   </section>
</div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>



<script type="module">
   let vm=new Vue({
      el:'#block',
      
      methods:{
         hide:function(){
            
            var v=document.getElementById('post_type').value;
   
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