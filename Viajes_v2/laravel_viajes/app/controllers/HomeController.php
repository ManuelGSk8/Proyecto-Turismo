<?php


Use Viajes\Repositories\AgenciaRepo;

class HomeController extends BaseController {

    protected  $agencia;

    public function  __construct(AgenciaRepo $agenciaTuristica){

        $this->agencia=$agenciaTuristica;
    }
    public function show()
	{
		return View::make('login');
	}

    public function login()
    {
        return View::make('login');
    }



    public function  logeo(){

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
            if(Auth::attempt($credentials)){

                $datosAgencia= $this->agencia->consultardatosAgencia(Auth::user()->id);
        //        dd($agenciaTuristica);
                if($datosAgencia=='0'){
                    return View::make('/dashboard/RegistroAgencia');
                }
                else{

                   Session::put('NombreEmpresa', $datosAgencia[0]->razon_social);
                    Session::put('idAgencia', $datosAgencia[0]->id);
                    return View::make('dashboard.dashboard',compact('datosAgencia'));
                }
            }else{
                return Redirect::to('/dashboard');
            }

        }
    }
    public function consultarDatos(){

    }
    public function logoutAction()
     {
         Auth::logout();
         return Redirect::route("home");
     }

    public function menuInicio(){
        return View::make('dashboard.dashboard',compact('datosAgencia'));


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
        $paquetes=Paqueteturistico::jsonConsultarPaquetespersonalizado($id);
        return Response::json($paquetes);
       // dd($paquetes);
    }
    public function jsonConsultarPaquetes(){
        $paquetes=Paqueteturistico::consultarPaquetesTuristicosTotales();
        return Response::json($paquetes);
    }
    public function jsonConsultarPaquetesJson(){
        $paquetes= Paqueteturistico::PaqueteAgenciaTuristicaJSON();
        return Response::json($paquetes);
    }
    public function jsonConsultarTodasAgencias(){
        $agenciaTuristica=Agenciaturistica::jsonConsultarTodaslasAgencias();
        return Response::json($agenciaTuristica);
    }
    public function jsonConsultarInfoAgencias($id){
        $agenciaTuristica=Agenciaturistica::jsonConsultarinfolasAgencias($id);
        $paqueteTuristico=Agenciaturistica::jsonConsultarinfolasAgenciasPaquete($id);
        return Response::json(array('agencia'=>$agenciaTuristica,'paquete'=>$paqueteTuristico));

    }
}



