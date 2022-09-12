@extends('layouts.app')

@section('content')
<form action="/posts" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Body</label>
      <textarea name="body" id="body" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <label for="">Choose Image</label>
      <input type="file" name="image" class="form-control">
    </div>
    
    <div class="mt-2">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    
  </form>
@endsection
    
