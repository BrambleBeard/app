@extends('_layouts/default')

@section('content')
<section class="section">
    <div class="container container-narrow">
        {!! Form::open( ['route' => 'storeContact', 'class' => 'box'] ) !!}

        <div class="field">
            <div class="control">
                {!! Form::label('first', 'First Name', ['class'=>'label required']) !!}
                {!! Form::text('first', null, ['required', 'class'=>'input', 'placeholder'=>'First']) !!}
            </div>
        </div>
        <!-- /.field -->

        <div class="field">
            <div class="control">
                {!! Form::label('last', 'Last Name', ['class'=>'label required']) !!}
                {!! Form::text('last', null, ['required', 'class'=>'input', 'placeholder'=>'Last']) !!}
            </div>
        </div>
        <!-- /.field -->

        <div class="field">
            <div class="control">
                {!! Form::label('email', 'Email', ['class'=>'label required']) !!}
                {!! Form::email('email', null, ['required', 'class'=>'input', 'placeholder'=>'email@domain.com']) !!}
            </div>
        </div>
        <!-- /.field -->

        <div class="field">
            <div class="control">
                {!! Form::label('subject', 'Subject', ['class'=>'label required']) !!}
                <span class="select">
                {!! Form::select('subject', [
                    'General feedback'=>'General feedback',
                    'Issue or problem'=>'Issue or problem',
                    'Enhancement request'=>'Enhancement request',
                ], null, ['required', 'class'=>'']) !!}
                </span>
            </div>
        </div>
        <!-- /.field -->

        <div class="field">
            <div class="control">
                {!! Form::label('message', 'Message', ['class'=>'label required']) !!}
                {!! Form::textarea('message', null, ['required', 'class'=>'textarea', 'rows'=>4, 'placeholder'=>'Your message here.']) !!}
            </div>
        </div>
        <!-- /.field -->

        <div class="field">
            <div class="control">
                {!! Form::submit('Submit', ['class'=>'button is-primary']) !!}
                <a href="/" class="button is-default">Cancel</a>
            </div>
        </div>
        <!-- /.field -->

        {!! Form::close() !!}
    </div>
</section>
@stop
