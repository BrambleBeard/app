@extends('_layouts/default')

@section('content')
<section class="section">
    <div class="container container-narrow">

        <h2 class="title is-3">{{ $title }}</h2>

        <div class="main-content">
            <div class="box">
                @include('_includes/generatePasswordForm')
            </div>
        </div>
    </div>
</section>
@stop
