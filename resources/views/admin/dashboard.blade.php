@extends('layouts.app')

@section('content')
<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link disabled" aria-current="page" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.posts.index')}}">Posts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.users.index')}}">Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Categories</a>
    </li>
  </ul>
@endsection
