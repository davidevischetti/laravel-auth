@extends('layouts.app')

@section('content')
<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link disabled" aria-current="page" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="{{route('admin.posts.index')}}">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">Tags</a>
    </li>
  </ul>
@endsection
