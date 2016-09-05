@extends('_layouts/splash')

@section('content')
    <div class="header">
        <h1 class="page-title">{{ $title }}</h1>
    </div>
    <div class="content content-narrow">
        {!! Form::open( ['route' => 'storeContact', 'class' => 'pure-form pure-form-stacked'] ) !!}

            {!! Form::label('first', 'First Name', ['class'=>'required']) !!}
            {!! Form::text('first', null, ['required', 'class'=>'pure-input-1', 'placeholder'=>'First']) !!}

            {!! Form::label('last', 'Last Name', ['class'=>'required']) !!}
            {!! Form::text('last', null, ['required', 'class'=>'pure-input-1', 'placeholder'=>'Last']) !!}

            {!! Form::label('email', 'Email', ['class'=>'required']) !!}
            {!! Form::email('email', null, ['required', 'class'=>'pure-input-1', 'placeholder'=>'email@domain.com']) !!}

            {!! Form::label('subject', 'Subject', ['class'=>'required']) !!}
            {!! Form::select('subject', [
                'General feedback'=>'General feedback',
                'Issue or problem'=>'Issue or problem',
                'Enhancement request'=>'Enhancement request',
            ], null, ['required', 'class'=>'pure-input-1']) !!}

            {!! Form::label('message', 'Message', ['class'=>'required']) !!}
            {!! Form::textarea('message', null, ['required', 'class'=>'pure-input-1', 'rows'=>4, 'placeholder'=>'Your message here.']) !!}

            <div class="action-bar">
                <a href="{{ route('home') }}" class="pure-button">Cancel</a>
                {!! Form::submit('Submit', ['class'=>'pure-button pure-button-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>
    <!-- ./content -->
@stop
