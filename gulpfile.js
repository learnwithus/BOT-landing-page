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
        src: rootPaths.src + 'js/**/*.js',
        dist: rootPaths.dist + 'js',
    },
    php: {
        src: rootPaths.src + '*.php',
        dist: rootPaths.dist,
        devFilename: 'landing-dev.php'
    }
}

const css = () => {
    return gulp
        .src(paths.styles.src)
        .pipe(sass({
            includePaths: ['./node_modules']
        }))
        .on("error", sass.logError)
        .pipe(sourcemaps.init())
        .pipe(cleanCSS({ debug: true }))
        .pipe(concat(paths.styles.filename + '.min.css'))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(paths.styles.dist))
}

const js = () => {
    return gulp
        .src(paths.js.src)
        .pipe(gulp.dest(paths.js.dist))
}

const php = () => {
    return gulp
        .src(paths.php.src)
        .pipe(gulp.dest(paths.php.dist))
}

const phpDev = () => {
    return gulp
        .src(paths.php.src)
        .pipe(rename(paths.php.devFilename))
        .pipe(gulp.dest(paths.php.dist))
}

const watch = () => {
    gulp.watch(paths.styles.src, css);
    gulp.watch(paths.php.src, phpDev);
    gulp.watch(paths.js.src, js);
}

const dev = gulp.parallel(css, js, phpDev, watch)
const deploy = gulp.parallel(css, js, php)

exports.default = dev;
exports.deploy = deploy;