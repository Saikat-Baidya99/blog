@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-md-6">
            <h1>Post</h1>
        </div>
        <div class="col-md-6" style="text-align: right">
            <a class="btn btn-primary mt-2" href="/posts/create">Create Post</a>
        </div>
    </div>
</div>
    
    @foreach ($posts as $post)
    <div class="card">
        <div class="row container mt-2">
            <div class="col-md-4">
                <img width="100%" height="200px" src="/storage/images/{{$post->image}}" alt="">
            </div>
            <div class="col-md-8">
                <h2><a style="text-decoration: none" href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>{{$post->created_at}}</small>
            </div>
            
            {{-- <div class="col-md-6 mt-2" style="text-align: right">
                <form action="/posts/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </div> --}}
            
            
        </div>
    </div>
        

    @endforeach
    <div class="mt-2">
        {{$posts->links()}}

    </div>
@endsection
    
