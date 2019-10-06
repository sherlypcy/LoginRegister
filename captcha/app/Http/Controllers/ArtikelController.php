<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\kategori_artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$ListArtikel=Artikel::all();
    	return view ('artikel.index',compact('ListArtikel'));
    }


    public function show($id){
 		$artikel=Artikel::find($id);

 		return view('artikel.show',compact('artikel'));
    }

    public function create(){

    	$kategoriArtikel= kategori_artikel::pluck('nama','id');

    	return view('artikel.create', compact('kategoriArtikel'));
    }

    public function store(Request $request){
    	$input=$request->all();

    	Artikel::create($input);

    	return redirect(route('artikel.index'));
    }
}
