@extends('layouts.app')
@section('title', 'Daftar Lagu')
@section('content')
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Daftar Lagu</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url()}}">Home</a></li>
						<li class="breadcrumb-item active">Daftar Lagu</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="content-body"><!-- Search form-->
			<section id="search-website" class="card overflow-hidden">
				<div class="card-header">
					<h4 class="card-title">Daftar Lagu</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
				</div>
				<div class="card-body collapse in">
					<div class="col-lg-12">
						<br>
						<div class="row">
							<div class="col-lg-1 col-xs-3">
								<h1 style="font-size: 30pt;">1.</h1>
							</div>
							<div class="col-lg-10 col-xs-9" style="margin-left: -30px;">
								<div class="row">
									<h2>Haleluya</h2>
									<div style="margin-top: -5px;">Haleluya kho yehowa</div>
								</div>
							</div>
						</div><div class="row">
							<div class="col-lg-1 col-xs-3">
								<h1 style="font-size: 30pt;">1.</h1>
							</div>
							<div class="col-lg-10 col-xs-9" style="margin-left: -30px;">
								<div class="row">
									<h2>Haleluya</h2>
									<div style="margin-top: -5px;">Haleluya kho yehowa</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection