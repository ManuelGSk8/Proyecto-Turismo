<?php
/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 07/11/14
 * Time: 02:27 AM
 */


use Viajes\Entities\Agenciaturistica;
use Viajes\Entities\Paqueteturistico;

class PaqueteTuristicoController extends BaseController {

        private  $idAgenciaTuristica;
        public function  consultarSiPaquetesTuristicos(){

            $id =Auth::user()->id;
            $cantidad=Agenciaturistica::countAgenciaTuristica($id);

            if(($cantidad)>0){
               return View::make('dashboard.admi_paquete');

            }else{
                $mensaje="No tiene una Agencia Turistica Registrado";
                $error="<div class='alert alert-block alert-error fade in'>"."
                                  <button data-dismiss='alert' class='close' type='button'>×</button>".
                    "<h4 class='alert-heading'>Error!</h4>".
                    "<p>".$mensaje." </p>".
                    "</div>";
                return Redirect::back()->with("mensaje",$error);
            }
        }

        public function savePaquete()
        {
            $id =Auth::user()->id;
            $idAgencia=Agenciaturistica::consultarIdAgencia($id);
            $file=\Illuminate\Support\Facades\Input::file("foto");
           if(Input::has('remember')==true){
                $estado=1;
            }else{
                $estado=0;
            }
           //    $urlImagen="fotoSubida/".Input::file('foto')->getClientOriginalName();

           $paquete=new Paqueteturistico(array(
                "nombre_paquete"=>Input::get("nombre_paquete"),
                "duracion_paqueteDias"=>Input::get("duracion_paqueteDias"),
                "duracion_paqueteNoches"=>Input::get("duracion_paqueteNoches"),
                "fecha_inicio"=>date("d-m-Y",strtotime("05/12/1989")),
                "fecha_fin"=>date("d-m-Y",strtotime("05/12/1989")),
                "precio"=>Input::get("precio"),
                "info_basica"=>Input::get("info_basica"),
                "region"=>"Sierra",
                "estado"=>"desactivado",
                "agencia_id"=>$idAgencia[0]->id,
                "promocion"=>$estado,

                "foto_paquete"=>"fotoSubida/".Input::file('foto')->getClientOriginalName(),
               "foto_paquete_android"=>base64_encode(Input::file('foto')->getClientOriginalName()),
                "descuentoPorc"=>Input::get("porcentaje")

            ));

            if($paquete->save()){

                $id =Auth::user()->id;
                $paquetes=Paqueteturistico::consultarPaquetesTuristicos($id);
                $file->move("fotoSubida",$file->getClientOriginalName());
                return Redirect::route('paquetes-turisticos');
            }

        }
        public function showPaquetes()
        {
            $id =Auth::user()->id;
            $paquetes=Paqueteturistico::consultarPaquetesTuristicos($id);
            return View::make('dashboard.paquete',compact('paquetes'));
        }
        public function showAdmiPaquetes()
        {
            return View::make('dashboard.admi_paquete');
        }
        public function publicarPaqueteTuristico($slug){

            $paqueteTuristico=Paqueteturistico::actualizarEstadoPaquete($slug);
            if($paqueteTuristico->estado=="No Publicado"){
                $paqueteTuristico->estado="Publicado";
                $paqueteTuristico->save();
                return Redirect::route('paquetes-turisticos');

            }else{
                $paqueteTuristico->estado="No Publicado";
               $paqueteTuristico->save();
                return Redirect::route('paquetes-turisticos');

            }
        }
        public function editarPaqueteTuristico($slug){
            $paqueteTuristico=Paqueteturistico::find($slug);
            //dd($paqueteTuristico);
               return View::make('dashboard.admi_paquete_Modi',compact('paqueteTuristico'));

        }
        public function actualizarPaquetesTuristico($slug){

        }
        public function creacionIteracion(){

            return View::make('dashboard.creacion_iteracion');
        }
}
