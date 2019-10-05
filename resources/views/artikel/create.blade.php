@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Tambah Artikel</div>

	                <div class="card-body">
	                	<form method="post" action="{!! route('artikel.store') !!}" >
	                		@include('artikel.form')
	                	</form>

	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection