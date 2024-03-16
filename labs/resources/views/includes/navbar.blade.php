<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::route()->getName() == 'posts.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ Request::route()->getName() == 'posts.index' || Request::route()->getName() == 'posts.create' ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Posts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item {{ Request::route()->getName() == 'posts.index' ? 'active' : '' }}" href="{{ route('posts.index') }}">Posts List</a>
          <a class="dropdown-item {{ Request::route()->getName() == 'posts.create' ? 'active' : '' }}" href="{{ route('posts.create') }}">New Post</a>
        </div>
      </li>
      <li class="nav-item {{ Request::route()->getName() == 'users.index' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">Users <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
