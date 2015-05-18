<div class="two fields">
    <div class="two fields">
        <div class="field">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title') !!}
        </div>
    </div>
</div>
<div class="field">
    {!! Form::label('body', 'Body') !!}
    {!! Form::textarea('body') !!}
</div>
{!! Form::submit($submitButton, ['class' => 'ui submit button']) !!}