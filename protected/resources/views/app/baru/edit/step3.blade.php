<div class="form-group">
    <label class="col-md-4 control-label">Lambang / Logo Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="logo" readonly id="inputlogo"/>
    </div>
    <button class="btn btn-md btn-default col-md-2 add-file" id="logoBerkas"><i class="fa fa-image"></i> </button>
</div>
<!-- bendera -->
<div class="form-group">
    <label class="col-md-4 control-label">Bendera Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="bendera" id="inputbendera" readonly/>
    </div>
    <button class="btn btn-md btn-default col-md-2 add-file" id="bendera-berkas"><i class="fa fa-image"></i> </button>
</div>
<!-- akte -->
<div class="form-group">
    <label class="col-md-4 control-label">Akte Pendirian Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="akte" id="inputakte" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="akte-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- adart -->
<div class="form-group">
    <label class="col-md-4 control-label">Ad/ART Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="adart" id="inputadart" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="adart-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- program kerja -->
<div class="form-group">
    <label class="col-md-4 control-label">Program Kerja Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="programkerja" id="inputproker" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="proker-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- sk pengurus -->
<div class="form-group">
    <label class="col-md-4 control-label">SK Pengurus  Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="skpengurus" id="inputsk" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="sk-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- ktp -->
<div class="form-group">
    <label class="col-md-4 control-label">KTP Pengurus Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="ktppengurus" id="inputktp" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="ktp-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- sk domisili -->
<div class="form-group">
    <label class="col-md-4 control-label">SK Domisili Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="skdomisili" id="inputdomisili" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="domisili-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- npwp -->
<div class="form-group">
    <label class="col-md-4 control-label">NPWP Atas Nama Organisasi </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="npwp" id="inputnpwp" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="npwp-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- Foto kantor /sekretariat -->
<div class="form-group">
    <label class="col-md-4 control-label">Foto Kantor /Sekretariat </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="fotosekretariat" id="inputfoto" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="foto-berkas"><i class="fa fa-file-o"></i> </button>
</div>
<!-- npwp -->
<div class="form-group">
    <label class="col-md-4 control-label">Bukti Kepemilikan / Perjanjian Kontrak / Ijin Kantor/Sekretariat </label>
    <div class="col-md-6 margin-bottom--20">
      <input class="form-control" type="text" name="skpenggunaansekretariat" id="inputbukti" readonly/>
    </div>
    <button class="btn btn-md btn-danger col-md-2 add-file" id="bukti-berkas"><i class="fa fa-file-o"></i> </button>
</div>

@include('app.baru.pengisiandata.berkas.logo')
@include('app.baru.pengisiandata.berkas.bendera')
@include('app.baru.pengisiandata.berkas.akte')
@include('app.baru.pengisiandata.berkas.adart')
@include('app.baru.pengisiandata.berkas.proker')
@include('app.baru.pengisiandata.berkas.sk')
@include('app.baru.pengisiandata.berkas.ktp')
@include('app.baru.pengisiandata.berkas.domisili')
@include('app.baru.pengisiandata.berkas.npwp')
@include('app.baru.pengisiandata.berkas.foto')
@include('app.baru.pengisiandata.berkas.bukti')
