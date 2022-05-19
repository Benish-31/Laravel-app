@extends('layouts.app')
@section('content')

<div class ="text">
<h1 class="heading">This is the page for all the posts</h1>
</div>

@if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ Session('message') }}
            </div>
        @endif

<div class="card-body">
<table class="table table-bordered mb-0">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
    </tr>
    </thead>
<tbody>
@foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        </tr>
        @endforeach
</tbody>
      </table>
  </div>
@endsection
