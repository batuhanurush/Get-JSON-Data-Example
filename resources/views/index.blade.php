@extends('app')
@section('content')
<h1 class="text-center">Author Posts</h1>
<div class="card card-header">Posts</div>
<div class="card-body">
    <ul class="list-group">

        @foreach($uniqueUserIds as $uniqueUserId)



            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="col-md-3">
                    Author - {{$uniqueUserId['userId']}}
                </div>
                <span class="badge bg-primary rounded-pill"> {{$countUnique[$uniqueUserId['userId']]}} posts</span>
                <div class="col-md-6">
            <a href="{{route('post.show', $uniqueUserId['userId']) }}" class="btn btn-sm float-right btn-success">See More</a>
        </div>
            </li>

      
        
        @endforeach
    </ul>
</div>
@endsection