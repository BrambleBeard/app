@extends('_layouts/splash')

@section('content')
    <div class="header">
        <h1>{{ Config::get('app.site_title') }}</h1>
        <h2>{{ Config::get('app.tagline') }}</h2>
    </div>
    <div class="content">
        @include('_includes/mainInputForm', ['rteId' => $rteId])
        @include('_includes/rteJs', ['rteId' => $rteId])
    </div>
    <!-- /.content -->
@stop
