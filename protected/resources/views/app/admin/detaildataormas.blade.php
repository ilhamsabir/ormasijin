@extends('app.layout')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="container container-app">

			<div class="row">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Data</a></li>
            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true">Data Berkas</a></li>
            <li><a href="#tab_3" data-toggle="tab">Aksi</a></li>
          </ul>
          <div class="tab-content">
            @foreach ($data as $row)
            <div class="tab-pane row active" id="tab_1">
							<div class="col-md-12">
            	  @include('app.admin.detailormas.data')
							</div>
            </div>
            <div class="tab-pane row" id="tab_2">
							<div class="col-md-12">
              	@include('app.admin.detailormas.berkas')
							</div>
            </div>
            <div class="tab-pane row" id="tab_3">
							<div class="col-md-12">
								@include('app.admin.detailormas.aksi')
							</div>
            </div>
            @endforeach
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
      </div>

	<!-- /.content -->
</div>
@endsection
