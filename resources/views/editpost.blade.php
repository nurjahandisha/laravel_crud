@extends('layouts.frontendapp')

@section('frontend')
<div class="card col-lg-5 mx-auto mt-5">
    <div class="card-header">Edit Post</div>
    <div class="card-body">
    <form action="{{route('updatepost',$post->id)}}" method="post">
      @csrf
      @method('put')
        <input value="{{$post->title}}" type="text" name="title" class="form-control" placeholder="title" value="{{old('title')}}">
        <span class="text-danger">
        @error('title')
        {{$message}}
        @enderror
        </span>
       
        <textarea name="detail" class="form-control mt-3" cols="30" rows="10">{{$post->detail}}</textarea>
        <span class="text-danger">
        @error('detail')
        {{$message}}
        @enderror
        </span>
        <button class="btn btn-primary w-100 mt-3">submit</button>
    </form>

    </div>
</div>
@endsection