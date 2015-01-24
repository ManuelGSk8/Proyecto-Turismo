@extends('layout')

@section('content')


<div class="row-fluid">
   <div class="span12">                  
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
       <h3 class="page-title">
         Administrar Paquetes Turísticos
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
           <li >
               <a href="#">Paquetes Turístico</a>
               <span class="divider">/</span>
           </li> 
           <li class="active">
           		Nuevo Paquete
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
                <h4><i class="icon-reorder"></i> Nuevo Paquete Turístico</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
                <div class="widget-body">
                    <h2>DATOS GENERALES</h2>
                    {{ Form::open(['route' => 'guardarPaqueteTuristico', 'method' => 'POST', 'class'=>'form-horizontal','files' => true ]) }}
                    <div class="control-group">
                        {{ Form::label('nombre_paquete', 'Nombre del Paquete',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::text('nombre_paquete','',['class'=>'input-xxlarge']) }}
                        </div>
                    </div>
                    <div class="control-group">
                        {{ Form::label('duracion', 'Duración del paquete : ',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::text('duracion_paqueteDias','',['class'=>'input-small']) }} Dia(s) y
                            {{ Form::text('duracion_paqueteNoches','',['class'=>'input-small']) }} Noche(s)
                        </div>
                    </div>
                    <div class="control-group">
                        {{ Form::label('duracion_paquete', 'Vigencia del Paquete',['class'=> 'control-label']);}}
                        <div class="controls">
                            DESDE  : {{ Form::text('fecha_inicio','',['class'=>'input-small', 'id' => 'fecha_inicio']) }}
                            HASTA  :{{ Form::text('fecha_fin','',['class'=>'input-small', 'id' => 'fecha_fin']) }}
                        </div>

                    </div>
                    <h2>Costo</h2>

                    <div class="control-group">
                        {{ Form::label('precio', 'Precio',['class'=> 'control-label']);}}
                        <div class="controls">
                            <div class="input-prepend input-append">
                                <span class="add-on">S/.</span>{{ Form::text('precio','',['class'=>'input-large']) }}   <span class="add-on">.00</span>
                            </div>
                        </div>
                    </div>

                    <h2>Descripción</h2>
                    <div class="control-group">
                        {{ Form::label('info_basica', 'Informacion Basica',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::textarea('info_basica','',['class'=>'input-xxlarge', 'rows' => '5']) }}
                        </div>
                    </div>
                    <div class="control-group">
                        {{ Form::label('region', 'Region',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{Form::select('region', array('0' => '-- Seleccione --',
                            '1' => 'Costa',
                            '2' => 'Sierra',
                            '3' => 'Selva'),'0',['class' => 'input-xlarge']) }}
                        </div>
                    </div>
                    <div class="control-group">
                        {{ Form::label('Foto', 'Region',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::file('foto') }}
                        </div>
                    </div>
                    <div class="control-group">
                        {{ Form::label('region', '¿Tiene Promoción?',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::checkbox('remember', 1, null,['id'=>'promo','class' => 'field']) }}

                        </div>
                    </div>
                    <div id="div1" style="display:none">
                        <h2>Promoción</h2>
                        <div class="control-group"  >
                            {{ Form::label('PorcentajedeDescuento', 'Porcentaje de Descuento',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{ Form::text('porcentaje','',['class'=>'input-small']) }} %
                            </div>
                        </div>
                    </div>

                </div>
                 <div class="form-actions">
                     <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Registrar Paquete Turistico</button>

                 </div>
             {{ Form::close()}}

             </div>
         </div>
                <!-- END FORM-->
            </div>
        </div>
         <!-- END BLANK PAGE PORTLET-->
     </div>
 </div>
@endsection