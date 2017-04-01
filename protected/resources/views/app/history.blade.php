@extends('app.layout')

@section('content')
<div class="container container-app">
  <div class="row">
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">History</a></li>
        <li class="active">Data</li>
      </ol>
      <div id="history-user">
        
      </div>

      <!-- <ul class="timeline">
        @foreach ($data as $key)
          @if( $key->pesansuksesorganisasi >= 1 )
          <li>
            <div class="timeline-panel">
              <div class="timeline-body">
                <p>{{ $key->pesansuksesorganisasi }}</p>
              </div>
            </div>
          </li>
          @elseif ($key->pesangagalorganisasi >= 1)
          <li>
            <div class="timeline-panel">
              <div class="timeline-body">
                <p>{{ $key->pesangagalorganisasi }}</p>
              </div>
            </div>
          </li>
          @endif
        @endforeach
      </ul> -->
    </div>
  </div>
</div>
@endsection
