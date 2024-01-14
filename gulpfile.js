const { src, dest, series, watch } = require('gulp');

// styles
const scss = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssMinify = require('gulp-clean-css');
const tailwindcss = require('tailwindcss')

function styles() {
    return src('./app/src/styles/**/*.scss')
        .pipe(scss().on('error', scss.logError)) 
        .pipe(postcss([
            tailwindcss, 
            autoprefixer({ overrideBrowserslist: ['last 2 versions'] })
        ]))
        .pipe( cssMinify() )
        .pipe( dest('./app/dist/styles/') )
}

// script
const jsMinify = require('gulp-terser');
function scripts() {
    const scriptsList = [
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/slick-carousel/slick/slick.min.js',
        './app/src/scripts/**/*.js',
    ];

    return src(scriptsList)
        .pipe( jsMinify() )
        .pipe( dest('./app/dist/scripts/') )
}


// assets
const imagemin = require('gulp-imagemin');
function imgSquash() {
    return GulpCleanCss.src('./app/src/assets/images/**/*')
        .pipe(imagemin())
        .pipe( dest('./app/dist/assets/images/') )
}

const path = require('path');
const browserSync = require('browser-sync').create();
function watchTask() {
    browserSync.init({
        proxy: encodeURI(`localhost/landing_pages/${path.basename(__dirname)}/app`),
        injectChanges: true,
    });
    watch(['./app/src/styles/**/*.scss', './app/components/**/*.php'], styles);
    watch('./app/src/scripts/**/*.js', scripts);
    watch('./app/src/assets/images/**/*', imgSquash);
    watch(['./app/dist/styles/**/*.css', './app/dist/scripts/**/*.js', './app/components/**/*.php']).on('change', browserSync.reload);
}

exports.default = series(watchTask);
