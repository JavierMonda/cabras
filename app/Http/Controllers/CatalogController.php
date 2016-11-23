<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Capa;

class CatalogController extends Controller
{
    public function getIndex() {
        $capas = Capa::all();
    	return view('catalog.index', ['capas' => $capas]);
    }

    public function getShow($id) {
        $id = Capa::findOrFail($id);
    	return view('catalog.show', ['id' =>$id]);
    }

    public function getCreate() {
    	return view('catalog.create');
    }

    public function getEdit($id) {
        $id = Capa::findOrFail($id);
    	return view('catalog.edit', ['id' =>$id]);
    }
}
