var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less')

        .copy("vendor/bower_components/semantic-ui/output/build/dist/semantic.css", "public/css/vendor/semantic.css")
        .copy("vendor/bower_components/semantic-ui/output/build/dist/semantic.js", "public/js/vendor/semantic.js")
        .copy("vendor/bower_components/semantic-ui/output/css/themes", "public/css/themes")
        .styles([
            "vendor/semantic.css"

        ], "public/css/all.css", "public/css")
        .scriptsIn("public/js")
        .version([
            "css/all.css",
            "js/all.js"
        ])

    ;


});
