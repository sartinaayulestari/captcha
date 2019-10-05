@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Berita</div>

                <div class="card-body">
               		 
               		 <div class="form-group row">
               		 	<label class="col-md-4 col-form-label text-md-right">ID</label>
               		 	<label class="col-md-4 col-form-label text-md-left">{!! $KategoriBerita->id !!}</label>
               		 </div>

               		 <div class="form-group row">
               		 	<label class="col-md-4 col-form-label text-md-right">Nama</label>
               		 	<label class="col-md-4 col-form-label text-md-left">{!! $KategoriBerita->nama !!}</label>
               		 </div>

               		 <div class="form-group row">
               		 	<label class="col-md-4 col-form-label text-md-right">Users Id</label>
               		 	<label class="col-md-4 col-form-label text-md-left">{!! $KategoriBerita->users_id !!}</label>
               		 </div>

               		 <div class="form-group row">
               		 	<label class="col-md-4 col-form-label text-md-right">Create</label>
               		 	<label class="col-md-4 col-form-label text-md-left">{!! $KategoriBerita->created_at->format('d/m/Y H:i') !!}</label>
               		 </div>

               		 <div class="form-group row">
               		 	<label class="col-md-4 col-form-label text-md-right">Update</label>
               		 	<label class="col-md-4 col-form-label text-md-left">{!! $KategoriBerita->updated_at->format('d/m/Y H:i') !!}</label>
               		 </div>

               		 <div class="form-group row mb-0">
                            <div class="col-md-0 offset-md-4">
                                <a href="{!! route('kategori_berita.index') !!}" class="btn btn-primary">
                                  Back   
                                </a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
