@extends('layouts.main')

@section('title', 'Show Post')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show post</h2>
        </div>
       
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ID:</strong>
            {{ $post->id }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group"><strong>Title:</strong> {{ $post->title }} 
    </div>
</div>
    
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>body:</strong>{{ $post->body }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>enabled:</strong>{{ $post->enabled }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>Published at:</strong>{{ $post->published_at }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>User:</strong>{{ $post->user->name }}</div>
        </div>
    </div>
</div>

@endsection





























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin: 20px;
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show post</h2>
            </div>
           
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $post->id }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>Title:</strong> {{ $post->title }} </div></div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>body:</strong>{{ $post->body }}</div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>enabled:</strong>{{ $post->enabled }}</div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group"><strong>Published at</strong>{{ $post->published_at }}</div>
        </div>



        </div>

    </div>

</html>
</body>
</html> -->