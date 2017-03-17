var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();


gulp.task('sass', function(){
  return gulp.src('app/sass/style.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('app/css/'))
    .pipe(browserSync.reload({
      stream: true
    }))
});

gulp.task('watch',['sass'], function(){
  gulp.watch('app/sass/**/*.scss', ['sass']);
  // Other watchers
})
