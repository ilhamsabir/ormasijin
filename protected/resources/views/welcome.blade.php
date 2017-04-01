@extends('layouts.main')

@section('content')
<section class="content">
  <div class="container no-padding">
      <div class="row">
          <!-- NEws Components -->
          @include('components.main.berita')

          <!-- Login components -->
          @include('components.main.login')

      </div>
  </div>
</section>

<section class="content">
  <div class="container no-padding">
      <div class="row">
          <div class="col-md-4 no-padding">
            <!-- Monitoring components -->
            @include('components.main.monitoring')

            <!-- Alamat components -->
            @include('components.main.alamat')
          </div>
          <!-- Chart components -->
          @include('components.main.chart')
      </div>
  </div>
</section>

@endsection
