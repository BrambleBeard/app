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