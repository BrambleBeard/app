@extends('_layouts/default')

@section('content')

<section class="hero is-fullheight has-landing-page-image" id="splash-hero">
    <div class="hero-head has-text-centered">
        <h2 class="hero-title">{{ Config::get('app.app_title') }}</h2>
    </div>
    <!--/.hero-head-->

    <div class="content">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-7">
                        @include('_includes/mainInputForm', ['rteId' => $rteId])
                        @include('_includes/rteJs', ['rteId' => $rteId])
                    </div>
                    <div class="column is-5">
                        <h2 class="title is-3">{{ Config::get('app.app_tagline') }}</h2>
                        <p>Enter your secret information &mdash; passwords, connection strings, secret messages, etc. and share a unique expiring link.  This will keep your private information out of your saved and logged email.</p>
                        <p><a href="/auth" class="button"><i class="fa fa-pencil"></i>Sign-in or Sign-up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.hero-body-->
    </div>
    <!-- /.content -->

</section>
<!--/#splash-hero-->

<section class="hero is-default is-medium" id="why-use">
    <div class="hero-body">
        <div class="container container-narrow">
            <h1 class="title">Why use {{ Config::get('app.app_title') }}?</h1>
            <p>Lorem ipsum dolor sit amet, <a href="">consectetur adipisicing elit</a>. Eaque delectus recusandae error distinctio ratione provident, eligendi. Voluptates quo distinctio perspiciatis delectus nesciunt sequi aspernatur, voluptatum dolorem quidem eaque, consequuntur et.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque delectus recusandae error distinctio ratione provident, eligendi. Voluptates quo distinctio perspiciatis delectus nesciunt sequi aspernatur, voluptatum dolorem quidem eaque, consequuntur et.
            </p>
        </div>
    </div>
</section>
<!--/#why-use-->

<section class="hero is-primary is-medium" id="feature-summary">
    <div class="hero-body">
        <div class="container container-narrow">
            <h1 class="title">Feature Summary</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque delectus recusandae error distinctio ratione provident, eligendi. Voluptates quo distinctio perspiciatis delectus nesciunt sequi aspernatur, voluptatum dolorem quidem eaque, consequuntur et.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque delectus recusandae error distinctio ratione provident, eligendi. Voluptates quo distinctio perspiciatis delectus nesciunt sequi aspernatur, voluptatum dolorem quidem eaque, consequuntur et.
            </p>
        </div>
    </div>
</section>
<!--/#feature-summary-->
@stop
