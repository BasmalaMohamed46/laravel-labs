@extends('layouts.main')

@section('title', 'Users')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Posts</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Number of posts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)                                                                       
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->posts->count()}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{ $users->links() }}
                </ul>
            </nav>
        </div>
    </div>
</div>

@endsection