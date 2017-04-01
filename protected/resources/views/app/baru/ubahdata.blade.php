@extends('app.layout')
@push('app.styles')
	<link rel="stylesheet" href="{{ asset('public/css/pengisian-data.css') }}">
@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="container container-app">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Edit data</li>
      </ol>


        <div class="row form-group">
          <div class="col-xs-12">
              <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                  <li class="active"><a href="#step-1">
                      <h4 class="list-group-item-heading">Step 1</h4>
                      <p class="list-group-item-text">Pengisian Data ORMAS/LSM</p>
                  </a></li>
                  <li class="disabled"><a href="#step-2">
                      <h4 class="list-group-item-heading">Step 2</h4>
                      <p class="list-group-item-text">Pengisian Data Pengurus</p>
                  </a></li>
                  <li class="disabled"><a href="#step-3">
                      <h4 class="list-group-item-heading">Step 3</h4>
                      <p class="list-group-item-text">Pengisian Kelengkapan Berkas</p>
                  </a></li>
              </ul>

          </div>
      </div>
          <form class="" action="{{ url('/app/aksi/ubah') }}" method="post">
            {{ csrf_field() }}
        @foreach ($data as $key)
          <div class="row setup-content" id="step-1">
              <div class="col-xs-12">
                  <div class="col-md-12 step-content text-center">
                      @include('app.baru.edit.step1')
                      <div class="form-group">
                          <button id="activate-step-2" class="btn btn-primary btn-md pull-right col-sm-2">Selanjutnya</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row setup-content" id="step-2">
              <div class="col-xs-12">
                  <div class="col-md-12 step-content">
                    @include('app.baru.edit.step2')
                    <div class="form-group">
                        <button id="activate-step-3" class="btn btn-primary btn-md pull-right col-sm-2">Selanjutnya</button>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row setup-content" id="step-3">
              <div class="col-xs-12">
                  <div class="col-md-12 step-content">
                      @include('app.baru.edit.step3')
                      <button type="submit" class="btn btn-success btn-md pull-right col-sm-2" name="button" style="margin-top:25px">Submit</button>

                  </div>
              </div>
          </div>
        </form>
  @endforeach



		</div>
	</div>
</div>
@endsection
@push('app.scripts')
  <script src="{{ asset('public/js/module/app/pengisian-data.js') }}"></script>
@endpush
