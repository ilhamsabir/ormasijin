var Datareg = (function() {
	"use strict";

	var module = {};

	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	let el = {};

	// Initialize Report
	module.init = function () {
		// ChartMain.init();
		this.initSelector();
		module.dumpOrg();

	};



	// Init Selector
	module.initSelector = function () {
		// el.data = {};
    el.data = $('#example');

	};


	module.dumpOrg = () => {
		let url = "/ijin-ormas/admin/dataormas";
		$.ajax({
			url: url,
			dataType: 'JSON'
		}).success(response => {
			 console.log(response);
		});
	}




	return module;
})();

jQuery(document).ready(function($) {
	Datareg.init();
});
