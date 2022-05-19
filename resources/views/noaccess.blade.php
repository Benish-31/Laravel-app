@extends('layouts.app')
@section('content')

@if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ Session('message') }}
            </div>
        @endif

 <h1 class="container">You are not authorized!</h1>
@endsection
