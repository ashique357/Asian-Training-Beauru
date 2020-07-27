@extends('new.edubin.partials.main') 
@section('content')
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(new/images/page-banner-1.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="page-banner-cont">
               <h2>Dashboard</h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="/">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
               </nav>
            </div>
            <!-- page banner cont -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
<section id="teachers-singel" class="pt-70 pb-120 gray-bg">
   <div class="container-fluid gedf-wrapper">
      <div class="row justify-content-center">
         @include('User.Pages.Individual.dashboard')
         <div class="col-lg-8 gedf-main">
            <div class="card gedf-card mt-50">
               <div class="card-header">
                  <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Post a status</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
                     </li>
                  </ul>
               </div>
               <form action="/timeline" method="post">
                  @csrf
                  <div class="card-body">
                     <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                           <div class="form-group">
                              <label class="sr-only" for="message">post</label>
                              <textarea class="form-control" name="body" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                           <div class="form-group">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label" for="customFile">Upload image</label>
                              </div>
                           </div>
                           <div class="py-4"></div>
                        </div>
                     </div>
                     <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                           <button type="submit" class="btn btn-primary">share</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            @foreach($posts as $post)
            <div class="card gedf-card">
               <div class="card-header">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-2">
                           <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                        </div>
                        <div class="ml-2">
                           <div class="h5 m-0">@LeeCross</div>
                           <div class="h7 text-muted">Miracles Lee Cross</div>
                        </div>
                     </div>
                     <div>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
                  <p class="card-text">
                     {!!$post->body!!}
                  </p>
               </div>
               <div class="card-footer">
                  <div class="dropdown">
                     <div class="dropdown-toggle dropdown-comment" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                     </div>
                     <div class="dropdown-menu comment-menu" data-display="static" aria-labelledby="dropdownMenuButton" style="width:100%; padding:10px">
                        @include('User.Pages.Individual.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                        <form method="post" action="/timeline-comment">
                           @csrf
                           <input type="hidden" name="post_id" value="{{ $post->id }}" />
                           <input type="text" class="form-control">
                           <div class="card-footer">
                              <a href="">Reply</a>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="card-body">
                  <input type="text" class="form-control" placeholder="Leave a comment">
                  <div class="btn-toolbar justify-content-between mt-10">
                     <div class="btn-group">
                        <button type="submit" class="btn btn-primary">post</button>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach
            <!-- blog details -->
         </div>
      </div>
      <!-- row -->
   </div>
   <!-- container -->
</section>
@endsection