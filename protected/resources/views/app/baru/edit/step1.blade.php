

    <!-- no reg -->
    <input type="hidden" name="tanggalpengajuan" value="<?php echo  date("d/m/Y");?>">
    <input type="hidden" name="notif" value="read">
    <div class="form-group">
        <label class="col-sm-3 control-label">No Registrasi</label>
        <div class="col-md-9 margin-bottom--20">
          <input type="text" class="form-control" name="noregistrasi" value="{{ $key->noregistrasi }}" readonly="true">
        </div>
    </div>
    <!-- Nama organisasi -->
    <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Nama Organisasi</label>
        <div class="col-md-9 margin-bottom--20">
            <textarea name="namaorganisasi" rows="2" cols="54" id="nama-organisasi" required="required">{{ $key->namaorganisasi }}</textarea>
        </div>
    </div>
    <!-- Bidang lingkup -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Bidang Kegiatan</label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="bidangkegiatan" rows="2" cols="54" required="required">{{ $key->bidangkegiatan }}</textarea>
        </div>
    </div>
    <!-- Ruang lingkup -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Ruang Lingkup </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="ruanglingkup" rows="2" cols="54" required="required">{{ $key->ruanglingkup }}</textarea>
        </div>
    </div>
    <!-- Alamat -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Alamat Kantor/Sekretariat </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="alamatsekretarian" rows="2" cols="54" required="required">{{ $key->alamatsekretarian }}</textarea>
        </div>
    </div>

    <!--Tempat dan waktu pendirian -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tempat Pendirian </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="tempatpendirian" rows="2" cols="54" required="required">{{ $key->tempatpendirian }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tanggal Pendirian </label>
        <div class="col-md-9 margin-bottom--20">
          <input type="text" class="form-control" name="waktupendirian" id="waktu-pendirian" readonly=""  value="{{ $key->waktupendirian }}" required="required">
        </div>
    </div>
    <!-- Asas organisasi -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Asas Ciri Organisasi </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="asasorganisasi" rows="2" cols="54" required="required">{{ $key->asasorganisasi }}</textarea>
        </div>
    </div>
    <!-- tujuanorganisasi -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tujuan Organisasi </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="tujuanorganisasi" rows="2" cols="54" required="required">{{ $key->tujuanorganisasi }}</textarea>
        </div>
    </div>
