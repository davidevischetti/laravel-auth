@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-info mb-3 ms-3">Back</a>

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
