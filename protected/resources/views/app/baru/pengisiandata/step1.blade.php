

    <!-- no reg -->
    <input type="hidden" name="tanggalpengajuan" value="<?php echo  date("d/m/Y");?>">
    <div class="form-group">
        <label class="col-sm-3 control-label">No Registrasi</label>
        <div class="col-md-9 margin-bottom--20">
          <input type="text" class="form-control" name="noregistrasi" value="<?php echo time();?>" readonly="true">
        </div>
    </div>
    <!-- Nama organisasi -->
    <div class="form-group">
        <label for="password" class="col-sm-3 control-label">Nama Organisasi</label>
        <div class="col-md-9 margin-bottom--20">
            <textarea name="namaorganisasi" rows="2" cols="54" id="nama-organisasi" required="required"></textarea>
        </div>
    </div>
    <!-- Bidang lingkup -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Bidang Kegiatan</label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="bidangkegiatan" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>
    <!-- Ruang lingkup -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Ruang Lingkup </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="ruanglingkup" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>
    <!-- Alamat -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Alamat Kantor/Sekretariat </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="alamatsekretarian" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>

    <!--Tempat dan waktu pendirian -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tempat Pendirian </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="tempatpendirian" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tanggal Pendirian </label>
        <div class="col-md-9 margin-bottom--20">
          <input type="text" class="form-control" name="waktupendirian" id="waktu-pendirian" readonly="" required="required">
        </div>
    </div>
    <!-- Asas organisasi -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Asas Ciri Organisasi </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="asasorganisasi" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>
    <!-- tujuanorganisasi -->
    <div class="form-group">
        <label for="password-confirm" class="col-sm-3 control-label">Tujuan Organisasi </label>
        <div class="col-md-9 margin-bottom--20">
          <textarea name="tujuanorganisasi" rows="2" cols="54" required="required"></textarea>
        </div>
    </div>
