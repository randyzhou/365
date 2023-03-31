(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./im/src/modules/redux/actions/index.js":
/*!***********************************************!*\
  !*** ./im/src/modules/redux/actions/index.js ***!
  \***********************************************/
/*! exports provided: addTodo, setVisibilityFilter, toggleTodo */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"addTodo\", function() { return addTodo; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"setVisibilityFilter\", function() { return setVisibilityFilter; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"toggleTodo\", function() { return toggleTodo; });\nvar nextTodoId = 0;\nvar addTodo = function addTodo(text) {\n  return {\n    type: 'ADD_TODO',\n    id: nextTodoId++,\n    text: text\n  };\n};\nvar setVisibilityFilter = function setVisibilityFilter(filter) {\n  return {\n    type: 'SET_VISIBILITY_FILTER',\n    filter: filter\n  };\n};\nvar toggleTodo = function toggleTodo(id) {\n  return {\n    type: 'TOGGLE_TODO',\n    id: id\n  };\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9hY3Rpb25zL2luZGV4LmpzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vaW0vc3JjL21vZHVsZXMvcmVkdXgvYWN0aW9ucy9pbmRleC5qcz81ZTBiIl0sInNvdXJjZXNDb250ZW50IjpbImxldCBuZXh0VG9kb0lkID0gMFxuZXhwb3J0IGNvbnN0IGFkZFRvZG8gPSB0ZXh0ID0+IHtcbiAgcmV0dXJuIHtcbiAgICB0eXBlOiAnQUREX1RPRE8nLFxuICAgIGlkOiBuZXh0VG9kb0lkKyssXG4gICAgdGV4dFxuICB9XG59XG5cbmV4cG9ydCBjb25zdCBzZXRWaXNpYmlsaXR5RmlsdGVyID0gZmlsdGVyID0+IHtcbiAgcmV0dXJuIHtcbiAgICB0eXBlOiAnU0VUX1ZJU0lCSUxJVFlfRklMVEVSJyxcbiAgICBmaWx0ZXJcbiAgfVxufVxuXG5leHBvcnQgY29uc3QgdG9nZ2xlVG9kbyA9IGlkID0+IHtcbiAgcmV0dXJuIHtcbiAgICB0eXBlOiAnVE9HR0xFX1RPRE8nLFxuICAgIGlkXG4gIH1cbn0iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBSEE7QUFLQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBRkE7QUFJQTtBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBRkE7QUFJQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./im/src/modules/redux/actions/index.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/AddTodo.js":
/*!****************************************************!*\
  !*** ./im/src/modules/redux/components/AddTodo.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../actions */ \"./im/src/modules/redux/actions/index.js\");\nvar connect = ReactRedux.connect;\n\n\nvar AddTodo = function AddTodo(_ref) {\n  var dispatch = _ref.dispatch;\n  var input;\n  return React.createElement(\"div\", null, React.createElement(\"form\", {\n    onSubmit: function onSubmit(e) {\n      e.preventDefault();\n\n      if (!input.value.trim()) {\n        return;\n      }\n\n      dispatch(Object(_actions__WEBPACK_IMPORTED_MODULE_0__[\"addTodo\"])(input.value));\n      input.value = '';\n    }\n  }, React.createElement(\"input\", {\n    ref: function ref(node) {\n      input = node;\n    }\n  }), React.createElement(\"button\", {\n    type: \"submit\"\n  }, \"Add Todo\")));\n};\n\nAddTodo = connect()(AddTodo);\n/* harmony default export */ __webpack_exports__[\"default\"] = (AddTodo);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0FkZFRvZG8uanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0FkZFRvZG8uanM/MTk1MiJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBjb25uZWN0ID0gUmVhY3RSZWR1eC5jb25uZWN0XG5pbXBvcnQgeyBhZGRUb2RvIH0gZnJvbSAnLi4vYWN0aW9ucydcblxubGV0IEFkZFRvZG8gPSAoeyBkaXNwYXRjaCB9KSA9PiB7XG4gIGxldCBpbnB1dFxuXG4gIHJldHVybiAoXG4gICAgPGRpdj5cbiAgICAgIDxmb3JtIG9uU3VibWl0PXtlID0+IHtcbiAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICBpZiAoIWlucHV0LnZhbHVlLnRyaW0oKSkge1xuICAgICAgICAgICAgcmV0dXJuXG4gICAgICAgICAgfVxuICAgICAgICAgIGRpc3BhdGNoKGFkZFRvZG8oaW5wdXQudmFsdWUpKVxuICAgICAgICAgIGlucHV0LnZhbHVlID0gJydcbiAgICAgICAgfX1cbiAgICAgID5cbiAgICAgICAgPGlucHV0IHJlZj17bm9kZSA9PiB7XG4gICAgICAgICAgICBpbnB1dCA9IG5vZGVcbiAgICAgICAgICB9fVxuICAgICAgICAvPlxuICAgICAgICA8YnV0dG9uIHR5cGU9XCJzdWJtaXRcIj5cbiAgICAgICAgICBBZGQgVG9kb1xuICAgICAgICA8L2J1dHRvbj5cbiAgICAgIDwvZm9ybT5cbiAgICA8L2Rpdj5cbiAgKVxufVxuXG5BZGRUb2RvID0gY29ubmVjdCgpKEFkZFRvZG8pXG5cbmV4cG9ydCBkZWZhdWx0IEFkZFRvZG8iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7QUFFQTtBQUVBO0FBQ0E7QUFDQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBUEE7QUFTQTtBQUNBO0FBQ0E7QUFGQTtBQUlBO0FBQUE7QUFNQTtBQUNBO0FBQ0E7QUFFQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/AddTodo.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/FilterLink.js":
/*!*******************************************************!*\
  !*** ./im/src/modules/redux/components/FilterLink.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../actions */ \"./im/src/modules/redux/actions/index.js\");\n/* harmony import */ var _Link__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Link */ \"./im/src/modules/redux/components/Link.js\");\nvar connect = ReactRedux.connect;\n\n\n\nvar mapStateToProps = function mapStateToProps(state, ownProps) {\n  return {\n    active: ownProps.filter === state.visibilityFilter\n  };\n};\n\nvar mapDispatchToProps = function mapDispatchToProps(dispatch, ownProps) {\n  return {\n    onClick: function onClick() {\n      dispatch(Object(_actions__WEBPACK_IMPORTED_MODULE_0__[\"setVisibilityFilter\"])(ownProps.filter));\n    }\n  };\n};\n\nvar FilterLink = connect(mapStateToProps, mapDispatchToProps)(_Link__WEBPACK_IMPORTED_MODULE_1__[\"default\"]);\n/* harmony default export */ __webpack_exports__[\"default\"] = (FilterLink);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0ZpbHRlckxpbmsuanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0ZpbHRlckxpbmsuanM/ZjVmNCJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBjb25uZWN0ID0gUmVhY3RSZWR1eC5jb25uZWN0XG5pbXBvcnQgeyBzZXRWaXNpYmlsaXR5RmlsdGVyIH0gZnJvbSAnLi4vYWN0aW9ucydcbmltcG9ydCBMaW5rIGZyb20gJy4vTGluaydcblxuY29uc3QgbWFwU3RhdGVUb1Byb3BzID0gKHN0YXRlLCBvd25Qcm9wcykgPT4ge1xuICByZXR1cm4ge1xuICAgIGFjdGl2ZTogb3duUHJvcHMuZmlsdGVyID09PSBzdGF0ZS52aXNpYmlsaXR5RmlsdGVyXG4gIH1cbn1cblxuY29uc3QgbWFwRGlzcGF0Y2hUb1Byb3BzID0gKGRpc3BhdGNoLCBvd25Qcm9wcykgPT4ge1xuICByZXR1cm4ge1xuICAgIG9uQ2xpY2s6ICgpID0+IHtcbiAgICAgIGRpc3BhdGNoKHNldFZpc2liaWxpdHlGaWx0ZXIob3duUHJvcHMuZmlsdGVyKSlcbiAgICB9XG4gIH1cbn1cblxuY29uc3QgRmlsdGVyTGluayA9IGNvbm5lY3QoXG4gIG1hcFN0YXRlVG9Qcm9wcyxcbiAgbWFwRGlzcGF0Y2hUb1Byb3BzXG4pKExpbmspXG5cbmV4cG9ydCBkZWZhdWx0IEZpbHRlckxpbmsiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBREE7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUhBO0FBS0E7QUFDQTtBQUNBO0FBS0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/FilterLink.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/Footer.js":
/*!***************************************************!*\
  !*** ./im/src/modules/redux/components/Footer.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _FilterLink__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FilterLink */ \"./im/src/modules/redux/components/FilterLink.js\");\n\n\nvar Footer = function Footer() {\n  return React.createElement(\"p\", null, \"Show:\", ' ', React.createElement(_FilterLink__WEBPACK_IMPORTED_MODULE_0__[\"default\"], {\n    filter: \"SHOW_ALL\"\n  }, \"All\"), ', ', React.createElement(_FilterLink__WEBPACK_IMPORTED_MODULE_0__[\"default\"], {\n    filter: \"SHOW_ACTIVE\"\n  }, \"Active\"), ', ', React.createElement(_FilterLink__WEBPACK_IMPORTED_MODULE_0__[\"default\"], {\n    filter: \"SHOW_COMPLETED\"\n  }, \"Completed\"));\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (Footer);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0Zvb3Rlci5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L2NvbXBvbmVudHMvRm9vdGVyLmpzP2FjYjIiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IEZpbHRlckxpbmsgZnJvbSAnLi9GaWx0ZXJMaW5rJ1xuXG5jb25zdCBGb290ZXIgPSAoKSA9PiAoXG4gIDxwPlxuICAgIFNob3c6XG4gICAgeycgJ31cbiAgICA8RmlsdGVyTGluayBmaWx0ZXI9XCJTSE9XX0FMTFwiPlxuICAgICAgQWxsXG4gICAgPC9GaWx0ZXJMaW5rPlxuICAgIHsnLCAnfVxuICAgIDxGaWx0ZXJMaW5rIGZpbHRlcj1cIlNIT1dfQUNUSVZFXCI+XG4gICAgICBBY3RpdmVcbiAgICA8L0ZpbHRlckxpbms+XG4gICAgeycsICd9XG4gICAgPEZpbHRlckxpbmsgZmlsdGVyPVwiU0hPV19DT01QTEVURURcIj5cbiAgICAgIENvbXBsZXRlZFxuICAgIDwvRmlsdGVyTGluaz5cbiAgPC9wPlxuKVxuXG5leHBvcnQgZGVmYXVsdCBGb290ZXIiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFBQTtBQUlBO0FBQUE7QUFJQTtBQUFBO0FBSUE7QUFBQTtBQVpBO0FBQ0E7QUFpQkEiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/Footer.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/Link.js":
/*!*************************************************!*\
  !*** ./im/src/modules/redux/components/Link.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar Link = function Link(_ref) {\n  var active = _ref.active,\n      children = _ref.children,\n      _onClick = _ref.onClick;\n\n  if (active) {\n    return React.createElement(\"span\", null, children);\n  }\n\n  return React.createElement(\"a\", {\n    href: \"\",\n    onClick: function onClick(e) {\n      e.preventDefault();\n\n      _onClick();\n    }\n  }, children);\n};\n\nLink.propTypes = {\n  active: PropTypes.bool.isRequired,\n  children: PropTypes.node.isRequired,\n  onClick: PropTypes.func.isRequired\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (Link);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0xpbmsuanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL0xpbmsuanM/ZGEyMCJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBMaW5rID0gKHsgYWN0aXZlLCBjaGlsZHJlbiwgb25DbGljayB9KSA9PiB7XG4gIGlmIChhY3RpdmUpIHtcbiAgICByZXR1cm4gPHNwYW4+e2NoaWxkcmVufTwvc3Bhbj5cbiAgfVxuXG4gIHJldHVybiAoXG4gICAgPGFcbiAgICAgIGhyZWY9XCJcIlxuICAgICAgb25DbGljaz17ZSA9PiB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICBvbkNsaWNrKClcbiAgICAgIH19XG4gICAgPlxuICAgICAge2NoaWxkcmVufVxuICAgIDwvYT5cbiAgKVxufVxuXG5MaW5rLnByb3BUeXBlcyA9IHtcbiAgYWN0aXZlOiBQcm9wVHlwZXMuYm9vbC5pc1JlcXVpcmVkLFxuICBjaGlsZHJlbjogUHJvcFR5cGVzLm5vZGUuaXNSZXF1aXJlZCxcbiAgb25DbGljazogUHJvcFR5cGVzLmZ1bmMuaXNSZXF1aXJlZFxufVxuXG5leHBvcnQgZGVmYXVsdCBMaW5rIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBTEE7QUFVQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFIQTtBQU1BIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/Link.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/Todo.js":
/*!*************************************************!*\
  !*** ./im/src/modules/redux/components/Todo.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar Todo = function Todo(_ref) {\n  var onClick = _ref.onClick,\n      completed = _ref.completed,\n      text = _ref.text;\n  return React.createElement(\"li\", {\n    onClick: onClick,\n    style: {\n      textDecoration: completed ? 'line-through' : 'none'\n    }\n  }, text);\n};\n\nTodo.propTypes = {\n  onClick: PropTypes.func.isRequired,\n  completed: PropTypes.bool.isRequired,\n  text: PropTypes.string.isRequired\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (Todo);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL1RvZG8uanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL1RvZG8uanM/NGNlZCJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBUb2RvID0gKHsgb25DbGljaywgY29tcGxldGVkLCB0ZXh0IH0pID0+IChcbiAgPGxpXG4gICAgb25DbGljaz17b25DbGlja31cbiAgICBzdHlsZT17IHtcbiAgICAgIHRleHREZWNvcmF0aW9uOiBjb21wbGV0ZWQgPyAnbGluZS10aHJvdWdoJyA6ICdub25lJ1xuICAgIH19XG4gID5cbiAgICB7dGV4dH1cbiAgPC9saT5cbilcblxuVG9kby5wcm9wVHlwZXMgPSB7XG4gIG9uQ2xpY2s6IFByb3BUeXBlcy5mdW5jLmlzUmVxdWlyZWQsXG4gIGNvbXBsZXRlZDogUHJvcFR5cGVzLmJvb2wuaXNSZXF1aXJlZCxcbiAgdGV4dDogUHJvcFR5cGVzLnN0cmluZy5pc1JlcXVpcmVkXG59XG5cbmV4cG9ydCBkZWZhdWx0IFRvZG9cbiJdLCJtYXBwaW5ncyI6IkFBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBRUE7QUFDQTtBQUNBO0FBREE7QUFGQTtBQURBO0FBQ0E7QUFVQTtBQUNBO0FBQ0E7QUFDQTtBQUhBO0FBTUEiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/Todo.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/TodoList.js":
/*!*****************************************************!*\
  !*** ./im/src/modules/redux/components/TodoList.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Todo__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Todo */ \"./im/src/modules/redux/components/Todo.js\");\nfunction _extends() { _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; }; return _extends.apply(this, arguments); }\n\n\n\nvar TodoList = function TodoList(_ref) {\n  var todos = _ref.todos,\n      onTodoClick = _ref.onTodoClick;\n  return React.createElement(\"ul\", null, todos.map(function (todo) {\n    return React.createElement(_Todo__WEBPACK_IMPORTED_MODULE_0__[\"default\"], _extends({\n      key: todo.id\n    }, todo, {\n      onClick: function onClick() {\n        return onTodoClick(todo.id);\n      }\n    }));\n  }));\n};\n\nTodoList.propTypes = {\n  todos: PropTypes.arrayOf(PropTypes.shape({\n    id: PropTypes.number.isRequired,\n    completed: PropTypes.bool.isRequired,\n    text: PropTypes.string.isRequired\n  }).isRequired).isRequired,\n  onTodoClick: PropTypes.func.isRequired\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (TodoList);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL1RvZG9MaXN0LmpzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vaW0vc3JjL21vZHVsZXMvcmVkdXgvY29tcG9uZW50cy9Ub2RvTGlzdC5qcz9kYjZmIl0sInNvdXJjZXNDb250ZW50IjpbImltcG9ydCBUb2RvIGZyb20gJy4vVG9kbydcbmNvbnN0IFRvZG9MaXN0ID0gKHsgdG9kb3MsIG9uVG9kb0NsaWNrIH0pID0+IHtcbiAgcmV0dXJuIChcbiAgICA8dWw+XG4gICAgICB7XG4gICAgICAgIHRvZG9zLm1hcCh0b2RvID0+IChcbiAgICAgICAgICA8VG9kbyBrZXk9e3RvZG8uaWR9IHsuLi50b2RvfSBvbkNsaWNrPXsoKSA9PiBvblRvZG9DbGljayh0b2RvLmlkKX0gLz5cbiAgICAgICAgKSlcbiAgICAgIH1cbiAgICA8L3VsPlxuICApXG59XG5cblRvZG9MaXN0LnByb3BUeXBlcyA9IHtcbiAgdG9kb3M6IFByb3BUeXBlcy5hcnJheU9mKFxuICAgIFByb3BUeXBlcy5zaGFwZSh7XG4gICAgICBpZDogUHJvcFR5cGVzLm51bWJlci5pc1JlcXVpcmVkLFxuICAgICAgY29tcGxldGVkOiBQcm9wVHlwZXMuYm9vbC5pc1JlcXVpcmVkLFxuICAgICAgdGV4dDogUHJvcFR5cGVzLnN0cmluZy5pc1JlcXVpcmVkXG4gICAgfSkuaXNSZXF1aXJlZFxuICApLmlzUmVxdWlyZWQsXG4gIG9uVG9kb0NsaWNrOiBQcm9wVHlwZXMuZnVuYy5pc1JlcXVpcmVkXG59XG5cbmV4cG9ydCBkZWZhdWx0IFRvZG9MaXN0Il0sIm1hcHBpbmdzIjoiOzs7O0FBQUE7QUFDQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBR0E7QUFDQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFEQTtBQU1BO0FBQ0E7QUFDQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBSEE7QUFNQTtBQVJBO0FBV0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/TodoList.js\n");

/***/ }),

/***/ "./im/src/modules/redux/components/VisibleTodoList.js":
/*!************************************************************!*\
  !*** ./im/src/modules/redux/components/VisibleTodoList.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _actions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../actions */ \"./im/src/modules/redux/actions/index.js\");\n/* harmony import */ var _TodoList__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TodoList */ \"./im/src/modules/redux/components/TodoList.js\");\nvar connect = ReactRedux.connect;\n\n\n\nvar getVisibleTodos = function getVisibleTodos(todos, filter) {\n  switch (filter) {\n    case 'SHOW_COMPLETED':\n      return todos.filter(function (t) {\n        return t.completed;\n      });\n\n    case 'SHOW_ACTIVE':\n      return todos.filter(function (t) {\n        return !t.completed;\n      });\n\n    case 'SHOW_ALL':\n    default:\n      return todos;\n  }\n};\n\nvar mapStateToProps = function mapStateToProps(state) {\n  return {\n    todos: getVisibleTodos(state.todos, state.visibilityFilter)\n  };\n};\n\nvar mapDispatchToProps = function mapDispatchToProps(dispatch) {\n  return {\n    onTodoClick: function onTodoClick(id) {\n      dispatch(Object(_actions__WEBPACK_IMPORTED_MODULE_0__[\"toggleTodo\"])(id));\n    }\n  };\n};\n\nvar VisibleTodoList = connect(mapStateToProps, mapDispatchToProps)(_TodoList__WEBPACK_IMPORTED_MODULE_1__[\"default\"]);\n/* harmony default export */ __webpack_exports__[\"default\"] = (VisibleTodoList);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb21wb25lbnRzL1Zpc2libGVUb2RvTGlzdC5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L2NvbXBvbmVudHMvVmlzaWJsZVRvZG9MaXN0LmpzPzlkOGYiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgY29ubmVjdCA9IFJlYWN0UmVkdXguY29ubmVjdFxuaW1wb3J0IHsgdG9nZ2xlVG9kbyB9IGZyb20gJy4uL2FjdGlvbnMnXG5pbXBvcnQgVG9kb0xpc3QgZnJvbSAnLi9Ub2RvTGlzdCdcblxuY29uc3QgZ2V0VmlzaWJsZVRvZG9zID0gKHRvZG9zLCBmaWx0ZXIpID0+IHtcbiAgc3dpdGNoIChmaWx0ZXIpIHtcbiAgICBjYXNlICdTSE9XX0NPTVBMRVRFRCc6XG4gICAgICByZXR1cm4gdG9kb3MuZmlsdGVyKHQgPT4gdC5jb21wbGV0ZWQpXG4gICAgY2FzZSAnU0hPV19BQ1RJVkUnOlxuICAgICAgcmV0dXJuIHRvZG9zLmZpbHRlcih0ID0+ICF0LmNvbXBsZXRlZClcbiAgICBjYXNlICdTSE9XX0FMTCc6XG4gICAgZGVmYXVsdDpcbiAgICAgIHJldHVybiB0b2Rvc1xuICB9XG59XG5cbmNvbnN0IG1hcFN0YXRlVG9Qcm9wcyA9IHN0YXRlID0+IHtcbiAgcmV0dXJuIHtcbiAgICB0b2RvczogZ2V0VmlzaWJsZVRvZG9zKHN0YXRlLnRvZG9zLCBzdGF0ZS52aXNpYmlsaXR5RmlsdGVyKVxuICB9XG59XG5cbmNvbnN0IG1hcERpc3BhdGNoVG9Qcm9wcyA9IGRpc3BhdGNoID0+IHtcbiAgcmV0dXJuIHtcbiAgICBvblRvZG9DbGljazogaWQgPT4ge1xuICAgICAgZGlzcGF0Y2godG9nZ2xlVG9kbyhpZCkpXG4gICAgfVxuICB9XG59XG5cbmNvbnN0IFZpc2libGVUb2RvTGlzdCA9IGNvbm5lY3QoXG4gIG1hcFN0YXRlVG9Qcm9wcyxcbiAgbWFwRGlzcGF0Y2hUb1Byb3BzXG4pKFRvZG9MaXN0KVxuXG5leHBvcnQgZGVmYXVsdCBWaXNpYmxlVG9kb0xpc3QiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUFBO0FBQ0E7QUFBQTtBQUNBO0FBQUE7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBUEE7QUFTQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBREE7QUFHQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUhBO0FBS0E7QUFDQTtBQUNBO0FBS0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/components/VisibleTodoList.js\n");

/***/ }),

/***/ "./im/src/modules/redux/containers/App.js":
/*!************************************************!*\
  !*** ./im/src/modules/redux/containers/App.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _components_AddTodo__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/AddTodo */ \"./im/src/modules/redux/components/AddTodo.js\");\n/* harmony import */ var _components_VisibleTodoList__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/VisibleTodoList */ \"./im/src/modules/redux/components/VisibleTodoList.js\");\n/* harmony import */ var _components_Footer__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/Footer */ \"./im/src/modules/redux/components/Footer.js\");\n\n\n\n\nvar App = function App() {\n  return React.createElement(\"div\", null, React.createElement(_components_AddTodo__WEBPACK_IMPORTED_MODULE_0__[\"default\"], null), React.createElement(_components_VisibleTodoList__WEBPACK_IMPORTED_MODULE_1__[\"default\"], null), React.createElement(_components_Footer__WEBPACK_IMPORTED_MODULE_2__[\"default\"], null));\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (App);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9jb250YWluZXJzL0FwcC5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L2NvbnRhaW5lcnMvQXBwLmpzPzBlMzgiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IEFkZFRvZG8gZnJvbSAnLi4vY29tcG9uZW50cy9BZGRUb2RvJ1xuaW1wb3J0IFZpc2libGVUb2RvTGlzdCBmcm9tICcuLi9jb21wb25lbnRzL1Zpc2libGVUb2RvTGlzdCdcbmltcG9ydCBGb290ZXIgZnJvbSAnLi4vY29tcG9uZW50cy9Gb290ZXInXG5cbmNvbnN0IEFwcCA9ICgpID0+IChcbiAgPGRpdj5cbiAgICA8QWRkVG9kbyAvPlxuICAgIDxWaXNpYmxlVG9kb0xpc3QgLz5cbiAgICA8Rm9vdGVyIC8+XG4gIDwvZGl2PlxuKVxuXG5leHBvcnQgZGVmYXVsdCBBcHAiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUFBO0FBQUE7QUFDQTtBQU9BIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./im/src/modules/redux/containers/App.js\n");

/***/ }),

/***/ "./im/src/modules/redux/index.js":
/*!***************************************!*\
  !*** ./im/src/modules/redux/index.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _reducers_Index__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./reducers/Index */ \"./im/src/modules/redux/reducers/Index.js\");\n/* harmony import */ var _containers_App__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./containers/App */ \"./im/src/modules/redux/containers/App.js\");\nvar createStore = Redux.createStore;\nvar Provider = ReactRedux.Provider;\n\n\nvar store = createStore(_reducers_Index__WEBPACK_IMPORTED_MODULE_0__[\"default\"]);\n\nvar List = function List() {\n  return React.createElement(Provider, {\n    store: store\n  }, React.createElement(_containers_App__WEBPACK_IMPORTED_MODULE_1__[\"default\"], null));\n};\n\nvar Index = {\n  List: List\n};\n/* harmony default export */ __webpack_exports__[\"default\"] = (Index);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9pbmRleC5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L2luZGV4LmpzPzA2NzQiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgY3JlYXRlU3RvcmUgPSBSZWR1eC5jcmVhdGVTdG9yZVxuY29uc3QgUHJvdmlkZXIgPSBSZWFjdFJlZHV4LlByb3ZpZGVyXG5cbmltcG9ydCB0b2RvUmVkdWNlcnMgZnJvbSAnLi9yZWR1Y2Vycy9JbmRleCdcbmltcG9ydCBBcHAgZnJvbSAnLi9jb250YWluZXJzL0FwcCdcblxubGV0IHN0b3JlID0gY3JlYXRlU3RvcmUodG9kb1JlZHVjZXJzKVxuXG5jb25zdCBMaXN0PSgpPT48UHJvdmlkZXIgc3RvcmU9e3N0b3JlfT48QXBwIC8+PC9Qcm92aWRlcj5cblxuY29uc3QgSW5kZXg9e0xpc3R9XG5leHBvcnQgZGVmYXVsdCBJbmRleDsiXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFFQTtBQUNBO0FBRUE7QUFDQTtBQUNBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQTtBQUNBO0FBQUE7QUFBQTtBQUNBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./im/src/modules/redux/index.js\n");

/***/ }),

/***/ "./im/src/modules/redux/reducers/Index.js":
/*!************************************************!*\
  !*** ./im/src/modules/redux/reducers/Index.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _todos__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./todos */ \"./im/src/modules/redux/reducers/todos.js\");\n/* harmony import */ var _visibilityFilter__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./visibilityFilter */ \"./im/src/modules/redux/reducers/visibilityFilter.js\");\nvar combineReducers = Redux.combineReducers;\n\n\nvar todoApp = combineReducers({\n  todos: _todos__WEBPACK_IMPORTED_MODULE_0__[\"default\"],\n  visibilityFilter: _visibilityFilter__WEBPACK_IMPORTED_MODULE_1__[\"default\"]\n});\n/* harmony default export */ __webpack_exports__[\"default\"] = (todoApp);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9yZWR1Y2Vycy9JbmRleC5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L3JlZHVjZXJzL0luZGV4LmpzPzYwMmMiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgY29tYmluZVJlZHVjZXJzID0gUmVkdXguY29tYmluZVJlZHVjZXJzXG5pbXBvcnQgdG9kb3MgZnJvbSAnLi90b2RvcydcbmltcG9ydCB2aXNpYmlsaXR5RmlsdGVyIGZyb20gJy4vdmlzaWJpbGl0eUZpbHRlcidcblxuY29uc3QgdG9kb0FwcCA9IGNvbWJpbmVSZWR1Y2Vycyh7XG4gIHRvZG9zLFxuICB2aXNpYmlsaXR5RmlsdGVyXG59KVxuXG5leHBvcnQgZGVmYXVsdCB0b2RvQXBwIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7QUFGQTtBQUtBIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./im/src/modules/redux/reducers/Index.js\n");

/***/ }),

/***/ "./im/src/modules/redux/reducers/todos.js":
/*!************************************************!*\
  !*** ./im/src/modules/redux/reducers/todos.js ***!
  \************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nfunction ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }\n\nfunction _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(source, true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(source).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nfunction _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _nonIterableSpread(); }\n\nfunction _nonIterableSpread() { throw new TypeError(\"Invalid attempt to spread non-iterable instance\"); }\n\nfunction _iterableToArray(iter) { if (Symbol.iterator in Object(iter) || Object.prototype.toString.call(iter) === \"[object Arguments]\") return Array.from(iter); }\n\nfunction _arrayWithoutHoles(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } }\n\nvar todos = function todos() {\n  var state = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];\n  var action = arguments.length > 1 ? arguments[1] : undefined;\n\n  switch (action.type) {\n    case 'ADD_TODO':\n      return [].concat(_toConsumableArray(state), [{\n        id: action.id,\n        text: action.text,\n        completed: false\n      }]);\n\n    case 'TOGGLE_TODO':\n      return state.map(function (todo) {\n        return todo.id === action.id ? _objectSpread({}, todo, {\n          completed: !todo.completed\n        }) : todo;\n      });\n\n    default:\n      return state;\n  }\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (todos);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9yZWR1Y2Vycy90b2Rvcy5qcy5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2ltL3NyYy9tb2R1bGVzL3JlZHV4L3JlZHVjZXJzL3RvZG9zLmpzPzU0YzYiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgdG9kb3MgPSAoc3RhdGUgPSBbXSwgYWN0aW9uKSA9PiB7XG4gIHN3aXRjaCAoYWN0aW9uLnR5cGUpIHtcbiAgICBjYXNlICdBRERfVE9ETyc6XG4gICAgICByZXR1cm4gW1xuICAgICAgICAuLi5zdGF0ZSxcbiAgICAgICAge1xuICAgICAgICAgIGlkOiBhY3Rpb24uaWQsXG4gICAgICAgICAgdGV4dDogYWN0aW9uLnRleHQsXG4gICAgICAgICAgY29tcGxldGVkOiBmYWxzZVxuICAgICAgICB9XG4gICAgICBdXG4gICAgY2FzZSAnVE9HR0xFX1RPRE8nOlxuICAgICAgcmV0dXJuIHN0YXRlLm1hcCh0b2RvID0+XG4gICAgICAgICh0b2RvLmlkID09PSBhY3Rpb24uaWQpIFxuICAgICAgICAgID8gey4uLnRvZG8sIGNvbXBsZXRlZDogIXRvZG8uY29tcGxldGVkfVxuICAgICAgICAgIDogdG9kb1xuICAgICAgKVxuICAgIGRlZmF1bHQ6XG4gICAgICByZXR1cm4gc3RhdGVcbiAgfVxufVxuXG5leHBvcnQgZGVmYXVsdCB0b2RvcyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFBQTtBQUNBO0FBQ0E7QUFHQTtBQUNBO0FBQ0E7QUFIQTtBQUNBO0FBS0E7QUFDQTtBQUFBO0FBRUE7QUFEQTtBQURBO0FBQ0E7QUFJQTtBQUNBO0FBakJBO0FBbUJBO0FBQ0E7QUFDQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./im/src/modules/redux/reducers/todos.js\n");

/***/ }),

/***/ "./im/src/modules/redux/reducers/visibilityFilter.js":
/*!***********************************************************!*\
  !*** ./im/src/modules/redux/reducers/visibilityFilter.js ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar visibilityFilter = function visibilityFilter() {\n  var state = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'SHOW_ALL';\n  var action = arguments.length > 1 ? arguments[1] : undefined;\n\n  switch (action.type) {\n    case 'SET_VISIBILITY_FILTER':\n      return action.filter;\n\n    default:\n      return state;\n  }\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (visibilityFilter);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9pbS9zcmMvbW9kdWxlcy9yZWR1eC9yZWR1Y2Vycy92aXNpYmlsaXR5RmlsdGVyLmpzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vaW0vc3JjL21vZHVsZXMvcmVkdXgvcmVkdWNlcnMvdmlzaWJpbGl0eUZpbHRlci5qcz8zZjRhIl0sInNvdXJjZXNDb250ZW50IjpbImNvbnN0IHZpc2liaWxpdHlGaWx0ZXIgPSAoc3RhdGUgPSAnU0hPV19BTEwnLCBhY3Rpb24pID0+IHtcbiAgc3dpdGNoIChhY3Rpb24udHlwZSkge1xuICAgIGNhc2UgJ1NFVF9WSVNJQklMSVRZX0ZJTFRFUic6XG4gICAgICByZXR1cm4gYWN0aW9uLmZpbHRlclxuICAgIGRlZmF1bHQ6XG4gICAgICByZXR1cm4gc3RhdGVcbiAgfVxufVxuXG5leHBvcnQgZGVmYXVsdCB2aXNpYmlsaXR5RmlsdGVyIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFBQTtBQUNBO0FBSkE7QUFNQTtBQUNBO0FBQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./im/src/modules/redux/reducers/visibilityFilter.js\n");

/***/ }),

/***/ 0:
/*!*********************************************!*\
  !*** multi ./im/src/modules/redux/index.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Applications/XAMPP/365/web/im/src/modules/redux/index.js */"./im/src/modules/redux/index.js");


/***/ })

/******/ });
});