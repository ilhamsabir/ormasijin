@extends('app.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Penjadwalan Wawancara
		</h1>
	</section>

	<section class="content" id="verifikasi-data-wawancara">
		<div class="box">
			<div class="box-body">
				<div class="success-page">
					<div class="success-page__header">
						<i class="fa fa-check-circle-o"></i>
					</div>
					<div class="success-page__subheader">
						Verifikasi Lapangan Sukses
					</div>
					<div class="success-page__body" id="content-verify-wawancara"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
@endsection
