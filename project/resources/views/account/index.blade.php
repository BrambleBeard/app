@extends('_layouts/default')

@section('content')
<section class="section">
    <div class="container container-medium">

        <h2 class="title is-3">{{ $title }}</h2>

        <div class="main-content">
            <div class="columns">
                <div class="column">
                    <div class="box">
                    <h3 class="title is-4">User Detail</h3>
                    {!! Form::open( ['route' => 'storeAccount', 'class' => 'accountForm', 'novalidate'] ) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                                <button type="submit" name="submit" class="button is-primary"><i class="fa fa-check"></i>Save</button>
                                <a href="/account" class="button is-link"></i>Cancel</a>
                            </div>
                        </div>
                        <!-- /.field -->
                    {!! Form::close() !!}
                    <!-- /.accountForm -->
                </div>
                <!--/.box-->
                </div>
                <!--/.column-->
                
                <div class="column">
                <div class="box">
                    <h3 class="title is-4">Credentials</h3>
                    {!! Form::open( ['route' => 'storeAccount', 'class' => 'resetForm', 'novalidate'] ) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <div class="field">
                            <div class="control">
                                {!! Form::label('old-password', 'Old Password', ['class'=>'label required']) !!}
                                {!! Form::password('old-password', ['required', 'class'=>'input', 'placeholder'=>'old password']) !!}
                            </div>
                        </div>
                        <!-- /.field -->
                        
                        <div class="field">
                            <div class="control">
                                {!! Form::label('new-password', 'New Password', ['class'=>'label required']) !!}
                                {!! Form::password('new-password', ['required', 'class'=>'input', 'placeholder'=>'new password']) !!}
                            </div>
                        </div>
                        <!-- /.field -->
                        
                        <div class="field">
                            <div class="control">
                                {!! Form::label('confirm-password', 'Confirm Password', ['class'=>'label required']) !!}
                                {!! Form::password('confirm-password', ['required', 'class'=>'input', 'placeholder'=>'confirm-password']) !!}
                            </div>
                        </div>
                        <!-- /.field -->

                        <div class="field">
                            <div class="control">
                                <button type="submit" name="submit" class="button is-primary"><i class="fa fa-check"></i>Update</button>
                                <a href="/account" class="button is-link"></i>Cancel</a>
                            </div>
                        </div>
                        <!-- /.field -->
                    {!! Form::close() !!}
                    <!-- /.resetForm -->
                </div>
                <!--/.box-->
                </div>
                <!--/.column-->
            </div>
            <!--/.columns-->
        </div>
        <!--/.main-content-->
    </div>
</section>
@stop
