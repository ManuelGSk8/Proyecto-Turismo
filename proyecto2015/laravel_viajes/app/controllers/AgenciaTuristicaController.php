<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 01/11/14
 * Time: 11:05 PM
 */

use Viajes\Entities\Agenciaturistica;
class AgenciaTuristicaController extends  BaseController{


    public function show (){


        return View::make('dashboard.AgenciaTuristica');

    }

    public function upAgencia()
    {

      $rules = [
             'ruc'                   => 'required|max:11|min:11|unique:agenciaturisticas',
             'razon_social'          => 'required|regex:/^[a-zéíóáú\s]+$/i',
             'telefono'              => 'required|min:8|max:10|regex:/^[0-9]+$/i',
             'direccion'             => 'required|',
             'contacto'              => 'required|email',
             'foto'                  => 'max:10000' //10000kb
        ];
        $mensaje=[
                'ruc.regex'=>'Solo se permite Numeros 0-9',
                'razon_social.regex'=>'Solo se permite letras',
                'telefono.regex'=>'Solo se permite Numeros 0-9',
                'foto.max'=>'El tamaño maximo de la imagen son 10000kb',
                'foto.mimes'=>'El archivo que pretendes subir no es una imagen',
                'ruc.unique'=>'El ruc se encuentra Registrado'

        ];
        $validation=\Validator::make(Input::all(),$rules);
        if($validation->passes()){

            $file=\Illuminate\Support\Facades\Input::file("foto");
            $idUsuario=Auth::user()->id;


                    $agencia=new Agenciaturistica(array(
                        "ruc"=>Input::get("ruc"),
                        "razon_social"=>Input::get("razon_social"),
                        "nombre_Comercial"=>Input::get("nombre_Comercial"),
                        "telefono"=>Input::get("telefono"),
                        "direccion"=>Input::get("direccion"),
                        "contacto"=>Input::get("contacto"),
                        "web"=>Input::get("web"),
                        "latitud" => Input::get('latitud'),
                        "longitud" => Input::get('longitud'),
                        "foto"=>Input::file("foto")->getClientOriginalName(),
                        "id_usuario"=>$idUsuario
                    ));

                    
                if($agencia->save()){
                    $file->move("fotoSubida",$file->getClientOriginalName());
                    $mensaje="<hr><label class='label label-info'>Se creo la agencia turistica.</label>";
                    return Redirect::back()->with("mensaje",$mensaje);
                }
        }else{
            dd($validation->messages());
            return Redirect::to('dashboard')->withErrors($validation->messages());
        }


    }

    public function actualizarAgencia(){



    }

   public function mostrarInforAgencia(){
       $id =Auth::user()->id;
       $cantidad=Agenciaturistica::countAgenciaTuristica($id);
       $infoAgencia=Agenciaturistica::infoAgenciaTuristica($id);

       if($cantidad>0){

           return View::make('dashboard.inicio',compact('infoAgencia'));
       }else{

           return View::make('dashboard.dashboard');
       }

   }
} 