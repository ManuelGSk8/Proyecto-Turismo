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
         <div class="widget blue">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Nuevo Paquete Turístico</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                {{ Form::open(['route' => 'save-paquete-turistico', 'method' => 'POST', 'class'=>'form-horizontal']) }}
                	<div class="control-group">
                	{{ Form::label('nombre_paquete', 'Nombre',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('nombre_paquete','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('fecha_inicio', 'Fecha de Inicio',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('fecha_inicio','',['class'=>'input-xlarge', 'id' => 'fecha_inicio']) }}  
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('fecha_fin', 'Fecha de Fin',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('fecha_fin','',['class'=>'input-xlarge', 'id' => 'fecha_fin']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('info_basica', 'Dirección',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::textarea('info_basica','',['class'=>'input-xlarge', 'rows' => '3']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('precio', 'Precio',['class'=> 'control-label']);}}
                        <div class="controls">
                        	<div class="input-prepend input-append">
                        		<span class="add-on">$</span>{{ Form::text('precio','',['class'=>'input-large']) }}   <span class="add-on">.00</span>  
                        	</div>                                   
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
                	{{ Form::label('duracion_paquete', 'Duración',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('duracion_paquete','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue"><i class="icon-ok"></i> Guardar</button>
                        <button type="button" class="btn"><i class=" icon-remove"></i> Cancelar</button>
                    </div>
                {{ Form::close()}}
                
                <!-- END FORM-->
            </div>
        </div>
         <!-- END BLANK PAGE PORTLET-->
     </div>
 </div>
@endsection