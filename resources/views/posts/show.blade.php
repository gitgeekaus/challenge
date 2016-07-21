@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title" class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <p>{{ $post->title }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-md-4 control-label">Content</label>

                        <div class="col-md-6">
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                    <a class="btn btn-small btn-info" href="{{ URL::to('posts/') }}">Show all Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
