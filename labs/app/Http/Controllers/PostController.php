<?php

namespace App\Http\Controllers;
use App\Http\Requests\MyFormRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
    //   User::factory()->count(10)->create();
      $posts = Post::paginate(10);
      return view('posts.index')->with(['posts' => $posts]);
    }
    public function create()
    {
       return view('posts.create', ['users' => User::all()]); 
    }
    public function store(MyFormRequest $request)
    {
        $data=$request->validated(); 
        $data['user_id'] = Auth::id();
        $post = Post::create($data);
        return redirect()->route('posts.show', ['id' => $post->id])->with(['post' =>$post]);
    }
    public function show($id)
    {
       $post=Post::find($id);
       return view('posts.show', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with(['post' => $post], ['users' => User::all()]);
    }
    public function update(MyFormRequest $request,$id)
    {
        $post = Post::find($id);
        $post->update($request->only(['title', 'body', 'enabled']));
        return redirect()->route('posts.index');
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
        return view('posts.trash')->with(['posts' => $posts]);
    }


}
