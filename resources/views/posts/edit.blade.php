@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>
<form action="/posts/{{$post->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" name="title" class="form-control" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="">Body</label>
      <textarea name="body" id="body" rows="10" class="form-control">{{$post->body}}</textarea>
    </div>
    <div class="mt-2">
        <button type="submit" class="btn btn-success">Update</button>
    </div>
    
  </form>
@endsection
    
