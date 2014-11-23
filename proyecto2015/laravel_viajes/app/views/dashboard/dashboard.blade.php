@extends('layout')

@section('content')

<div class="row-fluid">
   <div class="span12">
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
       <h3 class="page-title">
         Administrar Agencia Turística
       </h3>
       <ul class="breadcrumb">
           <li>
               <a href="#">Inicio</a>
               <span class="divider">/</span>
           </li>
           <li>
               <a href="#">Administración</a>
               <span class="divider">/</span>
           </li>
           <li class="active">
               Agencia Turística
           </li>
       </ul>
       <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
 <div class="row-fluid">
     <div class="span12">
         <!-- BEGIN BLANK PAGE PORTLET-->
         <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Datos Generales de la empresa</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>

             <div class="widget-body">


                 <h1>{{Session::get("mensaje")}}</h1>
                 <!-- BEGIN FORM-->
                 {{ Form::open(['route' => 'upagencia', 'method' => 'POST', 'class'=>'form-horizontal','enctype' => 'multipart/form-data','novalidate']) }}
                 <div class="control-group">
                     {{ Form::label('raz_soc', 'Razon Social',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::text('razon_social',null,['class'=>'input-xlarge','required']) }}
                         {{$errors->first('razon_social','<p class="help-inline error">:message</p>')}}
                     </div>
                 </div>
                 <div class="control-group">
                     {{ Form::label('Nombre Comercial', 'Nombre Comercial',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::text('nombre_Comercial',null,['class'=>'input-xlarge','required']) }}
                         {{$errors->first('nombre_Comercial','<p class="help-inline error">:message</p>')}}
                     </div>
                 </div>
                 <div class="control-group">
                     {{ Form::label('ruc', 'RUC',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::text('ruc',null,['class'=>'input-xlarge','required']) }}
                         {{$errors->first('ruc','<p class="help-inline error">:message</p>')}}
                     </div>
                 </div>
                 <div class="control-group">
                     {{ Form::label('telefono', 'Teléfono',['class'=> 'control-label','for'=>'cctelefono']);}}
                     <div class="controls">
                         {{ Form::text('telefono',null,['class'=>'input-xlarge','required']) }}
                         {{$errors->first('telefono','<p class="help-inline error">:message</p>')}}
                     </div>
                 </div>



                 <div class="control-group">
                     {{ Form::label('direccion', 'Dirección',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::text('direccion',null,['class'=>'input-xlarge','required']) }}
                         {{$errors->first('direccion','<p class="help-inline error">:message</p>')}}
                     </div>
                 </div>
                 <div class="control-group">
                     {{ Form::label('Pagina Web', 'Pagina web',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::text('web',null,['class'=>'input-xlarge','placeholder'=>'ejemplo: http://misitio.com']) }}
                         {{$errors->first('web','<p class="help-inline error">:message</p>')}}

                     </div>
                 </div>

                 <div class="control-group">
                     {{ Form::label('contacto', 'Contacto',['class'=> 'control-label']);}}
                     <div class="controls">
                         <div class="input-prepend">
                             <span class="add-on">@</span> {{ Form::text('contacto',null,['placeholder'=>'Corre Electronico','required']) }}
                         </div>
                     </div>
                 </div>

                 <div class="control-group">
                     {{ Form::label('foto', 'Foto',['class'=> 'control-label']);}}
                     <div class="controls">
                         {{ Form::file('foto') }}
                     </div>
                 </div>
                 {{ Form::hidden('latitud',null,['id' => 'latitud']) }}
                 {{ Form::hidden('longitud',null,['id' => 'longitud']) }}

                 <div class="col-lg-12">
                        <input id="pac-input" type="text" placeholder="Search Box">
                        <div id="map-canvas" style="height: 300px; width: 1005;"></div>
                 </div>

                 <span>** Al hacer click en el botón 'Registrar' que aparece a continuación, certifico que he leído y acepto los Términos y Condiciones de Uso de Sistema</span>
                 <div class="form-actions">
                     <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Registrar</button>

                 </div>


                 {{ Form::close()}}

                 <!-- END FORM-->


             </div>



        </div>
         <!-- END BLANK PAGE PORTLET-->
     </div>
 </div>

@endsection