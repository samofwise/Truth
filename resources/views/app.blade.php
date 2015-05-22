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
</head>
<body>
<div class="ui segment">
    <header class="ui secondary pointing menu">
        <a class="active item" href="#">
            Truth.
        </a>
        <a class="item" href="#">
            About.
        </a>
        <a class="item" href="#">
            People. (A)
        </a>
        <a class="item" href="#">
            Tags. (A)
        </a>
        <a class="item" href="#">
            Comments. (A)
        </a>

        @if(!Auth::check())
        <div class="right menu open">
            <div class="ui dropdown label borderless">
                Login<i class="ui dropdown icon"></i>
                <div class="menu transition visible">
                    <div class="item borderless">
                        <h4 class="ui header">Viewers</h4>
                        <div class="ui primary button">Facebook</div>
                        <div class="ui primary button">Twitter</div>
                        <div class="divider"></div>
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
                <a href="auth/logout" class="icon item"><i class="red power icon"></i></a>
            </div>

        @endif

    </header>
</div>


@yield('content')

<!-- Scripts-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/Truth{{ elixir("js/all.js") }}"></script>

<script>
    $('.ui.dropdown').dropdown(
            {
                action: 'nothing'
            });
</script>

</body>
</html>
