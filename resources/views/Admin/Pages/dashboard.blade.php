@extends('Admin.partials.adminLayout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$user}}</h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
              <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$all}}</h3>

                <p>Applied for membership</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-md-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$member}}</h3>

                <p>Verified Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4">
              <!-- small box -->
              <div class="small-box bg-dark">
                <div class="inner">
                  <h3>{{$product}} <span>$</span></h3>

                  <p>Product Sold</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$certificate}} <span>$</span></h3>

                  <p>Certificate Sold</p>
                </div>
                <div class="icon">
                  <i class="ion ion-card"></i>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>{{$sell}} <span>$</span></h3>

                  <p>Total Selling</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cash"></i>
                </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection