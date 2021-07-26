@extends('app')
@section('content')
<h1 class="text-center">Post of Author {{$id}}</h1>
<div class="card card-default">
<div class="card card-header">Posts</div>
<div class="card-body">
    @foreach($collections as $collection)
    <ul class="list-group-item">
    <div class="card-header"><h5 class="text-center">{{$collection['title']}}</h5></div>
    <div class="card-body">{{$collection['body']}}</div>
    </ul>
    @endforeach
</div>

</div>

@endsection