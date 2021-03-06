
{!! Form::open( ['route' => 'storeSecret', 'class' => 'createForm', 'novalidate'] ) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="field">
        <div class="control">
            {!! Form::text('title', null, ['class'=>'input', 'placeholder'=>'Optionally add a title']) !!}
        </div>
    </div>
    <!-- /.field -->

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
            <!-- Todo: Add logic here if user is authenticated or not -->
            <a href="/login" class="button is-default" title="Save Secret"><i class="fa fa-lock"></i>Save</a>
        </div>
    </div>
    <!-- /.field -->
{!! Form::close() !!}
<!-- /.createForm -->
