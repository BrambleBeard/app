@extends('_layouts/splash')

@section('content')
    <h2 class="page-title">{{ $title }}</h2>

    {!! Form::open( ['route' => 'storeContact'] ) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name', ['class'=>'required']) !!}
            {!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'First Last']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email', ['class'=>'required']) !!}
            {!! Form::email('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'email@domain.com']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subject', 'Subject', ['class'=>'required']) !!}
            {!! Form::select('subject', ['General message'=>'General message','Name correction, addition, or removal'=>'Name correction, addition, or removal'], null, ['required', 'class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('message', 'Message', ['class'=>'required']) !!}
            {!! Form::textarea('message', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your message here.']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('home') }}" class="btn btn-default">Cancel</a>
        </div>

    {!! Form::close() !!}

@stop
