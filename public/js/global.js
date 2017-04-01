var Global = (function() {
	"use strict";

	var module = {};
	const el = {};

	// Initialize Report
	module.init = function () {
		// ChartMain.init();
		this.initSelector();
	};

	// Init Selector
	module.initSelector = function () {

	};

	return module;
})();

jQuery(document).ready(function($) {
	Global.init();
});
