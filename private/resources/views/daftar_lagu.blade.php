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
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<span class="tag tag-default tag-pill bg-primary float-xs-left">4</span>
								<span class="tag tag-default tag-pill bg-primary float-xs-right">4</span>
								Cras justo odio
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
@endsection