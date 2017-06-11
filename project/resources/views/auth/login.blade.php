@php($page_active = 'auth')
@extends('_layouts/splash')

@section('content')

<section class="hero is-dark is-fullheight">
    <div class="hero-head has-text-centered">
        <h2 class="hero-title">{{ Config::get('app.app_title') }}</h2>
    </div>
    <div class="hero-body">
        <div class="container container-narrow">
            @if (count($errors) > 0)
            <div class="notification is-warning">
                <h3><strong>Whoops!</strong> There were some problems with your input.</h3>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <form class="form box" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="field">
                    <div class="control">
                        {!! Form::label('email', 'Email', ['class'=>'label required']) !!}
                        {!! Form::email('email', null, ['required', 'class'=>'input', 'placeholder'=>'email@domain.com']) !!}
                    </div>
                </div>
                <!-- /.field -->

                <div class="field">
                    <div class="control">
                        {!! Form::label('password', 'Password', ['class'=>'label required']) !!}
                        {!! Form::password('password', ['required', 'class'=>'input', 'placeholder'=>'password']) !!}
                    </div>
                </div>
                <!-- /.field -->

                <div class="field">
                    <div class="control">
                        {!! Form::label('checkbox', 'Remember Me', ['class'=>'label']) !!}
                        {!! Form::checkbox('checkbox', null) !!}
                    </div>
                </div>
                <!-- /.field -->

                <div class="field">
                    <div class="control">
                    <button type="submit" class="button is-primary">Login</button>
                    <a href="{{ route('reset') }}" class="button is-default">Forgot</a>
                    <a href="{{ route('home') }}" class="button is-link">Cancel</a>
                    </div>
                </div>
                <!-- /.field -->
            </form>
        </div>
    </div>
</section>
@endsection
