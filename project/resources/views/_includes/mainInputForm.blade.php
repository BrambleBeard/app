
{!! Form::open( ['route' => 'storeSecret', 'class' => 'pure-form'] ) !!}
    <div id="toolbar"></div>
    {!! Form::textarea('content', null, ['required', 'id'=>$rteId, 'placeholder'=>'Last']) !!}
    {!! Form::text('passcode', null, ['required', 'class'=>'pure-input-1 input-flatten', 'placeholder'=>'Use an optional password']) !!}
    <div class="action-bar">
        <button class="pure-button"><i class="fa fa-save"></i>Save</button>
        <button class="pure-button"><i class="fa fa-envelope-o"></i>Email expiring URL</button>
        <button class="pure-button pure-button-primary"><i class="fa fa-fire"></i>Create expiring URL</button>
    </div>
{!! Form::close() !!}
<!-- /.pure-form -->
