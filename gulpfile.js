const gulp = require('gulp')
const concat = require('gulp-concat')
const autoprefixer = require('gulp-autoprefixer')
const sass = require('gulp-sass')
const rename = require('gulp-rename')
const uglify = require('gulp-uglify')
const cleanCSS = require('gulp-clean-css')
const sourcemaps = require('gulp-sourcemaps')
const replace = require('gulp-replace');
const webp = require('gulp-webp');
const imagemin = require('gulp-imagemin');

const rootPaths = {
    src: 'src/',
    dist: 'dist/'
}

const paths = {
    styles: {
        watch: rootPaths.src + 'scss/**/*.scss',
        src: rootPaths.src + 'scss/base.scss',
        dist: rootPaths.dist + 'css',
        filename: 'landing'
    },
    js: {
        src: rootPaths.src + 'js/**/*.js',
        scripts: [
            rootPaths.src + 'js/theme/plugins/plugins.js',
            rootPaths.src + 'js/theme/config.js',
            rootPaths.src + 'js/theme/scripts.js',
            rootPaths.src + 'js/theme/hero.js',
            rootPaths.src + 'js/landing.js'
        ],
        dist: rootPaths.dist + 'js',
    },
    php: {
        src: rootPaths.src + '*.php',
        dist: rootPaths.dist,
        devFilename: 'landing-dev.php'
    },
    images: {
        src: rootPaths.src + 'images/*.**',
        dist: rootPaths.dist + 'images',
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
        .src(paths.js.scripts)
        .pipe(concat('bundle.js'))
        .pipe(gulp.dest(paths.js.dist))
        .pipe(uglify())
        .pipe(rename('bundle.min.js'))
        .pipe(gulp.dest(paths.js.dist))
}

const images = () => {
    return gulp
        .src(paths.images.src)
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    // {removeViewBox: true},
                    // {cleanupIDs: false}
                ]
            })
        ]))
        .pipe(gulp.dest(paths.images.dist))
}

const php = () => {
    return gulp
        .src(paths.php.src)
        .pipe(replace('$$$TEMPLATE_NAME$$$', 'Landing'))
        .pipe(gulp.dest(paths.php.dist))
}

const phpDev = () => {
    return gulp
        .src(paths.php.src)
        .pipe(replace('$$$TEMPLATE_NAME$$$', 'Landing-Dev'))
        .pipe(rename(paths.php.devFilename))
        .pipe(gulp.dest(paths.php.dist))
}

const watch = () => {
    gulp.watch(paths.images.src, images);
    gulp.watch(paths.styles.watch, css);
    gulp.watch(paths.php.src, phpDev);
    gulp.watch(paths.js.src, js);
}

const dev = gulp.parallel(css, js, phpDev, images, watch)
const deploy = gulp.parallel(css, js, php, images)

exports.default = dev;
exports.deploy = deploy;