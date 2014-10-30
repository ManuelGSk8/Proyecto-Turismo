<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

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
                /* $id = Auth::id();
                 $email = Auth::user()->email;
                 dd('ingreso '.$id.'  '. $email);*/
                return Redirect::to('/dashboard');
            }
            else{
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }
    }

	public function upAgencia()
	{
		return Redirect::route('home');
	}

	public function showPaquetes()
	{
		return View::make('dashboard.paquete');
	}

	public function showAdmiPaquetes()
	{
		return View::make('dashboard.admi_paquete');
	}

	public function savePaquete()
	{
		return View::make('dashboard.paquete');
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
                return 'OK';
            }else{
                return 'ERROR';
            }

    }

}
