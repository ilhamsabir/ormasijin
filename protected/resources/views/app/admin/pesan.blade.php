@extends('app.layout')
@section('content')

<div class="container container-app">
   <div class="row">
     <div class="col-md-12 card-table">
       <div class="tabel-pesan">
         <table id="data-pesan" class="display table table-hover" cellspacing="0" width="100%"></table>
       </div>
     </div>

   </div>
</div>

  <div class="modal" id="modal-wawancara-content">
   <form class="" action="{{ url('admin/aksi/updatepengambilan') }}" method="post">
  	 <div class="panel">
  		 <div class="panel-default">
  			 <div class="panel-body">
  				 <div class="alert alert-success">
  					<p align="center">
  						Jika data benar dan sesuai dengan persyaratan , silahkan atur jadwal untuk melakukan wawancara
  					</p>
  				</div>
  					{{ csrf_field() }}
  					<div class="col-md-6 form-group">
  						<label for="" class= "control-label">Pilih Tanggal Untuk Verifikasi Lapangan</label>
  						<input type="hidden" name="noregistrasi" id="input-reg-wawancara">
  						<input type="hidden" name="tahap" value="pengambilan-yes">
  						<input type="hidden" name="notif" value="pengambilan-yes">
  						<input class="input form-control col-md-4" type="text" name="pesan" id="jadwal-pengambilan" readonly>
  					</div>
  			 </div>
  		 </div>
  	 </div>
  	 <div class="grid-content grid-adart"></div>
  	 <div class="footer-modal">
  		 <button type="button" class="btn btn-md btn-default close-modal-wawancara" name="button">Close</button>
  		 <button type="submit" class="btn btn-primary btn-sm">Submit</button>
  	 </div>
   </form>
  </div>
@endsection
