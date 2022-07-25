@extends('layouts.app')

@section('content')
<table class="table container">
    <thead class="table-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Slug</th>
        <th scope="col">Title</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->title}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$posts->links()}}
@endsection
