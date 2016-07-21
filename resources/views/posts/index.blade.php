@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    @foreach ($posts as $post)
    <div>
        <div class="text-center">
            <h3>{{ $post->title }}</h3>
            <p>By {{ $post->user->name }}</p>
            <p>{{ $post->created_at }}</p>
            <p>{{ $post->content }}</p>
        </div>
        @if(Auth::user() && Auth::user()->id == $post->user->id)
        <div class="text-center">
            <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $post->id) }}">Show this Post</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $post->id . '/edit') }}">Edit this Post</a>
            
            <form class="pull-right" role="form" method="POST" action="{{ url('/posts/' . $post->id ) }}">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <button class="btn btn-small btn-danger" type="submit" value="Delete">Delete this Post</button>
            </form>
        </div>    
        @endif
    </div>     
    @endforeach
</div>
@endsection
