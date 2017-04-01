<?php

// API Routes
include 'api.php';


Route::get('/', function () {
	// return view('home');
	return redirect('web');
});

// Front Page Route
Route::group(['prefix' => 'web'], function () {

	// index route
  Route::get('/', 'FrontPageController@index');

	// Auth Route
	Route::auth();

	// Monitoring Berkas
	Route::get('/monitoring', 'FrontPageController@monitoring');

	// Pengaduan
	Route::get('/pengaduan', 'FrontPageController@pengaduan');

	// Alur
	Route::get('/alur', 'FrontPageController@alur');

	// Persyaratan
	Route::get('/persyaratan', 'FrontPageController@persyaratan');

	// Monev Ormas
	Route::get('/monev', 'FrontPageController@monev');

	// Berita
	Route::get('/berita', 'FrontPageController@berita');

	// Call center
	Route::get('/callcenter', 'FrontPageController@callcenter');

});

// App Route
Route::group(['prefix' => 'app'], function () {
	// dashboard
	Route::get('/dashboard', 'HomeController@index');

	Route::get('/pesan', 'OrganisasiController@pesan');
	Route::post('/usersend', 'AksiController@usersendpesan');
	Route::get('/history', 'OrganisasiController@history');

	Route::post('/readnotif', 'NotifController@readnotifuser');
	Route::post('/readnotifverifikasi', 'NotifController@readnotifverifikasi');

	Route::get('/ubah/{id}', 'OrganisasiController@ubahdata');
	Route::post('/aksi/ubah', 'AksiController@ubahdata');
	// registrasi
	Route::group(['prefix' => 'registrasi'], function () {

		// reg baru
		Route::group(['prefix' => 'baru'], function () {
			// pengisian data
			Route::get('/pengisiandata', 'OrganisasiController@pengisiandata');
			// verifikasi lapangan
			Route::get('/verifikasilapangan', 'OrganisasiController@verifikasilapangan');
			// verifikasi wawancara
			Route::get('/wawancara', 'OrganisasiController@wawancara');
			// verifikasi pengambilanskt
			Route::get('/pengambilanskt', 'OrganisasiController@pengambilanskt');

		});


		// perpanjang
		// Route::get('/perpanjang', 'HomeController@index');

	});
});

Route::group(['middleware' => 'isadmin'], function () {
	Route::group(['prefix' => 'admin'], function () {
		Route::get('/dashboard', 'Admin\ViewController@dashboard');
		Route::get('/dataormas', 'Admin\ViewController@dataormas');
		Route::get('/detaildataormas/{id}', 'Admin\ViewController@detaildataormas');
		Route::get('/datalapangan', 'Admin\ViewController@datalapangan');
		Route::get('/datawawancara', 'Admin\ViewController@datawawancara');
		Route::get('/datapengambilan', 'Admin\ViewController@datapengambilan');
		Route::get('/pesan', 'Admin\ViewController@pesan');
		Route::post('/adminsendpesan', 'Admin\ViewController@adminsendpesan');
		Route::get('/pesan/{id}', 'Admin\ViewController@detailpesan');
		Route::get('/berita', 'Admin\ViewController@berita');

		Route::group(['prefix' => 'api'], function () {
			Route::get('/dataormas', 'Admin\ViewController@dataormasapi');
			Route::get('/datalapangan', 'Admin\ViewController@datalapanganapi');
			Route::get('/datapesan', 'Admin\ViewController@getpesanadmin');
		});

		Route::group(['prefix' => 'aksi'], function () {
			  Route::post('/updatelapangan', 'AksiController@updatelapangan');
			  Route::post('/updatewawancara', 'AksiController@updatewawancara');
			  Route::post('/updatepengambilan', 'AksiController@updatepengambilan');
		});
	});
});
