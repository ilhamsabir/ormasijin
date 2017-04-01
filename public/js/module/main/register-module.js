var RegisterMain = (function() {
	"use strict";

	var module = {};
	let el = {};

	// Initialize Report
	module.init = function () {
		this.initSelector();
    this.initTest();
    // this.initRegister();
		this.initDateBirth();
		this.initValidation();
	};

	// Init Selector
	module.initSelector = function () {
    el.tglLahir = $('#tgl-lahir');
		el.formRegister = $('#form-register');
	};

  // init tester
  module.initTest = function() {
    console.log('yes its register');
  };

  // init validation register
  module.initValidation = function() {
		el.formRegister.validate({
					rules: {
		      name: "required",
		      email: {
		        required: true,
		        email: true
		      },
		      password: {
		        required: true,
		        minlength: 6
		      },
					password_confirm : {
              minlength : 6,
              equalTo : "#password"
          },
					tempat_lahir: "required",
					tgl_lahir: "required",
					jenis_kelamin: "required",
					alamat: "required",
					rt: "required",
					rw: "required",
					kelurahan: "required",
					kecamatan: "required",
					kota: "required",
					agama: "required",
					pekerjaan: "required",
					status_pernikahan: "required",
					no_tlp: {
						required: true,
						number: true
					},
					organisasi: "required",
		    },
		    // Specify validation error messages
		    messages: {
		      name: "Nama Harus Diisi",
					email: "Email Harus Diisi",
		      password: {
		        required: "Password Harus Diisi",
		        minlength: "Minimum Password <Lebih>Dari 6 Karakter</Lebih>"
		      },
					tempat_lahir: "Tidak Boleh Kosong",
					tgl_lahir: "Tidak Boleh Kosong",
					jenis_kelamin: "Tidak Boleh Kosong",
					alamat: "Tidak Boleh Kosong",
					rt: "Tidak Boleh Kosong",
					rw: "Tidak Boleh Kosong",
					kelurahan: "Tidak Boleh Kosong",
					kecamatan: "Tidak Boleh Kosong",
					kota: "Tidak Boleh Kosong",
					agama: "Tidak Boleh Kosong",
					pekerjaan: "Tidak Boleh Kosong",
					status_pernikahan: "Tidak Boleh Kosong",
					no_tlp: "Tidak Boleh Kosong",
					organisasi: "Tidak Boleh Kosong",
		    },
			 submitHandler: function(form) {
	      form.submit();
	     }
		});
  };

	// init tanggal lahir datepicker
	module.initDateBirth =  function() {
		console.log('yes date');
		el.tglLahir.datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};


	return module;
})();

jQuery(document).ready(function($) {
	RegisterMain.init();
});
