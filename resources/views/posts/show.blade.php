@extends('layouts.app')

@section('content')
    <div class="card mt-2">
        <div class="card-header">
            <h1>{{$post->title}}</h1>

        </div>
        <img class="card-img-top" height="400px" src="/storage/images/{{$post->image}}" alt="Card image cap">
        <div class="card-body">
            <small>{{$post->body}}</small>

        </div>
    </div>
    
    <div class="row mt-2">
        <div class="col-md-2">
            <a class="btn btn-primary" href="/posts/{{$post->id}}/edit">Edit Post</a>
        </div>
        
        <div class="col-md-10" style="text-align: right">
            <form action="/posts/{{$post->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">DELETE</button>
            </form>
        </div>
        
    </div>


@endsection
    
