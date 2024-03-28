<?php

namespace App\Http\Controllers;

use MongoDB\Client;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function index(){
        //definir el servidor y el puerto
        $host = 'localhost';
        $puerto = '27017';

        //conexion a bd
        $client = new Client("mongodb://$host:$puerto");

        $filtrar = array();
        $options = array();

        $collection = $client -> laravel_mdb ->Productos;
        $datos = $collection->find($filtrar,$options);

        return view('Productos', compact('datos'));
    }
}
