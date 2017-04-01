<?php

Route::group(['prefix' => 'aksi'], function () {
  Route::post('/pengisiandata', 'AksiController@ijinbaru');
});

Route::group(['prefix' => 'tahap'], function () {
  Route::get('/data', 'TahapController@alldata');
  Route::get('/verfiyuser', 'TahapController@verfiyuser');
});



Route::group(['prefix' => 'berkas'], function () {
	// route logo
  Route::get('/getdata', 'BerkasController@getData');
  Route::post('/postlogo', 'BerkasController@uploadlogo');
  Route::post('/postbendera', 'BerkasController@uploadbendera');
  Route::post('/postakte', 'BerkasController@uploadakte');
  Route::post('/postadart', 'BerkasController@uploadadart');
  Route::post('/postproker', 'BerkasController@uploadproker');
  Route::post('/postsk', 'BerkasController@uploadsk');
  Route::post('/postktp', 'BerkasController@uploadktp');
  Route::post('/postdomisili', 'BerkasController@uploaddomisili');
  Route::post('/postnpwp', 'BerkasController@uploadnpwp');
  Route::post('/postfoto', 'BerkasController@uploadfoto');
  Route::post('/postbukti', 'BerkasController@uploadbukti');
});

Route::group(['prefix' => 'data'], function () {
  Route::get('/baru', 'Admin\DataController@getdata');
  Route::get('/pesan', 'OrganisasiController@getpesanuser');
});

Route::group(['prefix' => 'notif'], function () {
  Route::get('/notifuser', 'NotifController@notifUser');
});


?>
