/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/main.js":
/***/ (function(module, exports) {

// makes the parallax elements
function parallaxIt() {

    // create variables
    var $fwindow = $(window);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    // on window scroll event
    $fwindow.on('scroll resize', function () {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    });

    // for each of content parallax element
    $('[data-type="content"]').each(function (index, e) {
        var $contentObj = $(this);
        var fgOffset = parseInt($contentObj.offset().top);
        var yPos;
        var speed = $contentObj.data('speed') || .5;

        $fwindow.on('scroll resize', function () {
            yPos = fgOffset - scrollTop / speed;

            $contentObj.css('top', yPos);
        });
    });

    // for each of background parallax element
    $('[data-type="background"]').each(function () {
        var $backgroundObj = $(this);
        var bgOffset = parseInt($backgroundObj.offset().top);
        var yPos;
        var coords;
        var speed = $backgroundObj.data('speed') || 0;

        $fwindow.on('scroll resize', function () {
            yPos = -((scrollTop - bgOffset) / speed);
            coords = '30% ' + yPos + 'px';

            $backgroundObj.css({
                backgroundPosition: coords
            });
        });
    });

    // triggers winodw scroll for refresh
    $fwindow.trigger('scroll');
};

parallaxIt();

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/main.js");


/***/ })

/******/ });