const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// SCSSをCSSにコンパイル
function compileSass() {
  return gulp.src('./assets/scss/**/*.scss')
    .pipe(sass({
      outputStyle: 'expanded',
      sourceComments: false
    }).on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
}

// ファイル監視
function watch() {
  gulp.watch('./assets/scss/**/*.scss', compileSass);
}

// タスクの登録
exports.build = compileSass;
exports.watch = watch; 