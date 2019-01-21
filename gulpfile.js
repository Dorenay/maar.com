const gulp = require('gulp');
const livereload = require('gulp-livereload');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
let cleanCSS = require('gulp-clean-css');
var pump = require('pump');
let theme_way = 'wp-content/themes/main-theme/';

// gulp.task('sass', function () {
//   gulp.src(`${theme_way}src/sass/main.sass`)
//     .pipe(sourcemaps.init())
//     .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
//     .pipe(autoprefixer('last 2 version'))
//     .pipe(cleanCSS({compatibility: 'ie8'}))
//     .pipe(sourcemaps.write('./'))
//     .pipe(gulp.dest(`${theme_way}css`));
// });

// gulp.task('uglify', function (cb) {
//   pump([
//         gulp.src(`${theme_way}src/js/**/*.js`),
//         uglify(),
//         gulp.dest(`${theme_way}js`)
//     ],
//     cb
//   );
// });

// gulp.task('watch', ['sass', 'uglify'], function(){
//   livereload.listen();

//   gulp.watch(`${theme_way}src/sass/**/*.sass`, ['sass']);
//   gulp.watch(`${theme_way}src/js/*.js`, ['uglify']);
//   gulp.watch([`${theme_way}css/application.css`, `${theme_way}/*.js`], function (files){
//     livereload.changed(files)
//   });
// });

// gulp.task('default', ['sass', 'uglify']);



gulp.task('sass', function () {
  gulp.src(`${theme_way}src/scss/application.scss`)
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(`${theme_way}css`));
});

gulp.task('uglify', function (cb) {
  pump([
        gulp.src(`${theme_way}src/js/*.js`),
        uglify(),
        gulp.dest(`${theme_way}/js`)
    ],
    cb
  );
});

gulp.task('watch', ['sass', 'uglify'], function(){
  livereload.listen();

  gulp.watch(`${theme_way}src/scss/**/*.scss`, ['sass']);
  gulp.watch(`${theme_way}src/js/*.js`, ['uglify']);
  gulp.watch([`${theme_way}dist/application.css`, `${theme_way}dist/*.js`], function (files){
    livereload.changed(files)
  });
});

gulp.task('default', ['sass', 'uglify']);
