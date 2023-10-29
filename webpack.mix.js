const mix = require('laravel-mix');
const path = require('path');
const tailwindcss = require('tailwindcss')

mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

mix.webpackConfig({
    watchOptions: {
        ignored: [
            path.posix.resolve(__dirname, './node_modules'),
            path.posix.resolve(__dirname, './css'),
            path.posix.resolve(__dirname, './js')
        ]
    }
});

mix.js('resources/js/app.js', 'js');

mix.less('resources/css/app.less', 'css')
    .less('resources/css/editor-style.less', 'css')
    .options({
        postCss: [
            tailwindcss('tailwind.config.js'),
        ]
    });

if (mix.inProduction()) {
    mix.version();
} else {
    mix.options({manifest: false});
}

mix.disableNotifications();

mix.browserSync({
    proxy: "localhost:8080",
    files: [
        `./**/*.php`,
        `./**/*.js`,
        `./**/*.css`,
    ]
});