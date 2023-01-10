
@extends('layouts.frontendapp')

@section('frontend')




<div class="card col-lg-10 mx-auto mt-5">
    <div class="card-header">All Posts </div>
    <div class="card-body">
        <!-- {{print_r($posts)}} -->
    <table class="table table-responsive">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Detail</td>
            <td>Actions</td>
        </tr>
        @foreach($posts as $key=> $post)

        
        <tr>
            <td>{{++$key}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->detail}}</td>
            <td>
                <div class="btn-group">
                <a href="{{route('editpost',$post->id)}}" class="btn btn-primary">Edit</a>
                <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                <form action="{{route('deletepost',$post->id)}}" method="post">
                    @csrf
                    @method ('delete')
                    <button class="btn btn-danger" >Delete</button>
                </form>
                </div>
            </td>
            
        </tr>
            @endforeach



    </table>
    </div>
</div>

@endsection
   



