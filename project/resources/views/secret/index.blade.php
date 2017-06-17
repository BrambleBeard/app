@extends('_layouts/default')

@section('content')
<section class="section">
    <div class="container container-narrow">

        <h2 class="title is-2">My Secrets</h2>
        <div class="main-content">

        @if($secrets)
            @include('secret.partials.table')
        @else
        <h5>No Secrets</h5>
        @endif
        </div>
        <!-- /.main-content -->
    </div>
    <!-- /.container -->
</section>
@stop
