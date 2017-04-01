@extends('app.layout')
@section('content')

<div class="container container-app">
	<div class="row">
	<div class="col-md-12">
		<table id="data-lapangan" class="display table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th style="background: rgb(79, 200, 212);">Nama</th>
					<th style="background: rgb(79, 200, 212);">Nama Organisasai</th>
					<th style="background: rgb(79, 200, 212);">Alamat Sekretariat</th>
					<th style="background: rgb(79, 200, 212);">Bidang Kegiatan</th>
					<th style="background: rgb(79, 200, 212);"></th>
				</tr>
			</thead>
		</table>
	</div>
	</div><!-- /.row -->
</div>


<div class="modal" id="modal-lapangan-content">
 <form class="" action="{{ url('admin/aksi/updatewawancara') }}" method="post">
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
						<input type="hidden" name="noregistrasi" id="input-reg-lapangan">
						<input type="hidden" name="tahap" value="wawancara-yes">
						<input type="hidden" name="notif" value="send">
						<input class="input form-control col-md-4" type="text" name="pesan_sukses" id="jadwal-wawancara" readonly>
					</div>
			 </div>
		 </div>
	 </div>
	 <div class="grid-content grid-adart"></div>
	 <div class="footer-modal">
		 <button type="button" class="btn btn-md btn-default close-modal-lapangan" name="button">Close</button>
		 <button type="submit" class="btn btn-primary btn-sm">Submit</button>
	 </div>
 </form>
</div>




@endsection
