<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ArticuloRepo;
use App\Requests\Articulo;

class ArticuloCOntroller extends Controller
{
    public function __construct(ArticuloRepo $ArticuloRepo){
        $this->ArticuloRepo = $ArticuloRepo;
    }


public function registrarArticulo(Request $request){
    return $this->ArticuloRepo->registrarArticulo($request);
    
}
public function actualizaArticulo(Request $request){
    return $this->ArticuloRepo->actualizaArticulo($request);
}

public function listaArticulo(Request $request){
    return $this->ArticuloRepo->listaArticulo($request);
    
}

public function EliminarArticulo(Request $request){
    return $this->ArticuloRepo->EliminarArticulo($request);
    
}
}
