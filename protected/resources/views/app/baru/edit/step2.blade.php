<div class="form-group">
   <label class="col-md-4 control-label">Nama Pendiri Organisasi</label>
   <div class="col-md-8 margin-bottom--20">
     <input class="form-control" type="text" name="namapendiri" value="{{ $key->namapendiri }}" required>
   </div>
 </div>

<div class="form-group">
 <label class="col-md-4 control-label">Nama Pembina Organisasi <font color="red">&nbsp;*</font></label>
 <div class="col-md-8 margin-bottom--20">
   <input class="form-control" type="text" name="namapembina" value="{{ $key->namapembina }}" required>
 </div>
</div>

<div class="form-group">
   <label class="col-md-4 control-label">Nama Penasehat Organisasi <font color="red">&nbsp;*</font></label>
   <div class="col-md-8 margin-bottom--20">
     <input class="form-control" type="text" name="namapenasehat" value="{{ $key->namapenasehat }}" required>

   </div>
 </div>


  <!-- Ketua -->
  <h4 class="biodata">Biodata Ketua</h4>
   <div class="form-group">
       <label class="col-md-4 control-label">Nama <font color="red">&nbsp;*</font></label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="namaketua" value="{{ $key->namaketua }}" required/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Gelar </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="gelarketua" value="{{ $key->gelarketua }}"/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Nama Panggilan </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="panggilanketua" value="{{ $key->panggilanketua }}"/>
        </div>
   </div>
   <div class="form-group">
     <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
      <div class="col-xs-4 margin-bottom--20">
         <input type="text" class="form-control" name="tempatlahirketua" value="{{ $key->tempatlahirketua }}"/>
      </div>
      <div class="col-md-4 margin-bottom--20">
      <div id="dp-ex-3" class="input-group date" data-auto-close="true" data-date="12-02--2016" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
           <input class="form-control tgl-lahir-ketua" type="text" name="tgllahirketua" value="{{ $key->tgllahirketua }}" readonly/>
           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
       </div>
     </div> <!-- /.col -->

   </div>
   <div class="form-group">
     <label class="col-md-4 control-label">Jenis Kelamin </label>
      <div class="col-md-8 margin-bottom--20">
      <select class="form-control" name="jeniskelaminketua">
        <option value="{{ $key->jeniskelaminketua }}">{{ $key->jeniskelaminketua }}</option>
        <option value="pria">Laki - laki</option>
        <option value="wanita">Perempuan</option>
      </select>
      </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Pendidikan </label>
        <div class="col-md-8 margin-bottom--20">
            <select class="form-control" name="pendidikanketua">
                <option value="{{ $key->pendidikanketua }}">{{ $key->pendidikanketua }}</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
           </select>
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Agama </label>
        <div class="col-md-8 margin-bottom--20">

             <select class="form-control" name="agamaketua">
                 <option value="{{ $key->agamaketua }}">{{ $key->agamaketua }}</option>
                 <option value="Islam">Islam</option>
                 <option value="Kristen Protestan">Kristen Protestan</option>
                 <option value="Kristen Katolik">Kristen Katolik</option>
                 <option value="Budha">Budha</option>
                 <option value="Hindu">Hindu</option>
             </select>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Status Pernikahan </label>
        <div class="col-md-8 margin-bottom--20">
        <select class="form-control" name="statusketua" id="s2_basic">
          <option value="{{ $key->statusketua }}">{{ $key->statusketua }}</option>
          <option value="menikah">Menikah</option>
          <option value="belum">Belum Menikah</option>
        </select>
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">No Hp</label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="nohpketua" value="{{ $key->nohpketua }}"/>
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Email </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="email" class="form-control" name="emailketua" value="{{ $key->emailketua }}" />
        </div>
   </div>


   <!-- Sekretaris -->
    <h4 class="biodata">Biodata Sekretaris</h4>
    <div class="form-group">
       <label class="col-md-4 control-label">Nama <font color="red">&nbsp;*</font></label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="namasekretaris" value="{{ $key->namasekretaris }}" required/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Gelar </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="gelarsekretaris" value="{{ $key->gelarsekretaris }}"/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Nama Panggilan </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="panggilansekretaris" value="{{ $key->panggilansekretaris }}"/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
        <div class="col-xs-4 margin-bottom--20">
           <input type="text" class="form-control" name="tempatlahirsekretaris" value="{{ $key->tempatlahirsekretaris }}" />
        </div>
   <div class="col-md-4 margin-bottom--20">
      <div id="dp-ex-4" class="input-group date" data-auto-close="true" data-date="12-02--2016" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
           <input class="form-control tgl-lahir-bendahara" type="text" name="tgllahirsekretaris" value="{{ $key->tgllahirsekretaris }}" readonly/>
           <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
       </div>

       </div> <!-- /.col -->

   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Jenis Kelamin </label>
        <div class="col-md-8 margin-bottom--20">
        <select class="form-control" name="jeniskelaminsekretaris">
          <option value="{{ $key->jeniskelaminsekretaris }}">{{ $key->jeniskelaminsekretaris }}</option>
          <option value="pria">Laki - laki</option>
          <option value="wanita">Perempuan</option>
        </select>

        </div>
   </div>

   <div class="form-group">
       <label class="col-md-4 control-label">Pendidikan </label>
        <div class="col-md-8 margin-bottom--20">
            <select class="form-control" name="pendidikansekretaris">
                <option value="{{ $key->pendidikansekretaris }}">{{ $key->pendidikansekretaris }}</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
           </select>
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Agama </label>
        <div class="col-md-8 margin-bottom--20">

             <select class="form-control" name="agamasekretaris">
                 <option value="{{ $key->agamasekretaris }}">{{ $key->agamasekretaris }}</option>
                 <option value="Islam">Islam</option>
                 <option value="Kristen Protestan">Kristen Protestan</option>
                 <option value="Kristen Katolik">Kristen Katolik</option>
                 <option value="Budha">Budha</option>
                 <option value="Hindu">Hindu</option>
             </select>
        </div>
   </div>

   <div class="form-group">
       <label class="col-md-4 control-label">Status Pernikahan </label>
        <div class="col-md-8 margin-bottom--20">
        <select id="s2_basic" class="form-control" name="statussekretaris" >
          <option value="{{ $key->statussekretaris }}">{{ $key->statussekretaris }}</option>
          <option value="menikah">Menikah</option>
          <option value="belum">Belum Menikah</option>
        </select>

        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">No Hp</label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="nohpsekretaris" value="{{ $key->nohpsekretaris }}" />
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Email </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="email" class="form-control" name="emailsekretaris" value="{{ $key->emailsekretaris }}"/>
        </div>
   </div>

   <!-- Bendahara -->
    <h4 class="biodata">Biodata Bendahara</h4>
    <div class="form-group">
       <label class="col-md-4 control-label">Nama <font color="red">&nbsp;*</font></label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="namabendahara" value="{{ $key->namabendahara }}" required/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Gelar </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="gelarbendahara" value="{{ $key->gelarbendahara }}"/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Nama Panggilan </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="panggilanbendahara" value="{{ $key->panggilanbendahara }}"/>
        </div>
   </div>
   <div class="form-group">
       <label class="col-md-4 control-label">Tempat & Tanggal Lahir </label>
        <div class="col-xs-4 margin-bottom--20">
           <input type="text" class="form-control" name="tempatlahirbendahara" value="{{ $key->tempatlahirbendahara }}"/>
        </div>
       <div class="col-md-4 margin-bottom--20">
        <div id="dp-ex-4" class="input-group date" data-auto-close="true" data-date="12-02--2016" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
             <input class="form-control tgl-lahir-bendahara" type="text" name="tgllahirbendahara" value="{{ $key->tgllahirbendahara }}" readonly/>
             <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
         </div>
       </div> <!-- /.col -->
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Jenis Kelamin </label>
        <div class="col-md-8 margin-bottom--20">
        <select class="form-control" name="jeniskelaminbendahara">
          <option value="{{ $key->jeniskelaminbendahara }}">{{ $key->jeniskelaminbendahara }}</option>
          <option value="pria">Laki - laki</option>
          <option value="wanita">Perempuan</option>
        </select>

        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Pendidikan </label>
        <div class="col-md-8 margin-bottom--20">
            <select class="form-control" name="pendidikanbendahara">
                <option value="{{ $key->pendidikanbendahara }}">{{ $key->pendidikanbendahara }}</option>
                <option value="S3">S3</option>
                <option value="S2">S2</option>
                <option value="S1">S1</option>
                <option value="SMA">SMA</option>
                <option value="SMP">SMP</option>
                <option value="SD">SD</option>
           </select>
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Agama </label>
        <div class="col-md-8 margin-bottom--20">
             <select class="form-control" name="agamabendahara">
                 <option value="{{ $key->agamabendahara }}">{{ $key->agamabendahara }}</option>
                 <option value="Islam">Islam</option>
                 <option value="Kristen Protestan">Kristen Protestan</option>
                 <option value="Kristen Katolik">Kristen Katolik</option>
                 <option value="Budha">Budha</option>
                 <option value="Hindu">Hindu</option>
             </select>
        </div>
   </div>

   <div class="form-group">
       <label class="col-md-4 control-label">Status Pernikahan </label>
        <div class="col-md-8 margin-bottom--20">
        <select id="s2_basic" class="form-control" name="statusbendahara" >
          <option value="{{ $key->statusbendahara }}">{{ $key->statusbendahara }}</option>
          <option value="menikah">Menikah</option>
          <option value="belum">Belum Menikah</option>
        </select>

        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">No Hp</label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" value="{{ $key->nohpbendahara }}" name="nohpbendahara" />
        </div>
   </div>

    <div class="form-group">
       <label class="col-md-4 control-label">Email </label>
        <div class="col-md-8 margin-bottom--20">
           <input type="email" class="form-control" name="emailbendahara" value="{{ $key->emailbendahara }}"/>
        </div>
   </div>

   <!--Kepengurusan -->

   <div class="form-group">
       <label class="col-md-4 control-label">Masa Bhakti Kepengurusan<font color="red">&nbsp;*</font></label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="masabakti" value="{{ $key->masabakti }}" required/>
        </div>
   </div>

  <div class="form-group">
       <label class="col-md-4 control-label">Keputusan Tertinggi Organisasi<font color="red">&nbsp;*</font></label>
        <div class="col-md-8 margin-bottom--20">
           <input type="text" class="form-control" name="keputusantertinggi" value="{{ $key->keputusantertinggi }}" required/>
        </div>
   </div>

<div class="form-group">
  <label class="col-md-4 control-label">Unit / Satuan / Organisasi<font color="red">&nbsp;*</font></label>
  <div class="col-md-8 margin-bottom--20">
     <input type="text" class="form-control" name="unit" value="{{ $key->unit }}" required/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Usaha Organisasi<font color="red">&nbsp;*</font></label>
  <div class="col-md-8 margin-bottom--20">
     <input type="text" class="form-control" name="usaha" value="{{ $key->usaha }}" required/>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Sumber Keuangan<font color="red">&nbsp;*</font></label>
  <div class="col-md-8 margin-bottom--20">
     <input type="text" class="form-control" name="sumberkeuangan" value="{{ $key->sumberkeuangan }}" required/>
  </div>
</div>
