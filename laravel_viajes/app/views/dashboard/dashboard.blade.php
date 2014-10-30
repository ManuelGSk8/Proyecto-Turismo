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
                <h4><i class="icon-reorder"></i> Datos Generales</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                {{ Form::open(['route' => 'upagencia', 'method' => 'POST', 'class'=>'form-horizontal']) }}
                	<div class="control-group">
                	{{ Form::label('raz_soc', 'Razon Social',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('username','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('ruc', 'RUC',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('ruc','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('telefono', 'Teléfono',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('telefono','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('direccion', 'Dirección',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('direccion','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('latitud', 'Latitud',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('latitud','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('longitud', 'Longitud',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('longitud','',['class'=>'input-xlarge']) }}                                        
                        </div>
                    </div>
                    <div class="control-group">
                	{{ Form::label('contacto', 'Contacto',['class'=> 'control-label']);}}
                        <div class="controls">
                        	{{ Form::text('contacto','',['class'=>'input-xlarge']) }}                                        
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