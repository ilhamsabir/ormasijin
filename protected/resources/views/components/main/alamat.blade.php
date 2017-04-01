<?php
    $data = Ijin::Alamat();
?>
<div class="col-md-12">
  <div class="card no-padding">
    @foreach ($data as $key=>$alamat )
    <div class="card-header-title no-padding">
      <iframe src="{{ $alamat['map'] }}" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <div class="card-content">
      <div class="card-content__address">
        <p><i class="fa fa-home"></i>  <b align="jusitfy"> {{ $alamat['alamat'] }} </b></p>
        <p><i class="fa fa-phone"></i> <b>  {{ $alamat['noHp'] }} </b></p>
      </div>
    </div>
    @endforeach
  </div>
</div>
