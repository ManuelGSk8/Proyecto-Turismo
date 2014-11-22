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
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" id="btnAgregar"><i class="icon-ok"></i> Agregar Otro dia</button>
                    </div>
                    <h2>DATOS GENERALES</h2>
                    {{ Form::open(['route' => 'save-paquete-turistico', 'method' => 'POST', 'class'=>'form-horizontal','files' => true ]) }}
                    <div class="control-group">
                        {{ Form::label('d1', 'Nombre del Paquete',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::text('nombre_paquete','',['class'=>'input-xxlarge']) }}
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
                        {{ Form::label('Foto', 'Region',['class'=> 'control-label']);}}
                        <div class="controls">
                            {{ Form::file('foto') }}
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