const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
/*
elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
*/

elixir(function(mix) {
    mix.less('default_skin/less/theme.less','public/theme/assets/skin/default_skin/css/theme.css','resources/theme/assets/skin');
    mix.less('admin-forms/less/admin-forms.less', 'public/theme/assets/admin-tools/css/admin-forms.css','resources/theme/assets/admin-tools');
    mix.copy('resources/theme/vendor','public/theme/vendor');
    mix.copy('resources/theme/assets/js/utility','public/theme/assets/js/utility');
    mix.copy('resources/theme/assets/js/demo','public/theme/assets/js/demo');
    mix.copy('resources/theme/assets/js/main.js','public/theme/assets/js/main.js');
    mix.copy('resources/theme/assets/fonts','public/theme/assets/fonts');
    mix.copy('resources/theme/assets/img','public/theme/assets/img');
    mix.copy('resources/assets/img','public/assets/img');
    mix.copy('resources/theme/assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js','public/theme/assets/admin-tools/admin-forms/js/jquery-ui-datepicker.min.js');
    mix.copy('resources/theme/assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js','public/theme/assets/admin-tools/admin-forms/js/jquery-ui-monthpicker.min.js');

    /*

     mix.copy('resources/assets/js/demo','public/js/demo');
     ;
     ;*/
});



