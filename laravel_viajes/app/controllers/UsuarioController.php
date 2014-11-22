<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 02/11/14
 * Time: 08:49 PM
 */
use Viajes\Entities\User;
use Viajes\manager\UsuarioManager;
use Viajes\Repositorio\UsuarioRepo;

class UsuarioController extends BaseController {


    public function obtenerDatosUsuario(){

        $user=Auth::user();
        return View::make('dashboard.UsuarioModi',compact('user'));
    }


    public function updateUsuario()
    {
        $rules = [
            'nombrecompleto'          => 'required|regex:/^[a-zéíóáú\s]+$/i',
            'email'              => 'required|email',
            'dni'                   => 'required|max:11|min:8',
            'celular'              => 'required|min:8|max:10|regex:/^[0-9]+$/i',

        ];

        $validation=\Validator::make(Input::all(),$rules);
     //   if($validation->passes()){

            $file=\Illuminate\Support\Facades\Input::file("foto");
            $idUsuario=Auth::user()->id;
             $user = User::find($idUsuario);


                $user->dni =Input::get("dni");
                $user->nombrecompleto=Input::get("nombrecompleto");
                $user->email=Input::get("email");
                $user->celular=Input::get("celular");
                $user->password=Hash::make(Auth::user()->password);
                $user->foto="fotoSubida/".Input::file("foto")->getClientOriginalName();

            if($user->save()){

                $file->move("fotoSubida",$file->getClientOriginalName());
                $mensaje="<hr><label class='label label-info'>Se actualizo el usuario.</label>";
                return Redirect::back()->with("mensaje",$mensaje);
            }
       /* }else{
            dd($validation->messages());
            //return Redirect::to('dashboard')->withErrors($validation->messages());
        }*/


    }



} 