/* //control
    const gulp = require('gulp');
    gulp.task('control', ()=> {
        console.log('ok!')
    })*/


const gulp = require('gulp');
const sass = require('gulp-sass');

/* sass */
gulp.task('sass', ()=> {
   return gulp.src('sass/main.scss')
        .pipe(sass({
            errLogToConsole: true,
            outputStyle: 'nested'
        }))
        .pipe(gulp.dest('css'))
})

/* watch */
gulp.task('watch', ()=>{
    gulp.watch('sass/**/*.scss', ['sass']);
    gulp.watch('sass/*.scss', ['sass']); 
})