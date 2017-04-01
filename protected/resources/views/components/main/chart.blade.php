@push('styles')
	<!-- <link rel="stylesheet" href="{{ asset('public/css/report-charts.css') }}"> -->
@endpush

<div class="col-md-8">
  <div class="card__border--top">
    <div class="card-content">
      <div class="card-header-title">
        <h4>Monev ORMAS/LSM</h4>
      </div>
      <div class="card-content__cart">
          <div id="monev-chart"></div>
      </div>
    </div>
  </div>
</div>

@push('scripts')
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="{{ asset('public/js/module/main/chart-module.js') }}"></script>
@endpush
