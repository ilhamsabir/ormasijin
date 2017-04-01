<div class="col-md-6 col-md-offset-3">

<div class="panel">
  <div class="panel panel-warning" style="border:none;padding:20px 20px 20px 20px">
    <div class="panel-body">
      <form class="" action="{{ url('admin/aksi/updatelapangan') }}" method="post">
        {{ csrf_field() }}
        <div class="alert alert-success">
          <p align="center">
            Jika data valid pilih yes , jika tidak pilih no
          </p>
        </div>
        <div class="form-group">
          <input type="hidden" name="noregistrasi" value="{{ $row->noregistrasi }}">
          <input type="hidden" name="notif" value="send">
          <div class="radioBtn btn-group">
            <input type="radio" name="tahap" id="lapangan-yes" value="lapangan-yes" readonly="">
            <label>yes</label><br/>
            <input type="radio" name="tahap" id="lapangan-no" value="lapangan-no" readonly="">
            <label>no</label><br/>
          </div>
        </div>
        <div class="hidden form-group" id="yes-lapangan-input">
          <label for="" class="control-label">Pilih Tanggal Untuk Verifikasi Lapangan</label>
          <input class="input form-control" type="text" name="pesan_sukses" id="jadwal-lapangan" value="" readonly>
        </div>
        <div class="hidden form-group" id="no-lapangan-input">
          <label for="" class="control-label">Pesan</label>
          <textarea class="input form-control" type="text" name="pesan_gagal" row="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </form>
    </div>
  </div>
</div>


</div>
