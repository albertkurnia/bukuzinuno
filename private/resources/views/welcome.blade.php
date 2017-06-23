@extends('layouts.app')
@section('title', 'Cari Lagu')
@section('content')
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
				<div class="px-2 py-3 row mb-0 mt-3">
					<img class="img-fluid mx-auto d-block pb-3 pt-4 width-65-per" src="{{url('app-assets/images/logo/bz-logo-dark-big.png')}}" alt="Robust Search">
					<form action="{{url('search')}}">
						<fieldset class="form-group position-relative">
							<input type="text" class="form-control form-control-lg input-lg" id="cari" name="q" placeholder="Cari nomor atau judul...">					
						</fieldset>
						<div class="row py-2">
							<div class="col-xs-12 text-xs-center">
								<button type="submit" class="btn btn-success btn-md"><i class="icon-ios-search-strong"></i> Cari Lagu</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection