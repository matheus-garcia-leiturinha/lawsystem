const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('resources/assets/js/clients.js', 'public/js')
    .copy('resources/assets/js/advocates.js', 'public/js')
    .copy('resources/assets/js/tribunais.js', 'public/js')
    .copy('resources/assets/js/varas.js', 'public/js')
    .copy('resources/assets/js/process.js', 'public/js')
    .copy('resources/assets/js/contrarios.js', 'public/js')
    .copy('resources/assets/js/pericias.js', 'public/js')
    .copy('resources/assets/js/pedidos.js', 'public/js')
    .copy('resources/assets/js/depositos.js', 'public/js')
    .copy('resources/assets/js/recolhimentos.js', 'public/js')
    .copy('resources/assets/js/datatables.js', 'public/js')
    .copy('resources/assets/js/libs/respond.min.js', 'public/js/lib')
    .copy('resources/assets/js/libs/html5shiv.min.js', 'public/js/lib')
    .copy('resources/assets/js/libs/bootstrap.min.js', 'public/js/lib')
    .copy('resources/assets/js/libs/jquery-3.2.1.min.js', 'public/lib/js')

    .copy('resources/assets/frameworks/inputmask/jquery.inputmask.bundle.js', 'public/frameworks/inputmask')
    .copy('resources/assets/frameworks/inputmask/jquery.maskMoney.min.js', 'public/frameworks/inputmask')

    .copy('resources/assets/frameworks/bootstrap-select/bootstrap-select.min.css', 'public/frameworks/bootstrap-select')
    .copy('resources/assets/frameworks/material/dataTables.material.min.css', 'public/frameworks/material')
    .copy('resources/assets/frameworks/material/material.min.css', 'public/frameworks/material')
    .copy('resources/assets/frameworks/bootstrap-select/bootstrap-select.min.js', 'public/frameworks/bootstrap-select')

   .less('resources/assets/less/app.less', 'public/css')
   .less('resources/assets/less/layout.less', 'public/css')
   .less('resources/assets/less/home.less', 'public/css')
   .less('resources/assets/less/process.less', 'public/css')
   .less('resources/assets/less/clients.less', 'public/css')
   .less('resources/assets/less/contrarios.less', 'public/css');


