<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$ListArtikel=Artikel::all(); //select * from artikel

    	//blade
    	return view('artikel.index',compact('ListArtikel'));
    	//return view( view: 'artikel.index')->with('data',$listArtikel);
    }

    public function show($id){
    	//Eloquent
    	//$Artikel=Artikel::where('id',$id)->first(); // select * from artikel where id=$id limit I
    	$Artikel=Artikel::find($id);

    	return view('artikel.show',compact('Artikel'));
    }

    public function create(){

        $KategoriArtikel= KategoriArtikel::pluck('nama','id');

        return view('artikel.create',compact('KategoriArtikel'));
    }
    public function store(Request $request){
        $input=$request->all();
        artikel::create($input);
        return redirect(route ('artikel.index'));
    }
}
