const mix = require('laravel-mix');
const {config, browserSyncConfig} = require('./env');

mix.js(config.src_path + '/js/app.js', 'js')
    .sass(config.src_path + '/sass/app.scss', 'css')
    .setPublicPath(config.public_path)
    .copyDirectory(config.src_path + '/images', config.public_path + '/images');

if (config.mode == 'local') {
    mix.browserSync(browserSyncConfig);
}