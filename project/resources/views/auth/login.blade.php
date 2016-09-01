@php($page_active = 'auth')
@extends('_layouts/splash')

@section('content')
    <div class="header">
        <h1 class="page-title">Sign-In</h1>
    </div>
    <div class="content">
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

        <form class="form validate-form" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="control-label required">Email Address</label>
                <input type="email" class="form-control required" data-parsley-type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label class="control-label required">Password</label>
                <input type="password" class="form-control required" name="password" required>
            </div>

            <div class="form-group">
                <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember"> Remember Me
                </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <p class="subtle"><a class="btn btn-link" href="{{ route('reset') }}"><i class="fa fa-life-ring"></i>&nbsp;Did you forget your password?</a></p>
            </div>
        </form>
    </div>
    <!-- ./content -->
@endsection
