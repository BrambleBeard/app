@extends('_layouts/default')

@section('content')
<section class="section">
    <div class="container container-narrow">

        <h2 class="title is-3">{{ $title }}</h2>

        <div class="main-content">
            <table class="table is-striped">
                <thead>
                    <tr>
                        <th>Secret</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Three</td>
                        <td>Four</td>
                    </tr>
                    <tr>
                        <td>Five</td>
                        <td>Six</td>
                    </tr>
                    <tr>
                        <td>Seven</td>
                        <td>Eight</td>
                    </tr>
                    <tr>
                        <td>Nine</td>
                        <td>Ten</td>
                    </tr>
                    <tr>
                        <td>Eleven</td>
                        <td>Twelve</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@stop
