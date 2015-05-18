@if($errors->any())
    <div class="ui error message">
        <div class="header">There were some errors</div>
    <div class="ui list">
        @foreach($error->all() as $error)
        <div class="item">
            <div class="red tag label"><i class="warning icon"></i>{{ $error }}</div>
        </div>
        @endforeach
    </div>
    </div>

@endif