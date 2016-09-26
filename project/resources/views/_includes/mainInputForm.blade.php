
{!! Form::open( ['route' => 'storeSecret', 'class' => 'pure-form', 'novalidate'] ) !!}
    <!-- <div id="toolbar"></div> -->
    {!! Form::textarea('content', null, ['required', 'id'=>$rteId, 'class'=>'pure-input-1', 'placeholder'=>'Last']) !!}
    {!! Form::text('passcode', null, ['class'=>'pure-input-1 input-flatten', 'placeholder'=>'Use an optional password']) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="action-bar">
        <button class="pure-button"><i class="fa fa-save"></i>Save</button>
        <button class="pure-button"><i class="fa fa-envelope-o"></i>Email expiring URL</button>
        <button class="pure-button pure-button-primary"><i class="fa fa-fire"></i>Create expiring URL</button>
    </div>
{!! Form::close() !!}
<!-- /.pure-form -->
