const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');

// Paths
const paths = {
    scss: './assets/scss/**/*.scss',
    css: './assets/css'
};

// Compile SCSS
function styles() {
    return gulp.src(paths.scss)
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(gulp.dest(paths.css));
}

// Watch task
function watchFiles() {
    gulp.watch(paths.scss, styles);
}

exports.styles = styles;
exports.watch = watchFiles;
exports.defaults = gulp.series(styles, watchFiles);