const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const sourcemaps = require('gulp-sourcemaps');

const isProduction = process.env.NODE_ENV === 'production';

// Paths
const paths = {
    scss: './assets/scss/**/*.scss',
    css: './assets/css'
};

// Compile SCSS
function styles() {
    const plugins = [
        autoprefixer(),
        ...(isProduction ? [cssnano()] : [])
    ];

    return gulp.src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss(plugins))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(paths.css));
}

// Watch task
function watchFiles() {
    gulp.watch(paths.scss, styles);
}

exports.styles = styles;
exports.watch = watchFiles;
exports.default = gulp.series(styles, watchFiles);
