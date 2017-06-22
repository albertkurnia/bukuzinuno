@extends('layouts.app')
@section('title', 'Pencarian')
@section('content')
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Pencarian</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url()}}">Home</a></li>
						<li class="breadcrumb-item active">Pencarian</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="content-body"><!-- Search form-->
			<section id="search-website" class="card overflow-hidden">
				<div class="card-header">
					<h4 class="card-title">Cari lagu...</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>

				</div>
				<div class="card-body collapse in">
					<div class="card-block pb-0">
						<form id="pencarian">
							<fieldset class="form-group position-relative mb-0">
								<input type="text" class="form-control form-control-lg input-lg" id="iconLeft" name="q" placeholder="Cari nomor atau judul lagu" value="{{$input['q']}}">
								<div class="form-control-position">
									<i class="icon-ios-search-strong font-medium-4" style="cursor: pointer;" onclick="$('#pencarian').submit()"></i>
								</div>
							</fieldset>
						</form>
					</div>
					<!--Search Navbar-->

					<!--/ Search Navbar-->
					<!--Search Result-->
					<div id="search-results" class="card-block">
						<div class="col-lg-8">
							@if($input['q'] != '')
							<p class="text-muted font-small-3">Sekitar {{count($data)}} hasil ({{ number_format((microtime(true) - LARAVEL_START), 2) }} detik) </p>
							<ul class="media-list row">
								<!--search with list-->                      
								@foreach($data as $row)
								<li class="media">
									<div class="media-body">
										<p class="lead mb-0"><a href="{{url('lagu/'.$row->nomor)}}"><span class="text-bold-600">{{$row->nomor}}.</span> {{$row->judul}}</a></p>
										<p class="mb-0">
											<a href="{{url('lagu/'.$row->nomor)}}" class="green darken-1">{{url('lagu/'.$row->nomor)}}<i class="icon-caret-down" aria-hidden="true"></i></a>
										</p>
										<p>{{substr($row->lirik, 0, 100)}}...</p>
									</div>
								</li>
								@endforeach
							</ul>
							@endif
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection