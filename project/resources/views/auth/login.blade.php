@php($page_active = 'auth')
@extends('_layouts/splash')

@section('content')
    <div class="header">
        <h1>{{ Config::get('app.site_title') }}</h1>
        <h2>Sign-In</h2>
    </div>
    <div class="content content-narrow">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="form validate-form pure-form pure-form-stacked" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <label class="control-label required">Email Address</label>
            <input type="email" class="pure-input-1 required" data-parsley-type="email" name="email" value="{{ old('email') }}" placeholder="email@domain.com" required>

            <label class="control-label required">Password</label>
            <input type="password" class="pure-input-1 required" name="password" required>

            <label>
                <input type="checkbox" name="remember"> Remember Me
            </label>

            <div class="action-bar">
                <a href="{{ route('home') }}" class="pure-button">Cancel</a>
                <a href="{{ route('reset') }}" class="pure-button">Forgot</a>
                <button type="submit" class="pure-button pure-button-primary">Login</button>
            </div>
        </form>
    </div>
    <!-- ./content -->
@endsection
