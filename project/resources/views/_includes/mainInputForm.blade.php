
{!! Form::open( ['route' => 'storeSecret', 'class' => 'pure-form', 'novalidate'] ) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="field">
        <div class="control">
            {!! Form::textarea('content', null, ['required', 'id'=>$rteId, 'class'=>'textarea', 'placeholder'=>'Enter your secret here ...']) !!}
        </div>
    </div>
    <!-- /.field -->

    <div class="field">
        <div class="control">
            {!! Form::text('passcode', null, ['class'=>'input', 'placeholder'=>'Optionally, provide a password ...']) !!}
        </div>
    </div>
    <!-- /.field -->

    <div class="field">
        <div class="control">
            <button type="submit" name="submit" class="button is-primary" title="Create Disposable Secret"><i class="fa fa-check"></i>Create</button>
            <a href="auth" class="button is-default" title="Save Secret"><i class="fa fa-lock"></i>Save</a>
        </div>
    </div>
    <!-- /.field -->
{!! Form::close() !!}
<!-- /.pure-form -->
