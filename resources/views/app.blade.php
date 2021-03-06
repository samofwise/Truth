<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="/Truth{{ elixir("css/all.css") }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="/Truth{{ elixir("js/all.js") }}"></script>
</head>
<body>
<div class="ui segment">
    <header class="ui secondary pointing menu">
        <a class="active item" href="{{action('HomeController@index')}}">
            Truth.
        </a>
        <a class="item" href="#">
            About.
        </a>
        <a class="item" href="{{action('PostsController@index')}}">
            Posts. (A)
        </a>
        <a class="item" href="{{action('UsersController@index')}}">
            People. (A)
        </a>
        <a class="item" href="#">
            Tags. (A)
        </a>
        <a class="item" href="#">
            Comments. (A)
        </a>

        @if(!Auth::check())
            <div class="borderless right menu open">
                <div class="ui dropdown item borderless">
                Login<i class="ui dropdown icon"></i>

                    <div class="borderless menu">
                        <div class="plain item ">
                        <h4 class="ui header">Viewers</h4>
                        <div class="ui primary button">Facebook</div>
                        <div class="ui primary button">Twitter</div>
                            <div class="ui divider"></div>
                        {!! Form::open(['method' => 'post', 'url' => url('auth/login')]) !!}
                        <div class="ui form">
                            <h4 class="ui header">Contributors</h4>
                            <div class="field">
                                {!! Form::text('email', null, ['placeholder' => 'Email']) !!}
                            </div>
                            <div class="field">
                                {!! Form::password('password', ['placeholder' => 'Password']) !!}
                            </div>
                            {!! Form::submit('Login', ['class' => 'ui fluid submit button']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
        @else
            <div class="right item">
                Hey {{Auth::user()->displayName}}
                <a href="{{url('auth/logout')}}" class="icon item"><i class="red power icon"></i></a>
            </div>

        @endif

    </header>
</div>

<div class="ui segment">
    @yield('content')
</div>

<!-- Scripts-->


<script>

    $('.ui.dropdown').dropdown(
            {
                action: 'nothing'
            });
</script>

</body>
</html>
