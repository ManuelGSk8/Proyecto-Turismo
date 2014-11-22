<?php

use Viajes\Entities\User;
use Viajes\Repositorio\UsuarioRepo;
use Viajes\Entities\Agenciaturistica;
use Viajes\Entities\Paqueteturistico;
class HomeController extends BaseController {


    public function show()
	{
		return View::make('login');
	}

    public function dashboard(){
        return View::make('dashboard.dashboard');
    }


    public function  login(){

        $rules = [
            'email'                 => 'required|email',
            'clave'              => 'required'
        ];

        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $credentials = [
                'email' => Input::get('email'),
                'password' => Input::get('clave')
            ];

            if (Auth::attempt($credentials))
            {
                $id =Auth::user()->id;
                $user=Agenciaturistica::countAgenciaTuristica($id);
                if($user>0){
                    $datosAgencia=Agenciaturistica::infoAgenciaTuristica($id);
                    return View::make('/dashboard/Inicio', compact('datosAgencia'));

                }else{
                    return Redirect::to('/dashboard');
                }


            }
            else{
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }
    }
    public function logoutAction()
     {
         Auth::logout();
         return Redirect::route("home");
     }







    /* Json */
    public function JsonLogin($usuario, $password){


            $credentials = [
                'email' => $usuario,
                'password' => $password
            ];

            if (Auth::attempt($credentials))
            {
                /* $id = Auth::id();
                 $email = Auth::user()->email;
                 dd('ingreso '.$id.'  '. $email);*/
                return Response::json(Auth::user());
            }else{
                return Response::json('Error');
            }

    }
    public function jsonConsultarPaquetespersonalizado($id){
        $paquetes=Paqueteturistico::consultarPaquetesTuristicos($id);
        return Response::json($paquetes);
    }
    public function jsonConsultarPaquetes(){
        $paquetes=Paqueteturistico::consultarPaquetesTuristicosTotales();
        return Response::json($paquetes);
    }
}


