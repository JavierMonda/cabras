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

    public function postCreate(Request $request) {
        // Guardamos en una variable el nombre de la imagen
        $nombreImg = $request->file('imagen')->getClientOriginalName();
        // Movemos la imagen a la carpeta img
        $imagen = $request->file('imagen')->move("img/", $nombreImg);
        // Creamos nueva instancia de capa
        $c = new Capa;
        $c->nombre = $request->input('nombre');
        $c->imagen = $imagen;
        $c->descripcion = $request->input('descripcion');
        $c->save();
        // Redireccionamos al Index del catálogo
        return redirect()->action('CatalogController@getIndex');
    }

    public function putEdit(Request $request, $id) {
        $id = Capa::findOrFail($id);
        // Guardamos en una variable el nombre de la imagen
        $nombreImg = $request->file('imagen')->getClientOriginalName();
        // Movemos la imagen a la carpeta img
        $imagen = $request->file('imagen')->move("img/", $nombreImg);
        $id->nombre = $request->input('nombre');
        $id->imagen = $imagen;
        $id->descripcion = $request->input('descripcion');
        $id->save();
        return redirect()->action('CatalogController@getShow',['id'=>$id]);
    }
}
