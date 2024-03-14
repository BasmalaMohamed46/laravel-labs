<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Enabled</th>
                <th scope="col">Published At</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td><a href="{{ route('posts.show',$post->id) }}">{{$post->title}}</a></td>
                <td>{{$post->enabled}}</td>
                <td>{{$post->published_at}}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="Post">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {!! $posts->links() !!}
    </body>
</html>




