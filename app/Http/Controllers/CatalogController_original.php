<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CatalogController extends Controller
{
    private $arrayCapas = array(
            array(
                'nombre' => 'Puipana',
                'imagen' => 'puipana.jpg',
                'descripcion' => 'Una de las más frecuentes. También llamada Pupana'
            ),        
            array(
                'nombre' => 'Blanca',
                'imagen' => 'blanca.jpg',
                'descripcion' => 'Como su propio nombre indica es totalmente blanca'
            )
        );
    public function getIndex() {
        
    	return view('catalog.index', array('arrayCapas'=>$this->arrayCapas));
    }

    public function getShow($id) {
    	return view('catalog.show', array('id'=>$this->arrayCapas[$id]));
    }

    public function getCreate() {
    	return view('catalog.create');
    }

    public function getEdit($id) {
    	return view('catalog.edit', array('id'=>$this->arrayCapas[$id]));
    }
}
