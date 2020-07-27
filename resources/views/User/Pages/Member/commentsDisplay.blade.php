@foreach($comments as $comment)
<div class="card gedf-card">
<div class="card-header">
   <div class="d-flex justify-content-between align-items-center">
      <div class="d-flex justify-content-between align-items-center">
         <div class="mr-2">
            <img class="rounded-circle" width="45" src="/member/{{$comment->member->photo}}" alt="">
         </div>
         <div class="ml-2">
            <div class="h5 m-0">{{$comment->member->name}}</div>
         </div>
      </div>
      <div>
      </div>
   </div>
</div>
<div class="card-body">
   <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$comment->created_at}}</div>
   <p class="card-text">
      {!!$comment->body!!}
   </p>
</div>
</div>

@include('User.Pages.Member.commentsDisplay', ['comments' => $comment->replies])
<br>

@endforeach