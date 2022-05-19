@extends('layouts.app')

@section('content')

  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post - create</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'posts.store']) !!}
                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label('Title') !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
                            @if ($errors->has('title'))
                                <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('body')) has-error @endif">
                            {!! Form::label('body') !!}
                            {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'body']) !!}
                            @if ($errors->has('body'))
                                <span class="help-block">{!! $errors->first('body') !!}</span>@endif
                        </div>
                        {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
              </div>
          </div>
      </div>
</div>
@endsection
