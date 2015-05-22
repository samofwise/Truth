<div class="ui form">
    <div class="field">
        {!! Form::label('title', 'Title') !!}
    </div>
    <div class="two fields">
        <div class="two fields">
            <div class="field">
                {!! Form::text('title') !!}
            </div>
        </div>
    </div>
    <div class="field">
        {!! Form::label('body', 'Body') !!}
    </div>
    <div class="field">
        {!! Form::textarea('body') !!}
    </div>
    {!! Form::submit($submitButtonText, ['class' => 'ui submit button']) !!}
</div>