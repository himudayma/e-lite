var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var del = require('del');
var swPrecache = require('sw-precache');

gulp.task('sass', function () {
  return gulp
    .src('./css/*')
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css/'))
    .pipe(minifyCss({}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./css/'));
});

gulp.task('generate-sw', function() {
  var swOptions = {
    staticFileGlobs: [
      './',
      './index.html',
      './images/icons/*.{png,svg,gif,jpg}',
      './user-imgs-caste/*.{png,svg,gif,jpg}',
      './user-imgs-domicile/*.{png,svg,gif,jpg}',
      './js/*.js',
      './fonts/*.{eot,svg,ttf,woff,woff2}',
      './css/*.css'
    ],
    stripPrefix: '.',
    runtimeCaching: [{
      urlPattern: /^https:\/\/e-lite.000webhostapp\.com/,
      handler: 'networkFirst',
      options: {
        cache: {
          name: 'elite-v3'
        }
      }
    }]
  };
  return swPrecache.write('./service-worker.js', swOptions);
});

gulp.task('serve', ['generate-sw'], function() {
  gulp.watch('./css/*.css', ['css']);
  browserSync({
    notify: false,
    logPrefix: 'elitePWA',
    server: ['.'],
    open: false
  });
  gulp.watch([
    './*.html',
    './*.php',
    './js/*.js',
    './css/*.css',
    '!./service-worker.js',
    '!./gulpfile.js'
  ], ['generate-sw'], browserSync.reload);
});

gulp.task('default', ['serve']);
