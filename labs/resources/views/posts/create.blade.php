@extends('layouts.main')

@section('title', 'Create Post')

@section('content')

<form method="POST" action="{{route('posts.store')}}" >
            @csrf
            <div class="mb-3">
              <label  class="form-label">New Title</label>
              <input type="text" class="form-control" name="title"  value="{{old('title')}}">
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label  class="form-label">New Post</label>
              <input type="text" class="form-control" name="body" value="{{old('body')}}" >
              @error('body')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <input type="datetime-local" class="form-control"  name="published_at" value="{{ now()->format('Y-m-d\TH:i')}}" hidden>
              @error('published_at')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="toggle-switch">
                  <label for="enabled">Enabled</label>
                  <input type="hidden" name="enabled" value="0"> 
                  <input type="checkbox" name="enabled" {{ old('enabled') == 1 ? 'checked' : '' }} value="1"> 
                  <span class="slider"></span>
              </label>
           </div>

            <div class="mb-3">
              <label  class="form-label">User</label>
              <select class="form-control" name="user_id">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
              </select>
              @error('user_id')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

@endsection
