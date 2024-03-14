<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            margin: 20px;
        }
    </style>
</head>
<body>

<form method="POST" action="{{ route('posts.update',$post->id) }}" >
            @csrf
            @method('put')
            <div class="mb-3">
              <label  class="form-label">New Title</label>
              <input type="text" class="form-control" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
              <label  class="form-label">New Post</label>
              <input type="text" class="form-control" name="body"  value="{{$post->body}}">
            </div>
            <div class="mb-3">
            <label class="toggle-switch">
                <label for="enabled">enabled</label>
                <input type="checkbox" name="enabled" {{ $post->enabled ? 'checked' : '' }}>
                <span class="slider"></span>
            </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
</body>
</html>