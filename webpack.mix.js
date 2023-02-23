const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');


mix.styles([
    'public/plugins/bootstrap/dist/css/bootstrap.min.css',
    /*'public/dist/css/theme.min.css',*/
    'public/plugins/perfect-scrollbar/css/perfect-scrollbar.css',
    'public/plugins/select2/dist/css/select2.min.css',
    'public/plugins/image-uploader/image-uploader.min.css',
    'public/plugins/summernote/dist/summernote-bs4.css',
    'public/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
    'public/plugins/mohithg-switchery/dist/switchery.min.css',
    'public/plugins/DataTables/datatables.min.css',
    'public/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css'
], 'public/all.css');

mix.scripts([
    'public/src/js/vendor/modernizr-2.8.3.min.js',
    'public/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js',
    'public/plugins/screenfull/dist/screenfull.js',
    'public/plugins/select2/dist/js/select2.min.js',
    'public/plugins/image-uploader/image-uploader.min.js',
    'public/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
    'public/plugins/mohithg-switchery/dist/switchery.min.js',
    'public/plugins/summernote/dist/summernote-bs4.min.js',
    'public/plugins/jquery.repeater/jquery.repeater.min.js',
    'public/plugins/DataTables/datatables.min.js',
    'public/plugins/moment/moment.js',
    'public/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js',
    'public/plugins/datedropper/datedropper.min.js'
], 'public/all.js');

