<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- logo -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Logo Organisasi
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <img src="{{ url('upload/logo') }}/{{ $row->logo }}" alt="" width="380px" style="margin: 0 auto;text-align:center;padding:0 auto;display:block">
      </div>
    </div>
  </div>
  <!-- bendera -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Bendera Organisasi
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <img src="{{ url('upload/bendera') }}/{{ $row->bendera }}" alt="" width="380px" style="margin: 0 auto;text-align:center;padding:0 auto;display:block">
      </div>
    </div>
  </div>
  <!-- akte -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Akte Pendirian
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <iframe src="{{ url('upload/akte') }}/{{ $row->akte }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
</div>
  <!-- Ad Art -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h4">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
          AD / ART
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h4">
      <div class="panel-body">
        <iframe src="{{ url('upload/adart') }}/{{ $row->adart }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- proker -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h5">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col5" aria-expanded="false" aria-controls="col5">
          Program kerja
        </a>
      </h4>
    </div>
    <div id="col5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h5">
      <div class="panel-body">
        <iframe src="{{ url('upload/proker') }}/{{ $row->programkerja }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- sk -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h6">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col6" aria-expanded="false" aria-controls="col6">
          SK Pengurus
        </a>
      </h4>
    </div>
    <div id="col6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h6">
      <div class="panel-body">
        <iframe src="{{ url('upload/sk') }}/{{ $row->skpengurus }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- ktp -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h7">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col7" aria-expanded="false" aria-controls="col7">
          Ktp Pengurus
        </a>
      </h4>
    </div>
    <div id="col7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h7">
      <div class="panel-body">
        <iframe src="{{ url('upload/ktp') }}/{{ $row->ktppengurus }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- dimisili -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h8">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col8" aria-expanded="false" aria-controls="col8">
          SK Domisili
        </a>
      </h4>
    </div>
    <div id="col8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h8">
      <div class="panel-body">
        <iframe src="{{ url('upload/domisili') }}/{{ $row->skdomisili }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- npwp -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h9">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col9" aria-expanded="false" aria-controls="col9">
         NPWP Organisasi
        </a>
      </h4>
    </div>
    <div id="col9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h9">
      <div class="panel-body">
        <iframe src="{{ url('upload/npwp') }}/{{ $row->npwp }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- foto sekre -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h10">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col10" aria-expanded="false" aria-controls="col10">
          Foto Sekretariat
        </a>
      </h4>
    </div>
    <div id="col10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h10">
      <div class="panel-body">
        <iframe src="{{ url('upload/foto') }}/{{ $row->fotosekretariat }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
  </div>
  <!-- bukti -->
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="h11">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#col11" aria-expanded="false" aria-controls="col11">
          SK penggunaan sekretariat
        </a>
      </h4>
    </div>
    <div id="col11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="h11">
      <div class="panel-body">
        <iframe src="{{ url('upload/bukti') }}/{{ $row->skpenggunaansekretariat }}" width="800" height="750" style="text-align:center;display:block;margin: 0 auto;padding: 0 auto"></iframe>
    </div>
  </div>
</div>
</div>
