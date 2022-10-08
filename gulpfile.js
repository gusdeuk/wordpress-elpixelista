const fs = require("fs");

const gulp = require("gulp");
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const autoprefixer = require("gulp-autoprefixer");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const uglify = require("gulp-uglify");
const concat = require("gulp-concat");

/*
 * declare settings
 */
let manifest = {
  jsLibs: [
    "./templates-assets/js-plugins/jquery/jquery-2.2.4.min.js",
    "./templates-assets/bootstrap/js/bootstrap.js",
    "./templates-assets/js-plugins/smoothscroll/smooth-scroll.polyfills.js",
    "./templates-assets/js-plugins/gumshoe/gumshoe.js",
    "./templates-assets/js-plugins/waypoints/noframework.waypoints.js",
    "./templates-assets/js-plugins/animated-modal/animatedModal.js",
    "./templates-assets/js-plugins/owl-carousel/owl.carousel.js",
    "./templates-assets/js-plugins/modernizr/modernizr-custom.js",
    "./templates-assets/js-plugins/modernizr/detectizr.js",
    "./templates-assets/js-plugins/matchheight/jquery.matchHeight.js",
    "./templates-assets/js-plugins/mixitup/mixitup.js",
    "./templates-assets/js/x-main.js",
  ],
  cssStyles: [
    "./templates-assets/scss/_x-main-base.scss",
    "./templates-assets/scss/_x-main-plugins.scss",
    "./templates-assets/sass/global-master.scss",
  ],
};

/*
 * Build MAIN task ('make-libs', 'make-styles')
 */
gulp.task("build", ["make-libs", "make-styles"], function () {
  console.log("Jobs Done!");
  return;
});

/*
 * Watch MAIN task >> do ['build']
 */
gulp.task("watch-main-styles-and-libs", ["build"], () => {
  // watch changes in manifest.libs > execute task [make-libs]
  gulp.watch(manifest.jsLibs, ["make-libs"]);

  // watch changes in ALL scss files > execute task [make-styles]
  // gulp.watch('./**/*.scss', ['make-styles'])

  // watch changes on specific css files > execute task [make-styles]
  gulp.watch(manifest.cssStyles, ["make-styles"]);
});

gulp.task("watch-view-scss-then-make-view-styles", [], () => {
  // watch changes in ALL view scss files > execute task [make-view-styles]
  gulp.watch("./templates-custom/**/*.scss", ["make-view-styles"]);
});

gulp.task("watch-view-js-then-make-js-styles", [], () => {
  // watch changes in ALL view JS files > execute task [make-view-js]
  gulp.watch(
    ["./templates-custom/**/*.js", "!./templates-custom/**/*.min.js"],
    ["make-view-js"]
  );
});

/*
 * STYLES TASK > process CSS
 */
gulp.task("make-styles", function () {
  console.log("GUS starting make-styles");
  gulp
    .src("./templates-assets/scss/global-master.scss")
    // .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    // .pipe(sourcemaps.write('./'))
    .pipe(
      autoprefixer({
        browsers: ["last 2 versions", "android 4", "opera 12"],
      })
    )
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(rename("global-master-bundle.min.css"))
    .pipe(gulp.dest("./templates-assets/dist"));
});

gulp.task("make-view-styles", function () {
  console.log("packing view SCSS");
  gulp
    .src("./templates-custom/**/*.scss", { base: "./" })
    .pipe(sass().on("error", sass.logError))
    .pipe(
      autoprefixer({
        overrideBrowsersList: ["last 2 versions"],
      })
    )
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("."));
});

/*
 * JS TASK > process small JS >VIEWS in TEMPLATES >> Exclude minified files
 */

gulp.task("make-view-js", function () {
  console.log("minifying view JS");
  gulp
    .src(["./templates-custom/**/*.js", "!./templates-custom/**/*.min.js"], {
      base: "./",
    })
    .pipe(uglify())
    .on("error", function (err) {
      console.error("Error in compress task", err.toString());
    })
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("."));
});

/*
 * LIBS TASK > make JS bundle
 */
gulp.task("make-libs", () => {
  console.log("GUS starting make-libs");
  return (
    gulp
      .src(manifest.jsLibs)
      //.pipe(sourcemaps.init())
      .pipe(concat("lib-bundle.js"))
      .pipe(uglify())
      .on("error", function (err) {
        console.error("Error in compress task", err.toString());
      })
      .pipe(rename("lib-bundle.min.js"))
      //.pipe(sourcemaps.write('./'))
      .pipe(gulp.dest("./templates-assets/dist"))
  );
});

/*
 * test gus task
 */
gulp.task("test-gus-task", () => {
  console.log("GUS test");
});
