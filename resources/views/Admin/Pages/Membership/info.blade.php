@extends('Admin.partials.adminLayout') @section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Member's Details</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="#">Member's Details</a>
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
         <!-- /.card-header -->
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="card card-widget widget-user-2">
                     <!-- Add the bg color to the header using any of the bg-* classes -->
                     @if($m->member_type ==1)
                     <div class="widget-user-header bg-warning">
                        <div class="widget-user-image">
                           <img class="img-circle elevation-2" src="/uploads/images/{{$m['photo']}}" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{$m->name}}</h3>
                        <h5 class="widget-user-desc">{{$m->reg_id}}</h5>
                     </div>
                     <div class="card-footer p-0">
                        <ul class="nav flex-column">
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Email:&nbsp <span class="float-right badge bg-primary">{{$m->email}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Phone:&nbsp <span class="float-right badge bg-info">{{$m->phone}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Address:&nbsp<span class="float-right badge bg-success">{{$m->address}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Country:&nbsp <span class="float-right badge bg-danger">{{$c->name}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Designation:&nbsp <span class="float-right badge bg-dark">{{$m->desg}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Type:&nbsp<span class="float-right badge bg-success">Individual</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Year of experience:&nbsp <span class="float-right badge bg-danger">{{$m->exp}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Linkedin:&nbsp <span class="float-right badge bg-yellow">{{$m->linkedin}}</span>
                              </a>
                           </li>
                           
                        </ul>
                     </div>
                     @elseif($m->member_type ==2)
                     <div class="widget-user-header bg-warning">
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{$m->tp_name}}</h3>
                        <h5 class="widget-user-desc">{{$m->reg_id}}</h5>
                     </div>
                     <div class="card-footer p-0">
                        <ul class="nav flex-column">
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Address:&nbsp<span class="float-right badge bg-success">{{$m->tp_address}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Country:&nbsp <span class="float-right badge bg-danger">{{$c->name}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Web:&nbsp <span class="float-right badge bg-dark">{{$m->web}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Type:&nbsp<span class="float-right badge bg-success">Training Provider</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Year of establishment:&nbsp <span class="float-right badge bg-danger">{{$m->tp_exp}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Contact Person's Name:&nbsp <span class="float-right badge bg-info">{{$m->con_person}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                           Contact Person's Email:&nbsp <span class="float-right badge bg-primary">{{$m->tp_email}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                           Contact Person's Phone:&nbsp <span class="float-right badge bg-info">{{$m->tp_phone}}</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                     @elseif($m->member_type ==3)
                     <div class="widget-user-header bg-warning">
                        <!-- /.widget-user-image -->
                        <h3 class="widget-user-username">{{$m->org_name}}</h3>
                        <h5 class="widget-user-desc">{{$m->reg_id}}</h5>
                     </div>
                     <div class="card-footer p-0">
                        <ul class="nav flex-column">
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Country:&nbsp <span class="float-right badge bg-danger">{{$c->name}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Contact Person's Name:&nbsp <span class="float-right badge bg-info">{{$m->org_con_person}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                           Contact Person's Email:&nbsp <span class="float-right badge bg-primary">{{$m->org_email}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                           Contact Person's Phone:&nbsp <span class="float-right badge bg-info">{{$m->org_phone}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Number of employees:&nbsp <span class="float-right badge bg-info">{{$m->employee}}</span>
                              </a>
                           </li>
                           <li class="nav-item"> <a href="#" class="nav-link">
                              Type:&nbsp<span class="float-right badge bg-success">Corporate</span>
                              </a>
                           </li>
                        </ul>
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
</div>@endsection