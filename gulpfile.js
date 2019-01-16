const gulp = require('gulp')
const concat = require('gulp-concat')
const autoprefixer = require('gulp-autoprefixer')
const sass = require('gulp-sass')
const rename = require('gulp-rename')
const uglify = require('gulp-uglify')
var cleanCSS = require('gulp-clean-css')
var sourcemaps = require('gulp-sourcemaps')

const rootPaths = {
    src: 'src/',
    dist: 'dist/'
}

const paths = {
    styles: {
        src: rootPaths.src + 'scss/**/*.scss',
        dist: rootPaths.dist + 'css',
        filename: 'landing'
    },
    js: {

    },
    php: {
        src: rootPaths.src + '*.php',
        dist: rootPaths.dist,
    }
}

const css = () => {
    return gulp
        .src(paths.styles.src)
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(sourcemaps.init())
        .pipe(cleanCSS({debug: true}))
        .pipe(concat(paths.styles.filename + '.min.css'))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(paths.styles.dist))
}

const js = () => {
    return Promise.resolve('the value is ignored')
}

const php = () => {
    return gulp
        .src(paths.php.src)
        .pipe(gulp.dest(paths.php.dist))
}

css.watch = () => {
    gulp.watch(paths.styles.src, css);
}

js.watch = () => {
    // WATCH SCRIPT 
}

const dev = gulp.parallel(css, js, php)
const deploy = gulp.parallel(css, js, php)

exports.default = dev;
exports.deploy = deploy;