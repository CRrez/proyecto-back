<?php

namespace App\Repositories;

use Exception;
use App\Models\Articulo;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

//use Your Model

class ArticuloRepo
{
    /**
     * @return string
     *  Return the model
     */
 


        public function registrarArticulo($request)
        {
            try {
                $Articulo = Articulo::where('id', $request->id)->first();
    
                $Articulo = new Articulo();
                $Articulo->nombre = $request->nombre;
                $Articulo->precio = $request->precio;
                $Articulo->save();
                return response()->json(["articulos" => $Articulo], Response::HTTP_OK);
            } catch (Exception $e) {
                return response()->json([
                    "error" => $e->getMessage(),
                    "linea" => $e->getLine(),
                    "file" => $e->getFile(),
                    "metodo" => __METHOD__
                ], Response::HTTP_BAD_REQUEST);
            }
        }
        public function actualizaArticulo($request)
        {
            try {
                $Articulo = Articulo::find($requestonChange->id);
                $Articulo->nombre = $request->nombre;
                $Articulo->precio = $request->precio;
                $Articulo->save();
                return response()->json(["articulos" => $Articulo], Response::HTTP_OK);
            } catch (Exception $e) {
                Log::info([
                    "error" => $e->getMessage(),
                    "linea" => $e->getLine(),
                    "file" => $e->getFile(),
                    "metodo" => __METHOD__
                ]);
    
                return response()->json([
                    "error" => $e->getMessage(),
                    "linea" => $e->getLine(),
                    "file" => $e->getFile(),
                    "metodo" => __METHOD__
                ], Response::HTTP_BAD_REQUEST);
            }
        }

        public function EliminarArticulo($request)
        {
            try {
                $Articulo = Articulo::find($request->id);
                $Articulo->delete();
    
                return response()->json(["articulos" => $Articulo], Response::HTTP_OK);
            } catch (Exception $e) {
                Log::info([
                    "error" => $e->getMessage(),
                    "linea" => $e->getLine(),
                    "file" => $e->getFile(),
                    "metodo" => __METHOD__
                ]);
    
                return response()->json([
                    "error" => $e->getMessage(),
                    "linea" => $e->getLine(),
                    "file" => $e->getFile(),
                    "metodo" => __METHOD__
                ], Response::HTTP_BAD_REQUEST);
            }
        }
        public function listaArticulo($request)
        {
            try {
          
                if(isset($request->limit)){
                 $Articulo = Articulo::select(['id','nombre','precio'])
                ->orderBy('id','ASC')
                ->paginate($request->limit);
                }
                
                else{ 
                    $Articulo = Articulo::select(['id','nombre','precio'])
                    ->orderBy('id','ASC')
                    
                    ->get();
                }
                 return response()->json(["articulos" => $Articulo], Response::HTTP_OK);
             } catch (Exception $e) {
                 Log::info([
                     "error" => $e->getMessage(),
                     "linea" => $e->getLine(),
                     "file" => $e->getFile(),
                     "metodo" => __METHOD__
                 ]);
     
                 return response()->json([
                     "error" => $e->getMessage(),
                     "linea" => $e->getLine(),
                     "file" => $e->getFile(),
                     "metodo" => __METHOD__
                 ], Response::HTTP_BAD_REQUEST);
             }
        }
}
