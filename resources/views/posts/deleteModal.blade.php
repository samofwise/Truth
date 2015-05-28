<div class="ui modal">
    <i class="close icon"></i>

    <div class="header">
        Are you sure you want to delete:
    </div>
    <div class="content">
        <div id="title" class="paragraph">

        </div>
    </div>
    <div class="actions">
        {!! Form::open(['url' => 'posts', 'method'=>'delete', 'id' => 'submitForm']) !!}
        {!! Form::submit('Yes', ['class' => 'ui approve submit button']) !!}
        {!! Form::button('No', ['class' => 'ui deny button']) !!}
        {!! Form::close() !!}
    </div>
</div>


<script>
    $.fn.appendAttr = function (attrName, suffix) {
        this.attr(attrName, function (i, val) {
            return val + suffix;
        });
        return this;
    };

    $('.deleteButton').click(function () {
        var data = $(this).data();
        console.log(data);

        $('#title').text(data.title);

        $('#submitForm').appendAttr('action', '/' + data.id + '/delete');

        $('.ui.modal').modal('show');
    });

</script>
