<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listKategoriBerita=KategoriBerita::all(); //select * from kategori_berita

    	//blade
    	return view('kategori_berita.index',compact('listKategoriBerita'));
    	//return view( view: 'kategori_berita.index')->with('data',$listKategoriBerita);
    }

    public function show($id){
    	//Eloquent
    	//$KategoriBerita=KategoriBerita::where('id',$id)->first(); // select * from kategori_berita where id=$id limit I
    	$KategoriBerita=KategoriBerita::find($id);

    	return view('kategori_berita.show',compact('KategoriBerita'));
    }
    public function create(){
        return view('kategori_berita.create');
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriBerita::create($input);

        return redirect(route('kategori_berita.index'));
    }
}
