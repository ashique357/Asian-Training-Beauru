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
                  <li class="breadcrumb-item active"><a href="#">{{$chapter->name}}</a>
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
               <h3 class="card-title">{{$chapter->name}}</h3>
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
                     <div class="content">
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Country</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->country}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Name</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->name}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Member Since:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->year}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Contact Person:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->contact_person}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Web address:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <a href="/{{$chapter->web}}">
                                 <p class="text-details">{{$chapter->web}}</p>
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Contact No:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->contact}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Committee members:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p class="text-details">{{$chapter->members}}</p>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <h6><strong class="heading">Details:</strong></h6>
                           </div>
                           <div class="col-md-9">
                              <p >{!!$chapter->details!!}</p>
                           </div>
                        </div>
                     </div>
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