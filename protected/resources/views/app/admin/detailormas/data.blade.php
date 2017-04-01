<div class="col-md-12">
  <div class=" data-card">
    <h2>Data Personal</h2>
    <table class="table table-striped" width="330">
      <tr>
        <td width="60">Nama</td>
        <td width="120">{{ $row->name }}</td>
      </tr>
      <tr>
        <td width="60">Alamat</td>
        <td width="120">{{ $row->alamat }}</td>
      </tr>
      <tr>
        <td width="60">No Handphone</td>
        <td width="120">{{ $row->no_tlp }}</td>
      </tr>
      <tr>
        <td width="60">Email</td>
        <td width="120">{{ $row->email }}</td>
      </tr>
    </table>
  </div>
</div>

<div class="col-md-12">
  <div class="data-card">
    <h2>Data Organisasi</h2>
    <table class="table table-striped">
      <tr>
        <td width="60">Nama organisasi</td>
        <td width="120">{{ $row->namaorganisasi }}</td>
      </tr>
      <tr>
        <td width="60">Bidang kegiatan</td>
        <td width="120">{{ $row->bidangkegiatan }}</td>
      </tr>
      <tr>
        <td width="60">Ruang lingkup</td>
        <td width="120">{{ $row->ruanglingkup }}</td>
      </tr>
      <tr>
        <td width="60">Alamat</td>
        <td width="120">{{ $row->alamatsekretarian }}</td>
      </tr>
      <tr>
        <td width="60">Tempat, tanggal pendirian</td>
        <td width="120">{{ $row->tempatpendirian }}, {{ $row->waktupendirian }}</td>
      </tr>
      <tr>
        <td width="60">Asas organisasi</td>
        <td width="120">{{ $row->asasorganisasi }}</td>
      </tr>
      <tr>
        <td width="60">Tujuan organisasi</td>
        <td width="120">{{ $row->tujuanorganisasi }}</td>
      </tr>
    </table>
  </div>
</div>

<div class="col-md-12">
  <div class="data-card">
    <h2>Data Kepengurusan</h2>
    <table class="table table-striped">
      <tr>
        <td width="60">Nama pendiri</td>
        <td width="120">{{ $row->namapendiri }}</td>
      </tr>
      <tr>
        <td width="60">Nama penasehat</td>
        <td width="120">{{ $row->namapenasehat }}</td>
      </tr>
      <tr>
        <td width="60">Nama pembina</td>
        <td width="120">{{ $row->namapembina }}</td>
      </tr>
    </table>
  </div>
</div>

<div class="col-md-12">
  <div class="data-card">
    <h2>Data Ketua</h2>
    <table class="table table-striped">
      <tr>
        <td width="60">Nama </td>
        <td width="120">{{ $row->namaketua }}</td>
      </tr>
      <tr>
        <td width="60">Tempat, tanggal lahir</td>
        <td width="120">{{ $row->tempatlahirketua }}, {{ $row->tgllahirketua }}</td>
      </tr>
      <tr>
        <td width="60">Jenis kelamin</td>
        <td width="120">{{ $row->jeniskelaminketua }}</td>
      </tr>
      <tr>
        <td width="60">Agama</td>
        <td width="120">{{ $row->agamaketua }}</td>
      </tr>
      <tr>
        <td width="60">Status pernikahan</td>
        <td width="120">{{ $row->statusketua }}</td>
      </tr>
      <tr>
        <td width="60">Pendidikan</td>
        <td width="120">{{ $row->pendidikanketua }}</td>
      </tr>
      <tr>
        <td width="60">No Hp</td>
        <td width="120">{{ $row->nohpketua }}</td>
      </tr>
      <tr>
        <td width="60">Email</td>
        <td width="120">{{ $row->emailketua }}</td>
      </tr>
    </table>
  </div>
</div>

<div class="col-md-12">
  <div class="data-card">
    <h2>Data Sekretaris</h2>
    <table class="table table-striped">
      <tr>
        <td width="60">Nama </td>
        <td width="120">{{ $row->namasekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Tempat, tanggal lahir</td>
        <td width="120">{{ $row->tempatlahirsekretaris }}, {{ $row->tgllahirsekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Jenis kelamin</td>
        <td width="120">{{ $row->jeniskelaminsekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Agama</td>
        <td width="120">{{ $row->agamasekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Status pernikahan</td>
        <td width="120">{{ $row->statussekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Pendidikan</td>
        <td width="120">{{ $row->pendidikansekretaris }}</td>
      </tr>
      <tr>
        <td width="60">No Hp</td>
        <td width="120">{{ $row->nohpsekretaris }}</td>
      </tr>
      <tr>
        <td width="60">Email</td>
        <td width="120">{{ $row->emailsekretaris }}</td>
      </tr>
    </table>
  </div>
</div>

<div class="col-md-12">
  <div class="data-card">
    <h2>Data Bendahara</h2>
    <table class="table table-striped">
      <tr>
        <td width="60">Nama </td>
        <td width="120">{{ $row->namabendahara }}</td>
      </tr>
      <tr>
        <td width="60">Tempat, tanggal lahir</td>
        <td width="120">{{ $row->tempatlahirbendahara }}, {{ $row->tgllahirbendahara }}</td>
      </tr>
      <tr>
        <td width="60">Jenis kelamin</td>
        <td width="120">{{ $row->jeniskelaminbendahara }}</td>
      </tr>
      <tr>
        <td width="60">Agama</td>
        <td width="120">{{ $row->agamabendahara }}</td>
      </tr>
      <tr>
        <td width="60">Status pernikahan</td>
        <td width="120">{{ $row->statusbendahara }}</td>
      </tr>
      <tr>
        <td width="60">Pendidikan</td>
        <td width="120">{{ $row->pendidikanbendahara }}</td>
      </tr>
      <tr>
        <td width="60">No Hp</td>
        <td width="120">{{ $row->nohpbendahara }}</td>
      </tr>
      <tr>
        <td width="60">Email</td>
        <td width="120">{{ $row->emailbendahara }}</td>
      </tr>
    </table>
  </div>
</div>
