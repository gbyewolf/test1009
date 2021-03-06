const {
    src,
    dest,
    series,
    parallel,
    watch
} = require('gulp');

// const babel = require('gulp-babel');



// 第一個任務


function p01(cb) {
    console.log('任務一');
    cb();
}


function p02(cb) {
    console.log('任務二');
    cb();
}

exports.one = p01; // exports 輸出指令 do 
exports.two = p02; // exports 輸出指令 do 


exports.all = series(p01, p02); //依序執行
exports.all2 = parallel(p01, p02); //並行

// 搬家任務
exports.move = function movefile() {
    return src('index.html')
        .pipe(dest('app/'))
}

// 合併檔案任務

// const concat = require('gulp-concat');
// const cleanCSS = require('gulp-clean-css');
// const rename = require("gulp-rename");

exports.concatCSS = function concatcss() {
    return src(['css/*.*', '!css/scripts.js'])
        .pipe(concat('all.css'))
        .pipe(cleanCSS())
        .pipe(rename(function (path) {
            path.basename += "-min";
            path.extname = ".css";
        }))
        .pipe(dest('app/'))
}

// function minicss() {
//     return src('app/*.css')
//     .pipe(cleanCSS({compatibility: 'ie8'}))
//     .pipe(dest('app/mini'));
// }

//exports.doall = series(concatcss , minicss);


//排除 用!*.js   排除單個檔案
//多個檔案 ['a1.css' , 'a2.css'] 
// https://www.itread01.com/content/1546834502.html
// npm i gulp-rename --save-dev
// 壓縮css 
// https://www.npmjs.com/package/gulp-clean-css

exports.name = function Rename() {
    return src('app/all.css')
        .pipe(rename(function (path) {
            path.basename += "aa";
            path.extname = ".css";
        })).pipe(dest('app/'))
}


//gulp sass
// const sass = require('gulp-sass');
// const autoprefixer = require('gulp-autoprefixer');

function styleSass() {
    return src('./sass/*.scss') //input路徑
        .pipe(sass({
            outputStyle: "compressed" //壓縮css
        }).on('error', sass.logError))
        //.pipe(autoprefixer())
        // .pipe(rename(function (path) {
        //     path.basename += "-prefix";
        //     path.extname = ".css";
        //   })) //改名
        .pipe(dest('./app/css/')) //output路徑
}

// html 樣版
// const fileinclude = require('gulp-file-include');


function htmlTemplate() {
    return src('./*.html') //input
        .pipe(fileinclude({
            prefix: '@@',
            basepath: '@file'
        })).pipe(dest('./app/')) //output
}



//監看檔案 -> 輸出

exports.watch = function watchfile() {
    watch('./sass/*.scss', styleSass); // 執行function
    watch(['./*.html', './**/*.html', '!app/*.html'], htmlTemplate) // 執行function
}
// 瀏覽器同步

// const prefixer = require('gulp-autoprefixer');
// const autoprefixer = require('autoprefixer');

exports.addCss = cb => {
    src('./sass/pre.scss')
        .pipe(autoprefixer({
            cascade: false
        }))
        .pipe(dest('dist'));
    cb();
};

// var postcss = require('gulp-postcss');

exports.toCss = cb => {
    src('./pre.css')
        .pipe(postcss())
        .pipe(dest('./dest'));
    cb();
};

exports.final = (cb) => {
    return src('./pre.css')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer()])) // 將編譯完成的 CSS 做 PostCSS 處理
        .pipe(dest('./dist'));

};

exports.final2 = () => {
    return src('./sass/pre.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer()])) // 將編譯完成的 CSS 做 PostCSS 處理
        .pipe(dest('./public/css'));
};

exports.prefix = (cb) => {
    src('./pre.css')
        .pipe(prefixer({
            cascade: false
        }))
        .pipe(dest('./public/css'));
    cb();
};

// watch(['./*.html', './**/*.html', '!app/*.html'], htmlTemplate) // 執行function


// const browserSync = require('browser-sync');
// const reload = browserSync.reload;

exports.default = function browser() {
    browserSync.init({
        server: {
            baseDir: "./app",
            index: 'index.html'
        },
        //port: 3200
    });
    watch('./sass/*.scss', styleSass).on('change', reload)
    watch(['./*.html', './**/*.html', '!app/*.html'], htmlTemplate).on('change', reload)
}


//  prefix -> 改名 -> 壓縮css 
// exports.packagecss = () => (
//     src('app/css/*.css')
//         .pipe(autoprefixer())
//          .pipe(rename(function (path) {
//             path.basename += "_prefix";
//             path.extname = ".css";
//           })) //改名
//         .pipe(cleanCSS({compatibility: 'ie8'})) 
//         .pipe(dest('app/css/prefix'))
// );



function prefix() {
    return src('app/css/*.css')
        .pipe(autoprefixer())
        .pipe(rename(function (path) {
            path.basename += "_prefix";
            path.extname = ".css";
        })) //改名
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(dest('app/css/prefix'))
}


//圖片壓縮

// const imagemin = require('gulp-imagemin');
// exports.img = () => (
//     src('images/*')
//         .pipe(imagemin())
//         .pipe(dest('app/images'))
// );
function img() {
    return src('images/*')
        .pipe(imagemin())
        .pipe(dest('app/images'))
}

// const uglify = require('gulp-uglify');

function babeles5() {
    return src('js/*.js')
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(dest('app/js'))
}
//清除舊有檔案
var clean = require('gulp-clean');

function clear() {
    return src('app', { read: false })
        .pipe(clean({ force: true }));
}


//打包
exports.packageAll = series(clear, styleSass, parallel(htmlTemplate, prefix, img, babeles5));

// var gutil = require('gulp-util');
var ftp = require('vinyl-ftp');

// gulp.task('deploy', function () {
exports.goftp = cb => {
    var conn = ftp.create({
        host: '140.115.236.71',
        user: '!ted101@#',
        password: '@123???#',
        parallel: 10,
    });

    var globs = [
        'src/**',
        'css/**',
        'js/**',
        'fonts/**',
        'index.html'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    src('js/**', { base: '.', buffer: false })
    //.pipe(conn.newer('/public_html')) // only upload newer files
    // .pipe(conn.dest('/05.專題程式/TED101_G3/'))
    // .pipe(conn.clean('/05.專題程式/TED101_G3/', '.', { base: 'public' }));
    // .pipe(conn.clean('/05.專題程式/TED101_G3/', '/test/'));
    cb();
};