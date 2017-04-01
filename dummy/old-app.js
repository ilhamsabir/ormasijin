var App = (function() {
	"use strict";

	var module = {};
	let ijin = '/ijin-ormas';
	const el = {};
	let iduser = $('meta[name="csrf-token"]');

	// Initialize Report
	module.init = function () {

		module.requestDataTahap();
		// module.getDataOrmas();
		// ChartMain.init();
		this.initSelector();
		this.checkStepVerify();
		this.jadwalTahap();
		module.modalLapangan();
		module.modalWawancara();
		module.modalPengambilan();
		module.modalPengambilanClose();
		module.modalWawancaraClose();
		module.modalLapanganClose();

		module.toogleLapangan();

		module.messageAdmin();
		// module.notifOrganisasi();

		module.requestPesan();
		module.requestPesanAdmin();

		module.getToIdUser();


	};

	// Init Selector
	module.initSelector = function () {

	};

	module.requestDataTahap = () => {
		let url = ijin+"/tahap/data";
		$.ajax({
			url: url,
			dataType: 'JSON'
		}).success(response => {
			// console.log(response);
				module.dataOrmasData(response.data);
				module.notifOrganisasiUser(response.data);
		});
	};

	module.dataOrmasData = (data) => {
		const dataForOrmas = $.grep(data,function(item, index){
				return item.tahap == "" || item.tahap === "lapangan-no";
		});
		const dataForLapangan = $.grep(data,function(item, index){
				return item.tahap === "lapangan-yes" || item.tahap === "wawancara-no";
		});
		const dataForWawancara = $.grep(data,function(item, index){
				return item.tahap === "wawancara-yes" || item.tahap === "pengambilan-no";
		});
		const dataForPengambilan = $.grep(data,function(item, index){
				return item.tahap === "pengambilan-yes";
		});

		const dataNotifVerifyLapangan = $.grep(data,function(item, index){
				return item.id === iduser.data('id');
		});

		module.getDataOrmas(dataForOrmas);
		module.getDataLapangan(dataForLapangan);
		module.getDataWawancara(dataForWawancara);
		module.getDataPengambilan(dataForPengambilan);

		if (dataNotifVerifyLapangan[0].tahap == "lapangan-yes" && dataNotifVerifyLapangan[0].notif == "send") {
			module.notifVerifySuccessForLapangan(dataForLapangan);
		} else if (dataNotifVerifyLapangan[0].tahap == "lapangan-no" && dataNotifVerifyLapangan[0].notif == "send") {
			module.notifVerifyGagalForLapangan(dataForLapangan);
		}

		// console.log(dataNotifVerifyLapangan[0].tahap);

	};

	module.getDataOrmas = (data) => {
		$('#data-ormas').DataTable( {
				"data": data,
				"columns": [
            { "data": "name" },
            { "data": "namaorganisasi" },
            { "data": "alamatsekretarian" },
            { "data": "bidangkegiatan" },
						{ "data": "noregistrasi", "render": function(noregistrasi, type, full, meta){
                var detail_data = '<a href="'+ijin+'/admin/detaildataormas/'+noregistrasi+'" class="btn btn-sm btn-default">Detail</a>';
                return detail_data;
            }
        }
        ],
        "order": [[1, 'asc']]
    });
	};

	module.getDataLapangan = (dataForLapangan) => {
	  $('#data-lapangan').DataTable( {
	      "data": dataForLapangan,
	      "columns": [
	          { "data": "name" },
	          { "data": "namaorganisasi" },
	          { "data": "alamatsekretarian" },
	          { "data": "bidangkegiatan" },
	          { "data": "noregistrasi", "render": function(noregistrasi, type, full, meta){
	              // var button = '<button id="modal-lapangan" class="btn btn-sm btn-default">Detail</button>';
								let button = `<button id="modal-lapangan" data-reg="${noregistrasi}" class="btn btn-sm btn-default">Aksi</button>`;
	              return button;
	          }
	      }
	      ],
	      "order": [[1, 'asc']]
	  });
	};

	module.getDataWawancara = (wawancara) => {
	  $('#data-wawancara').DataTable( {
	      "data": wawancara,
	      "columns": [
	          { "data": "name" },
	          { "data": "namaorganisasi" },
	          { "data": "alamatsekretarian" },
	          { "data": "bidangkegiatan" },
	          { "data": "noregistrasi", "render": function(noregistrasi, type, full, meta){
	              let button = `<button id="modal-wawancara" data-reg="${noregistrasi}" class="btn btn-sm btn-default">Aksi</button>`;
	              return button;
	          }
	      }
	      ],
	      "order": [[1, 'asc']]
	  });
	};

	module.getDataPengambilan = (dataForPengambilan) => {
	  $('#data-pengambilan').DataTable( {
	      "data": dataForPengambilan,
	      "columns": [
	          { "data": "name" },
	          { "data": "namaorganisasi" },
	          { "data": "alamatsekretarian" },
	          { "data": "bidangkegiatan" },
	          { "data": "noregistrasi", "render": function(noregistrasi, type, full, meta){
	              let button = `<button id="modal-pengambilan" data-reg="${noregistrasi}" class="btn btn-sm btn-default">Aksi</button>`;
	              return button;
	          }
	      }
	      ],
	      "order": [[1, 'asc']]
	  });
	};


	module.toogleLapangan = () => {
		$('#yes-lapangan-input').addClass('hidden');
		$('#no-lapangan-input').addClass('hidden');
		$('#lapangan-yes').on('click', function(){
				$('#yes-lapangan').addClass('hidden');

				$('#yes-lapangan-input').removeClass('hidden');
				$('#no-lapangan-input').addClass('hidden');
		})
		$('#lapangan-no').on('click', function(){
				$('#yes-lapangan').addClass('hidden');

				$('#no-lapangan-input').removeClass('hidden');
				$('#yes-lapangan-input').addClass('hidden');
		})
	};

	// check tahap
	module.checkStepVerify = () => {
		// let url = ijin+"/tahap/verify";
		// $.ajax({
		// 	url: url,
		// 	dataType: 'JSON'
		// }).success(response => {
		// 		if(response.data.length >= 1) {
		// 			// console.log(response.data[0]);
		// 			module.checkverify(response.data[0]);
		// 		} else {
		// 			$('#tahap-verfikasi-pengisian').removeClass('disable-link');
		// 		}
		// 	//  console.log(response.data.length);
		// });
	};


	// notif
	module.notifOrganisasiUser = (datanotif) => {
		// let id = iduser.data('id');
		// if (id != 1) {
		// 	const datanotifuser = $.grep(datanotif,function(item, index){
		// 			return item.iduser == id;
		// 	});
		//
		// 		if (datanotifuser[0].notif == "send") {
		// 			$('#label-notif-user').append(`<i class="fa fa-bullhorn"></i> Notifikasi <span class="label label-danger">1</span></a>`);
		// 		} else {
		// 			$('#label-notif-user').append(`<i class="fa fa-bullhorn"></i> Notifikasi</a>`);
		// 		}
		//
		// }
	};


	// cek verify
	module.checkverify = (tahap) => {
		if ( tahap.step == "1" ) {
			$('#pengisian-data-baru').html('');
			$('#tahap-verfikasi-lapangan').removeClass('disable-link');
			$('#content-verify-lapangan').html(`Kami akan melakukan verifikasi lapangan pada tanggal ${tahap.jadwallapangan}`)
			// console.log(tahap);
		} else if ( tahap.step == "2" ) {
			$('#pengisian-data-baru').html('');
			$('#verifikasi-data-lapangan').html('');
			$('#verifikasi-data-pengambilan').html('');
			$('#tahap-verfikasi-wawancara').removeClass('disable-link');
			$('#tahap-verfikasi-lapangan').addClass('disable-link');
			$('#content-verify-wawancara').html(`Anda akan dijadwalkan untuk wawancara pada tanggal ${tahap.jadwalwawancara}`)
		} else if ( tahap.step == "3" ){
			$('#pengisian-data-baru').html('');
			$('#verifikasi-data-lapangan').html('');
			$('#verifikasi-data-wawancara').html('');
			$('#tahap-verfikasi-pengambilan').removeClass('disable-link');
			$('#tahap-verfikasi-lapangan').addClass('disable-link');
			$('#tahap-verfikasi-wawancara').addClass('disable-link');
			$('#content-verify-pengambilan').html(`Anda dijadwalkan untuk pengambilan SKT pada tanggal ${tahap.jadwalpengambilan}`)
		} else {
			$('#tahap-verfikasi-pengisian').removeClass('disable-link');
		}
	};

	module.jadwalTahap = () => {
		module.jadwalTahapLapangan();
		module.jadwalTahapWawancara();
		module.jadwalTahapPengambilan();
	};

	module.jadwalTahapLapangan = () => {
		$('#jadwal-lapangan').datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	module.jadwalTahapWawancara = () => {
		$('#jadwal-wawancara').datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	module.jadwalTahapPengambilan = () => {
		$('#jadwal-pengambilan').datepicker({
			format:'dd/mm/yyyy',
      changeMonth: true,
      changeDate: true,
			autoclose: true
		});
	};

	module.modalLapangan = () => {
		$('body').on('click','#modal-lapangan', function(e) {
			let datareg = $(this).data('reg');
			$('#input-reg-lapangan').val(datareg);
			e.preventDefault();
			$('#modal-lapangan-content').dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Verifikasi Data Lapangan"
			});
			$('.modal-lapangan-body').addClass('active');
		});
	};

	// modal close
	module.modalLapanganClose = () => {
			$('.close-modal-lapangan').on('click', function(e) {
				e.preventDefault();
				$('#modal-lapangan-content').dialog('close');
			});
	};

	module.modalWawancara = () => {
		$('body').on('click', '#modal-wawancara',function(e) {
			let datareg = $(this).data('reg');
			$('#input-reg-wawancara').val(datareg);
			e.preventDefault();
			$('#modal-wawancara-content').dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Verifikasi Data Wawancara"
			});
			$('.modal-wawancara-body').addClass('active');
		});
	};

	// modal close
	module.modalWawancaraClose = () => {
			$('.close-modal-wawancara').on('click', function(e) {
				e.preventDefault();
				$('#modal-wawancara-content').dialog('close');
			});
	};

	module.modalPengambilan = () => {
		$('#modal-pengambilan').on('click',function(e) {
			console.log('obj');
			e.preventDefault();
			$('#modal-pengambilan-content').dialog({
					modal: true,
					minWidth: 850,
				 	closeText: "show",
					closeOnEscape: false,
					title: "Verifikasi Data <Pengmabilan>SKT</Pengmabilan>"
			});
			$('.modal-pengambilan-body').addClass('active');
		});
	};

	// modal close
	module.modalPengambilanClose = () => {
			$('.close-modal-pengambilan').on('click', function(e) {
				e.preventDefault();
				$('#modal-pengambilan-content').dialog('close');
			});
	};

	module.messageAdmin = () => {
		module.newMessageAdmin();
	};

	module.newMessageAdmin = () => {
		$('.message-menu').on('click', function() {
			$('.message-menu').removeClass('active');
			$('.message-content').removeClass('active');
			const tab = $(this).data('tab');
			// console.log(tab);
			$(this).addClass('active');
			$('#'+tab).addClass('active');
		});
	};

	module.requestPesan = () => {
		$.ajax({
			url: ijin+'/data/pesan',
			dataType: 'JSON'
		}).success(response => {
			// console.log();
				module.showPesanUser(response.data);
		});
	};

	module.showPesanUser = (data) => {
		const datapesan = $.grep(data,function(item, index){
				return item.fromid === iduser.data('id') || item.toid === iduser.data('id');
		});
		// console.log(datapesan.length);
		let i = 0;
		datapesan.forEach((elem, index) => {
			module.attrPesanUser(elem);
			if (iduser.data('id') != 1 && elem.status == "sendtouser") {
					module.notifyMessage(elem);
			}
		});
	};

	module.attrPesanUser = (datapesan) => {
		let id = iduser.data('id');
			if (datapesan.fromid == id) {
				$('#chat-user').append(`
						<div class="chat-message left">
							<img class="message-avatar" src="../public/img/user.png" alt="">
							<div class="message">
									<a class="message-author" href="#"> ${datapesan.name} </a>
									<span class="message-date"> ${datapesan.created_at} </span>
									<span class="message-content">${datapesan.isi} </span>
							</div>
						</div>
					`);
			} else {
				$('#chat-user').append(`
					<div class="chat-message right">
							<img class="message-avatar" src="../public/img/cs1.png" alt="">
								<div class="message">
										<a class="message-author" href="#"> ${datapesan.name} </a>
										<span class="message-date"> ${datapesan.created_at} </span>
										<span class="message-content">${datapesan.isi} </span>
								</div>
					</div>
				`);
			}
	};

	module.requestPesanAdmin = () => {
		$.ajax({
			url: ijin+'/admin/api/datapesan',
			dataType: 'JSON'
		}).success(response => {
				module.showPesanAdmin(response.data);
		});
	};

	module.showPesanAdmin = (datapesan) => {
		const adminpesan = $.grep(datapesan, function(elem) {
				return elem.id != 1;
		});
		// console.log(adminpesan);
		module.attrPesanAdmin(adminpesan);
	};

	module.attrPesanAdmin = (datapesan) => {
		$('#data-pesan').DataTable( {
				"data": datapesan,
				"columns": [
            { "data": "name" },
            { "data": "isipesan" , "render": function(isipesan, type, full, meta) {
								var isipesan = '<p>'+isipesan.substr(0,100)+'</p>';
								return isipesan;
							}
						},
            { "data": "pesancreated_at" },
						{ "data": "idpesan", "render": function(idpesan, type, full, meta){
	                var detail_data = '<a href='+ijin+'/admin/pesan/'+idpesan+'" class="btn btn-sm btn-warning">read</a>';
	                return detail_data;
            		}
        		}
        ],
        "order": [[1, 'asc']]
    });
	};

	module.getToIdUser = () => {
		let toIdUser = $('#pesan-user-admin-detail').data('id');
		$('#toid-from-admin').val(toIdUser);
	};

	module.notifyMessageTemplate = (notif) => {
		$.notify.addStyle('pesan', {
			html:
				`<div>
					<div class='clearfix'>
						<div class='title' data-notify-html='title'/>
						<div class='buttons'>
							<form class="" action="${ijin}/app/readnotif" method="post">
									<input type="hidden" name="_token" value="${iduser.attr('content')}">
									<input type="hidden" name="status" value="read">
									<input type="hidden" name="id" value="${notif.idpesan}">
									<button type='submit'>cek</button>
							</form>
						</div>
					</div>
				</div>`
		});

		//listen for click events from this style
		$(document).on('click', '.notifyjs-pesan-base .no', function() {
			//programmatically trigger propogating hide event
			$(this).trigger('notify-hide');
		});
		$(document).on('click', '.notifyjs-pesan-base .yes', function() {
			//show button text
			alert($(this).text() + " clicked!");
			//hide notification
			$(this).trigger('notify-hide');
		});

	};

	module.notifyMessage = (data) => {
		module.notifyMessageTemplate(data);
		$.notify({
		  title: '<i class="fa fa-comments-o"></i> Anda mendapat pesan !!! '
		}, {
		  style: 'pesan',
			showAnimation: 'slideDown',
			showDuration: 400,
		  autoHide: false,
		  clickToHide: false
		});
	};

	module.notifyVerfikasiSuksesTemplate = (notif) => {
		$.notify.addStyle('verifikasi-success', {
			html:
				`<div>
					<div class='clearfix'>
						<div class='title' data-notify-html='title'/>
						<div class='buttons'>
							<form class="" action="${ijin}/app/readnotif" method="post">
									<input type="hidden" name="_token" value="${iduser.attr('content')}">
									<input type="hidden" name="status" value="read">
									<input type="hidden" name="id" value="${notif.idpesan}">
									<button type='submit'>detail</button>
							</form>
						</div>
					</div>
				</div>`
		});

		//listen for click events from this style
		$(document).on('click', '.notifyjs-verifikasi-success-base .no', function() {
			//programmatically trigger propogating hide event
			$(this).trigger('notify-hide');
		});
		$(document).on('click', '.notifyjs-verifikasi-success-base .yes', function() {
			//show button text
			alert($(this).text() + " clicked!");
			//hide notification
			$(this).trigger('notify-hide');
		});

	};

	module.notifVerifySuccessForLapangan = (lap) => {
		module.notifyVerfikasiSuksesTemplate(lap);
		$.notify({
		  title: '<i class="fa fa-check-circle"></i> Sukses verifikasi ... '
		}, {
		  style: 'verifikasi-success',
			showAnimation: 'slideDown',
			showDuration: 400,
		  autoHide: false,
		  clickToHide: false
		});
	};

	module.notifyVerfikasiGagalTemplate = (notif) => {
		$.notify.addStyle('verifikasi-gagal', {
			html:
				`<div>
					<div class='clearfix'>
						<div class='title' data-notify-html='title'/>
						<div class='buttons'>
							<form class="" action="${ijin}/app/readnotifverifikasi" method="post">
									<input type="hidden" name="_token" value="${iduser.attr('content')}">
									<input type="hidden" name="notif" value="read">
									<input type="hidden" name="noregistrasi" value="${notif.noregistrasi}">
									<button type='submit'>detail</button>
							</form>
						</div>
					</div>
				</div>`
		});

		//listen for click events from this style
		$(document).on('click', '.notifyjs-verifikasi-gagal-base .no', function() {
			//programmatically trigger propogating hide event
			$(this).trigger('notify-hide');
		});
		$(document).on('click', '.notifyjs-verifikasi-gagal-base .yes', function() {
			//show button text
			alert($(this).text() + " clicked!");
			//hide notification
			$(this).trigger('notify-hide');
		});

	};

	module.notifVerifyGagalForLapangan = (lap) => {
		module.notifyVerfikasiGagalTemplate(lap);
		$.notify({
		  title: '<i class="fa fa-close"></i> Gagal verifikasi '
		}, {
		  style: 'verifikasi-gagal',
			showAnimation: 'slideDown',
			showDuration: 400,
		  autoHide: false,
		  clickToHide: false
		});
	};


	// module.detailPesanAdmin = (datapesan) => {
	// 	let id = iduser.data('id');
	// 	console.log(datapesan.toid);
	// 	// $('#toid-from-admin').val(data)
	// 		if (datapesan.toid == id) {
	// 			$('#admin-detail-pesan').append(`
	// 					<div class="chat-message left">
	// 						<img class="message-avatar" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
	// 						<div class="message">
	// 								<a class="message-author" href="#"> ${datapesan.name}</a>
	// 								<span class="message-date"> ${datapesan.created_at} </span>
	// 								<span class="message-content">${datapesan.isi} </span>
	// 						</div>
	// 					</div>
	// 				`);
	// 		} else {
	// 			$('#admin-detail-pesan').append(`
	// 				<div class="chat-message right">
	// 						<img class="message-avatar" src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="">
	// 							<div class="message">
	// 									<a class="message-author" href="#"> ${datapesan.name} </a>
	// 									<span class="message-date"> ${datapesan.created_at} </span>
	// 									<span class="message-content">${datapesan.isi} </span>
	// 							</div>
	// 				</div>
	// 			`);
	// 		}
	// };

	return module;
})();

jQuery(document).ready(function($) {
	App.init();
});
