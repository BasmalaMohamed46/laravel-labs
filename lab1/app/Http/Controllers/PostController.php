<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      return view('posts.layout.index');
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
       return view('posts.layout.show', ['id' => $id]);
    }
    public function edit($id)
    {
        return view('posts.layout.edit')->with(['id'=> $id]);
    }
    public function update($id)
    {
         //no view as we will update data in data store
        //redirect to post show
    }
    public function destroy($id)
    {
        //no view as we will data from data store
        //redirect to post list
    }


}
