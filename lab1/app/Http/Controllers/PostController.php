<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::paginate(10);
      return view('posts.layout.index')->with(['posts' => $posts]);
    }
    public function create()
    {
       return view('posts.layout.create'); 
    }
    public function store(Request $request)
    {
        //no view as we will save data in data store
        //redirect to posts list
    }
    public function show($id)
    {
       $post=Post::find($id);
       return view('posts.layout.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.layout.edit')->with(['post' => $post]);
    }
    public function update($id)
    {
         //no view as we will update data in data store
        //redirect to post show
    }
    public function destroy($id)
    {
       $post= Post::find($id);
       $post->delete();
       return redirect('http://127.0.0.1:8000/posts');
    }
    public function trash()
    {
        $posts = Post::onlyTrashed()->paginate(10);
        return view('posts.layout.trash')->with(['posts' => $posts]);
    }


}
