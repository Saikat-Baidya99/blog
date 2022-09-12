@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary mt-2" href="/posts/create">Create Post</a>

                    @foreach ($posts as $post)
    <div class="card">
        <div class="row container mt-2">
            <div class="col-md-4">
                @if ($post->image)
                <img width="100%" height="150px" src="/storage/images/{{$post->image}}" alt="">
                @else
                <img width="100%" height="150px" src="/storage/images/no-image-available-icon.jpg" alt="">
                    
                @endif
                
            </div>
            <div class="col-md-6">
                <h2><a style="text-decoration: none" href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>{{$post->created_at}}</small>
            </div>
            
            <div class="col-md-2 mt-2" style="text-align: right">
                <form action="/home/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </div>
            
            
        </div>
    </div>
        

    @endforeach
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
