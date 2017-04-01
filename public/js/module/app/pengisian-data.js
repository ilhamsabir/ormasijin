var Data = (function() {
	"use strict";

	var module = {};
	// var tokenCSRF = $('meta[name="csrf-token"]').attr('content');
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	// le/ijin-ormas= "/ijin-ormas";
	let el = {};
	// console.log('yes');
	// Initialize Report
	module.init = function () {
		// ChartMain.init();
		this.initSelector();
    this.initStepData();
		module.checkTahap();
		this.initTanggalPendirian();
		module.tanggalLahirKetua();
		module.tanggalLahirSekretaris();
		module.tanggalLahirBendahara();
		// data berkas
		module.getDataBerkas();
		// logo upload
		module.logoBerkas();
		module.modalLogoClose();
		module.clickGridLogoItem();
		module.uploadLogo();
		// bendera.
		module.benderaBerkas();
		module.benderaClose();
		module.benderaClick();
		module.benderaUpload();
		// akte
		module.akteBerkas();
		module.akteClose();
		module.akteClick();
		module.akteUpload();
		// adart
		module.adartBerkas();
		module.adartClose();
		module.adartClick();
		module.adartUpload();
		// proker
		module.prokerBerkas();
		module.prokerClose();
		module.prokerClick();
		module.prokerUpload();
		// sk
		module.skBerkas();
		module.skClose();
		module.skClick();
		module.skUpload();
		// ktp
		module.ktpBerkas();
		module.ktpClose();
		module.ktpClick();
		module.ktpUpload();
		// domisili
		module.domisiliBerkas();
		module.domisiliClose();
		module.domisiliClick();
		module.domisiliUpload();
		// npwp
		module.npwpBerkas();
		module.npwpClose();
		module.npwpClick();
		module.npwpUpload();
		// foto
		module.fotoBerkas();
		module.fotoClose();
		module.fotoClick();
		module.fotoUpload();
		// bukti
		module.buktiBerkas();
		module.buktiClose();
		module.buktiClick();
		module.buktiUpload();
	};

	// Init Selector
	module.initSelector = function () {
		el.tanggallahir = {
			ketua:'',
			sekretaris:'',
			bendahara:'',
		}
		el.tglpendirian = $('#waktu-pendirian');
		el.tanggallahir.ketua = $('.tgl-lahir-ketua');
		el.tanggallahir.sekretaris = $('.tgl-lahir-sekretaris');
		el.tanggallahir.bendahara = $('.tgl-lahir-bendahara');

		el.logo = {
			upload:'',
			grid:''
		};
		el.logo.upload = $('#input-logo');
		el.logo.grid = $('.grid-logo');

		el.bendera = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.bendera.btnModal = $('#bendera-berkas');
		el.bendera.modal = $('#modal-bendera');
		el.bendera.close = $('.close-modal-bendera');
		el.bendera.grid = $('.grid-bendera');
		el.bendera.upload = $('#upload-bendera');

		el.akte = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.akte.btnModal = $('#akte-berkas');
		el.akte.modal = $('#modal-akte');
		el.akte.close = $('.close-modal-akte');
		el.akte.grid = $('.grid-akte');
		el.akte.upload = $('#upload-akte');

		el.adart = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.adart.btnModal = $('#adart-berkas');
		el.adart.modal = $('#modal-adart');
		el.adart.close = $('.close-modal-adart');
		el.adart.grid = $('.grid-adart');
		el.adart.upload = $('#upload-adart');

		el.proker = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.proker.btnModal = $('#proker-berkas');
		el.proker.modal = $('#modal-proker');
		el.proker.close = $('.close-modal-proker');
		el.proker.grid = $('.grid-proker');
		el.proker.upload = $('#upload-proker');

		el.sk = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.sk.btnModal = $('#sk-berkas');
		el.sk.modal = $('#modal-sk');
		el.sk.close = $('.close-modal-sk');
		el.sk.grid = $('.grid-sk');
		el.sk.upload = $('#upload-sk');

		el.ktp = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.ktp.btnModal = $('#ktp-berkas');
		el.ktp.modal = $('#modal-ktp');
		el.ktp.close = $('.close-modal-ktp');
		el.ktp.grid = $('.grid-ktp');
		el.ktp.upload = $('#upload-ktp');

		el.domisili = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.domisili.btnModal = $('#domisili-berkas');
		el.domisili.modal = $('#modal-domisili');
		el.domisili.close = $('.close-modal-domisili');
		el.domisili.grid = $('.grid-domisili');
		el.domisili.upload = $('#upload-domisili');

		el.npwp = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.npwp.btnModal = $('#npwp-berkas');
		el.npwp.modal = $('#modal-npwp');
		el.npwp.close = $('.close-modal-npwp');
		el.npwp.grid = $('.grid-npwp');
		el.npwp.upload = $('#upload-npwp');

		el.foto = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.foto.btnModal = $('#foto-berkas');
		el.foto.modal = $('#modal-foto');
		el.foto.close = $('.close-modal-foto');
		el.foto.grid = $('.grid-foto');
		el.foto.upload = $('#upload-foto');

		el.bukti = {
				btnModal:'',
				modal:'',
				close:'',
				grid:'',
				upload:''
		};
		el.bukti.btnModal = $('#bukti-berkas');
		el.bukti.modal = $('#modal-bukti');
		el.bukti.close = $('.close-modal-bukti');
		el.bukti.grid = $('.grid-bukti');
		el.bukti.upload = $('#upload-bukti');
	};

	// check tahap
	module.checkTahap = () => {
		let url = "/ijin-ormas/tahap/verfiyuser";
		// console.log(url);
		$.ajax({
			url: url,
			dataType: 'JSON'
		}).success(response => {
			// console.log(response);
				$('#pengisian-data-selesai').hide();
				$('#pengisian-data-baru').hide();
				if(response.data.length != 1) {
					$('#pengisian-data-baru').show();
					$('#pengisian-data-selesai').html('');
				} else {

					$('#pengisian-data-selesai').show();
					$('#pengisian-data-baru').html('');
				}
			//  console.log(response.data.length);
		});
	};

	// step pengisian-data
  module.initStepData = function () {
		var navListItems = $('ul.setup-panel li a'),
			  allWells = $('.setup-content');

		 allWells.hide();

		 navListItems.click(function(e)
		 {
				 e.preventDefault();
				 var $target = $($(this).attr('href')),
						 $item = $(this).closest('li');

				 if (!$item.hasClass('disabled')) {
						 navListItems.closest('li').removeClass('active');
						 $item.addClass('active');
						 allWells.hide();
						 $target.show();
				 }
		 });

		 $('ul.setup-panel li.active a').trigger('click');

		 // DEMO ONLY //
		 $('#activate-step-2').on('click', function(e) {
				 $('ul.setup-panel li:eq(1)').removeClass('disabled');
				 $('ul.setup-panel li a[href="#step-2"]').trigger('click');
				 $(this).remove();
		 });
		 // DEMO ONLY //
		 $('#activate-step-3').on('click', function(e) {
				 $('ul.setup-panel li:eq(2)').removeClass('disabled');
				 $('ul.setup-panel li a[href="#step-3"]').trigger('click');
				 $(this).remove();
		 });
  };

  // tanggal pendirian
	module.initTanggalPendirian =  function() {
		// console.log('yes date');
		el.tglpendirian.datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	// validate step 1
	module.validateStepSatu = function () {
		$('#nama-organisasi').validate({
				rules: {
		      namaorganisasi: "required",
				}
		});
	};

	// module tgl lahir ketua
	module.tanggalLahirKetua = () => {
		el.tanggallahir.ketua.datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};
	// module tgl lahir ketua
	module.tanggalLahirSekretaris = () => {
		el.tanggallahir.sekretaris.datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	// module tgl lahir ketua
	module.tanggalLahirBendahara = () => {
		el.tanggallahir.bendahara.datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	// get data berkas
	module.getDataBerkas = () => {
		let url = "/ijin-ormas/berkas/getdata";
		$.ajax({
			url: url,
			dataType: 'JSON'
		}).success(response => {
			 if(response.length != 0) {
				//  console.log(response);
						module.dataLogo(response);
						module.dataBendera(response);
						module.dataAkte(response);
						module.dataAdart(response);
						module.dataProker(response);
						module.dataSk(response);
						module.dataKtp(response);
						module.dataDomisili(response);
						module.dataNpwp(response);
						module.dataFoto(response);
						module.dataBukti(response);
				}
		});
	};

	// pop up logo
	module.logoBerkas = () => {
		$('#logoBerkas').on('click',function(e) {
			e.preventDefault();
			$('.modal-logo').dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Management Logo"
			});
			$('.modal-logo').addClass('active');
		});
	};

	// modal close
	module.modalLogoClose = () => {
			$('.close-modal-logo').on('click', function(e) {
				e.preventDefault();
				$('.modal-logo').dialog('close');
			});
	};

	// when item logo click
	module.clickGridLogoItem = function () {
		$('body').on('click', '.logo-item', function(event){
			$('body .logo-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputlogo').val(file);
		});
	};

	// module click submit logo
	module.uploadLogo = () => {
    el.logo.upload.on('change', function() {
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      let url = "/ijin-ormas/berkas/postlogo";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let image = `<img src="/ijin-ormas/upload/logo/${response.path}" class="grid-item logo-item" alt="" data-file="${response.path}">`;
							el.logo.grid.append(image);
					}
			});
      // end ajax
    });
	};

	// get data image logo
	module.dataLogo = (response) => {
		// console.log(response);
		let arrayLogo = response.data;
		 arrayLogo.forEach( function(item) {
			 if ((item.typefile) === 'logo') {
				 let image = `<img src="/ijin-ormas/upload/logo/${item.namafile}" class="grid-item logo-item" alt="" data-file="${item.namafile}">`;
				 el.logo.grid.append(image);
			}
		 });
	};

	// pop up logo
	module.benderaBerkas = () => {
		el.bendera.btnModal.on('click',function(e) {
			e.preventDefault();
			el.bendera.modal.dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Management Bendera"
			});
			$('.modal-bendera').addClass('active');
		});
	};

	// modal close
	module.benderaClose = () => {
			el.bendera.close.on('click', function(e) {
				e.preventDefault();
				el.bendera.modal.dialog('close');
			});
	};

	// when item logo click
	module.benderaClick = function () {
		$('body').on('click', '.bendera-item', function(event){
			$('body .bendera-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputbendera').val(file);
		});
	};

	// module click submit logo
	module.benderaUpload = () => {
    el.bendera.upload.on('change', function() {
      let url = "/ijin-ormas/berkas/postbendera";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let image = `<img src="/ijin-ormas/upload/bendera/${response.path}" class="grid-item bendera-item" alt="" data-file="${response.path}">`;
							el.bendera.grid.append(image);
					}
			});
      // end ajax
    });
	};

	// get data image logo
	module.dataBendera = (response) => {
		 let arrayBendera = response.data;
			arrayBendera.forEach( function(item) {
				if ((item.typefile) === 'bendera') {
						let image = `<img src="/ijin-ormas/upload/bendera/${item.namafile}" class="grid-item bendera-item" alt="" data-file="${item.namafile}">`;
						el.bendera.grid.append(image);
				}
			});
	};

	// pop up logo
	module.akteBerkas = () => {
		el.akte.btnModal.on('click',function(e) {
			e.preventDefault();
			el.akte.modal.dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Akte Pendirian Organisasi"
			});
			$('.modal-akte').addClass('active');
		});
	};

	// modal close
	module.akteClose = () => {
			el.akte.close.on('click', function(e) {
				e.preventDefault();
				el.akte.modal.dialog('close');
			});
	};

	// when item logo click
	module.akteClick = function () {
		$('body').on('click', '.akte-item', function(event){
			$('body .akte-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputakte').val(file);
		});
	};

	// module click submit logo
	module.akteUpload = () => {
    el.akte.upload.on('change', function() {
      let url = "/ijin-ormas/berkas/postakte";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item akte-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> Akte Pendirian </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.akte.grid.append(pdf);
					}
					// console.log(response);
			});
      // end ajax
    });
	};

	// get data image logo
	module.dataAkte = (response) => {
		 let arrayAkte = response.data;
			arrayAkte.forEach( function(item) {
				if ((item.typefile) === 'akte') {
					let pdf = `
							<div class="grid-item akte-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> Akte Pendirian </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.akte.grid.append(pdf);
				}
			});
	};

	// pop up
	module.adartBerkas = () => {
		el.adart.btnModal.on('click',function(e) {
			e.preventDefault();
			el.adart.modal.dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "ADART Organisasi"
			});
			$('.modal-adart').addClass('active');
		});
	};

	// modal close
	module.adartClose = () => {
			el.adart.close.on('click', function(e) {
				e.preventDefault();
				el.adart.modal.dialog('close');
			});
	};

	// when item click
	module.adartClick = function () {
		$('body').on('click', '.adart-item', function(event){
			$('body .adart-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputadart').val(file);
		});
	};

	// module click submit
	module.adartUpload = () => {
    el.adart.upload.on('change', function() {
      let url = "/ijin-ormas/berkas/postadart";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item adart-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> ADART Organisasi </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.adart.grid.append(pdf);
					}
					// console.log(response);
			});
      // end ajax
    });
	};

	// get data
	module.dataAdart = (response) => {
		 let arrayAdart = response.data;
			arrayAdart.forEach( function(item) {
				if ((item.typefile) === 'adart') {
					let pdf = `
							<div class="grid-item adart-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> ADART Organisasi </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.adart.grid.append(pdf);
				}
			});
	};


	// pop up
	module.prokerBerkas = () => {
		el.proker.btnModal.on('click',function(e) {
			e.preventDefault();
			el.proker.modal.dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Program Kerja Organisasi"
			});
			$('.modal-proker').addClass('active');
		});
	};

	// modal close
	module.prokerClose = () => {
			el.proker.close.on('click', function(e) {
				e.preventDefault();
				el.proker.modal.dialog('close');
			});
	};

	// when item click
	module.prokerClick = function () {
		$('body').on('click', '.proker-item', function(event){
			$('body .proker-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputproker').val(file);
		});
	};

	// module click submit
	module.prokerUpload = () => {
    el.proker.upload.on('change', function() {
      let url = "/ijin-ormas/berkas/postproker";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item proker-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> Program Kerja </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.proker.grid.append(pdf);
					}
					// console.log(response);
			});
      // end ajax
    });
	};

	// get data
	module.dataProker = (response) => {
		 let arrayProker = response.data;
			arrayProker.forEach( function(item) {
				if ((item.typefile) === 'proker') {
					let pdf = `
							<div class="grid-item proker-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> Program Kerja </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.proker.grid.append(pdf);
				}
			});
	};


	// pop up
	module.skBerkas = () => {
		el.sk.btnModal.on('click',function(e) {
			e.preventDefault();
			el.sk.modal.dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "SK Pengurus Organisasi"
			});
			$('.modal-sk').addClass('active');
		});
	};

	// modal close
	module.skClose = () => {
			el.sk.close.on('click', function(e) {
				e.preventDefault();
				el.sk.modal.dialog('close');
			});
	};

	// when item click
	module.skClick = function () {
		$('body').on('click', '.sk-item', function(event){
			$('body .sk-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputsk').val(file);
		});
	};

	// module click submit
	module.skUpload = () => {
    el.sk.upload.on('change', function() {
      let url = "/ijin-ormas/berkas/postsk";
      // console.log(url);
      var fileName = $(this).val();
      var file = this.files[0];
      var form = new FormData();
      form.append('namafile', file);
      form.append('_token', CSRF_TOKEN);

      $.ajax({
          url : url,
          type: 'POST',
          cache: false,
          dataType: 'JSON',
          contentType: false,
          processData: false,
          data : form
      }).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item sk-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> SK Pengurus </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.sk.grid.append(pdf);
					}
					// console.log(response);
			});
      // end ajax
    });
	};

	// get data
	module.dataSk = (response) => {
		 let arraySk = response.data;
			arraySk.forEach( function(item) {
				if ((item.typefile) === 'sk') {
					let pdf = `
							<div class="grid-item sk-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> SK Pengurus </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.sk.grid.append(pdf);
				}
			});
	};


	// pop up
	module.ktpBerkas = () => {
		el.ktp.btnModal.on('click',function(e) {
			e.preventDefault();
			el.ktp.modal.dialog({
					modal: true,
					minWidth: 850,
					closeText: "show",
					closeOnEscape: false,
					title: "KTP Pengurus Organisasi"
			});
			$('.modal-ktp').addClass('active');
		});
	};

	// modal close
	module.ktpClose = () => {
			el.ktp.close.on('click', function(e) {
				e.preventDefault();
				el.ktp.modal.dialog('close');
			});
	};

	// when item click
	module.ktpClick = function () {
		$('body').on('click', '.ktp-item', function(event){
			$('body .ktp-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputktp').val(file);
		});
	};

	// module click submit
	module.ktpUpload = () => {
		el.ktp.upload.on('change', function() {
			let url = "/ijin-ormas/berkas/postktp";
			// console.log(url);
			var fileName = $(this).val();
			var file = this.files[0];
			var form = new FormData();
			form.append('namafile', file);
			form.append('_token', CSRF_TOKEN);

			$.ajax({
					url : url,
					type: 'POST',
					cache: false,
					dataType: 'JSON',
					contentType: false,
					processData: false,
					data : form
			}).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item ktp-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> KTP Pengurus </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.ktp.grid.append(pdf);
					}
					// console.log(response);
			});
			// end ajax
		});
	};

	// get data
	module.dataKtp = (response) => {
		 let arrayKtp = response.data;
			arrayKtp.forEach( function(item) {
				if ((item.typefile) === 'ktp') {
					let pdf = `
							<div class="grid-item ktp-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> KTP Pengurus </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.ktp.grid.append(pdf);
				}
			});
	};


	// pop up
	module.domisiliBerkas = () => {
		el.domisili.btnModal.on('click',function(e) {
			e.preventDefault();
			el.domisili.modal.dialog({
					modal: true,
					minWidth: 850,
					closeText: "show",
					closeOnEscape: false,
					title: "SK Domisili Organisasi"
			});
			$('.modal-domisili').addClass('active');
		});
	};

	// modal close
	module.domisiliClose = () => {
			el.domisili.close.on('click', function(e) {
				e.preventDefault();
				el.domisili.modal.dialog('close');
			});
	};

	// when item click
	module.domisiliClick = function () {
		$('body').on('click', '.domisili-item', function(event){
			$('body .domisili-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputdomisili').val(file);
		});
	};

	// module click submit
	module.domisiliUpload = () => {
		el.domisili.upload.on('change', function() {
			let url = "/ijin-ormas/berkas/postdomisili";
			// console.log(url);
			var fileName = $(this).val();
			var file = this.files[0];
			var form = new FormData();
			form.append('namafile', file);
			form.append('_token', CSRF_TOKEN);

			$.ajax({
					url : url,
					type: 'POST',
					cache: false,
					dataType: 'JSON',
					contentType: false,
					processData: false,
					data : form
			}).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item domisili-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> SK Domisili Organisasi </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.domisili.grid.append(pdf);
					}
					// console.log(response);
			});
			// end ajax
		});
	};

	// get data
	module.dataDomisili = (response) => {
		 let arrayDomisili = response.data;
			arrayDomisili.forEach( function(item) {
				if ((item.typefile) === 'domisili') {
					let pdf = `
							<div class="grid-item domisili-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> SK Domisili Organisasi </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.domisili.grid.append(pdf);
				}
			});
	};


	// pop up
	module.npwpBerkas = () => {
		el.npwp.btnModal.on('click',function(e) {
			e.preventDefault();
			el.npwp.modal.dialog({
					modal: true,
					minWidth: 850,
					closeText: "show",
					closeOnEscape: false,
					title: "NPWP Atas Nama Organisasi"
			});
			$('.modal-npwp').addClass('active');
		});
	};

	// modal close
	module.npwpClose = () => {
			el.npwp.close.on('click', function(e) {
				e.preventDefault();
				el.npwp.modal.dialog('close');
			});
	};

	// when item click
	module.npwpClick = function () {
		$('body').on('click', '.npwp-item', function(event){
			$('body .npwp-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputnpwp').val(file);
		});
	};

	// module click submit
	module.npwpUpload = () => {
		el.npwp.upload.on('change', function() {
			let url = "/ijin-ormas/berkas/postnpwp";
			// console.log(url);
			var fileName = $(this).val();
			var file = this.files[0];
			var form = new FormData();
			form.append('namafile', file);
			form.append('_token', CSRF_TOKEN);

			$.ajax({
					url : url,
					type: 'POST',
					cache: false,
					dataType: 'JSON',
					contentType: false,
					processData: false,
					data : form
			}).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item npwp-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> NPWP Atas Nama Organisasi </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.npwp.grid.append(pdf);
					}
					// console.log(response);
			});
			// end ajax
		});
	};

	// get data
	module.dataNpwp = (response) => {
		 let arrayNpwp = response.data;
			arrayNpwp.forEach( function(item) {
				if ((item.typefile) === 'npwp') {
					let pdf = `
							<div class="grid-item npwp-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> NPWP Atas Nama Organisasi </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.npwp.grid.append(pdf);
				}
			});
	};


	// pop up
	module.fotoBerkas = () => {
		el.foto.btnModal.on('click',function(e) {
			e.preventDefault();
			el.foto.modal.dialog({
					modal: true,
					minWidth: 850,
					closeText: "show",
					closeOnEscape: false,
					title: "Foto Kantor /Sekretariat"
			});
			$('.modal-foto').addClass('active');
		});
	};

	// modal close
	module.fotoClose = () => {
			el.foto.close.on('click', function(e) {
				e.preventDefault();
				el.foto.modal.dialog('close');
			});
	};

	// when item click
	module.fotoClick = function () {
		$('body').on('click', '.foto-item', function(event){
			$('body .foto-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputfoto').val(file);
		});
	};

	// module click submit
	module.fotoUpload = () => {
		el.foto.upload.on('change', function() {
			let url = "/ijin-ormas/berkas/postfoto";
			// console.log(url);
			var fileName = $(this).val();
			var file = this.files[0];
			var form = new FormData();
			form.append('namafile', file);
			form.append('_token', CSRF_TOKEN);

			$.ajax({
					url : url,
					type: 'POST',
					cache: false,
					dataType: 'JSON',
					contentType: false,
					processData: false,
					data : form
			}).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item foto-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> Foto Kantor /Sekretariat </p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.foto.grid.append(pdf);
					}
					// console.log(response);
			});
			// end ajax
		});
	};

	// get data
	module.dataFoto = (response) => {
		 let arrayFoto = response.data;
			arrayFoto.forEach( function(item) {
				if ((item.typefile) === 'foto') {
					let pdf = `
							<div class="grid-item foto-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> Foto Kantor /Sekretariat </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.foto.grid.append(pdf);
				}
			});
	};


	// pop up
	module.buktiBerkas = () => {
		el.bukti.btnModal.on('click',function(e) {
			e.preventDefault();
			el.bukti.modal.dialog({
					modal: true,
					minWidth: 850,
					closeText: "show",
					closeOnEscape: false,
					title: "Bukti Kepemilikan / Perjanjian Kontrak / Ijin Kantor/Sekretariat"
			});
			$('.modal-bukti').addClass('active');
		});
	};

	// modal close
	module.buktiClose = () => {
			el.bukti.close.on('click', function(e) {
				e.preventDefault();
				el.bukti.modal.dialog('close');
			});
	};

	// when item click
	module.buktiClick = function () {
		$('body').on('click', '.bukti-item', function(event){
			$('body .bukti-item').removeClass('selected');
			$(this).addClass('selected');
			let file = $(this).data('file');
			$('#inputbukti').val(file);
		});
	};

	// module click submit
	module.buktiUpload = () => {
		el.bukti.upload.on('change', function() {
			let url = "/ijin-ormas/berkas/postbukti";
			// console.log(url);
			var fileName = $(this).val();
			var file = this.files[0];
			var form = new FormData();
			form.append('namafile', file);
			form.append('_token', CSRF_TOKEN);

			$.ajax({
					url : url,
					type: 'POST',
					cache: false,
					dataType: 'JSON',
					contentType: false,
					processData: false,
					data : form
			}).done(response => {
					if(response.length != 0) {
							let pdf = `
									<div class="grid-item bukti-item" data-file="${response.path.namafile}">
										<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;padding-top:30px;display:block;margin:0 auto;padding: 30px auto;text-align:center">
										<p style="text-align:center"> Bukti Kepemilikan / Perjanjian Kontrak / Ijin Kantor/Sekretariat</p>
										<p style="text-align:center">${response.path.created_at}</p>
									</div>
							`;
							el.bukti.grid.append(pdf);
					}
					// console.log(response);
			});
			// end ajax
		});
	};

	// get data
	module.dataBukti = (response) => {
		 let arrayBukti = response.data;
			arrayBukti.forEach( function(item) {
				if ((item.typefile) === 'bukti') {
					let pdf = `
							<div class="grid-item bukti-item" data-file="${item.namafile}">
								<img src="/ijin-ormas/public/img/pdf-icon.png" style="width:60px;height:auto;display:block;margin:0 auto;padding: 0 auto;text-align:center;padding-top:30px">
								<p style="text-align:center"> Bukti Kepemilikan / Perjanjian Kontrak / Ijin Kantor/Sekretariat </p>
								<p style="text-align:center">${item.created_at}</p>
							</div>
					`;
						el.bukti.grid.append(pdf);
				}
			});
	};



	return module;
})();

jQuery(document).ready(function($) {
	Data.init();
});
