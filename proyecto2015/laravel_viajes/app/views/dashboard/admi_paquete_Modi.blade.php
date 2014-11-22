@extends('layout')

@section('content')


<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Modificar Paquetes Turísticos
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
                <h4><i class="icon-reorder"></i> Modificar Paquete Turístico</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <h2>DATOS GENERALES</h2>
                {{ Form::model($paqueteTuristico, ['route' => 'update_usuario', 'method' => 'PUT','enctype' => 'multipart/form-data', 'role' => 'form', 'novalidate','class'=>'form-horizontal']) }}

                <div class="control-group">
                    {{ Form::label('nombre_paquete', 'Nombre del Paquete',['class'=> 'control-label']);}}
                    <div class="controls">
                        {{ Form::text('nombre_paquete',null,['class'=>'input-xxlarge']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('duracion', 'Duración del paquete : ',['class'=> 'control-label']);}}
                    <div class="controls">
                        {{ Form::text('duracion_paqueteDias',null,['class'=>'input-small']) }} Dia(s) y
                        {{ Form::text('duracion_paqueteNoches',null,['class'=>'input-small']) }} Noche(s)
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('duracion_paquete', 'Vigencia del Paquete',['class'=> 'control-label']);}}
                    <div class="controls">
                        DESDE  : {{ Form::text('fecha_inicio',$paqueteTuristico->fecha_fin,['class'=>'input-small', 'id' => 'fecha_inicio']) }}
                        HASTA  :{{ Form::text('fecha_fin',null,['class'=>'input-small', 'id' => 'fecha_fin']) }}
                    </div>

                </div>
                <h2>Costo</h2>

                <div class="control-group">
                    {{ Form::label('precio', 'Precio',['class'=> 'control-label']);}}
                    <div class="controls">
                        <div class="input-prepend input-append">
                            <span class="add-on">S/.</span>{{ Form::text('precio',null,['class'=>'input-large']) }}   <span class="add-on">.00</span>
                        </div>
                    </div>
                </div>

                <h2>Descripción</h2>
                <div class="control-group">
                    {{ Form::label('info_basica', 'Informacion Basica',['class'=> 'control-label']);}}
                    <div class="controls">
                        {{ Form::textarea('info_basica',null,['class'=>'input-xxlarge', 'rows' => '5']) }}
                    </div>
                </div>
                <div class="control-group">
                    {{ Form::label('region', 'Region',['class'=> 'control-label']);}}
                    <div class="controls">
                        {{Form::select('region', array('0' => '-- Seleccione --',
                        'Costa' => 'Costa',
                        'Sierra' => 'Sierra',
                        'Selva' => 'Selva'),$paqueteTuristico->region,['class' => 'input-xlarge']) }}
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
                        @if($paqueteTuristico->promocion==0)
                        {{ Form::checkbox('remember', 1, false,['id'=>'promo','class' => 'field']) }}
                        @else
                        {{ Form::checkbox('remember', 1, true,['id'=>'promo','class' => 'field']) }}
                        @endif


                    </div>
                </div>
                @if($paqueteTuristico->promocion==0)
                <div id="div1" style="display:none">
                    <h2>Promoción</h2>
                    <div class="control-group"  >

                        {{ Form::label('PorcentajedeDescuento', 'Porcentaje de Descuento',['class'=> 'control-label']);}}
                        <div class="controls">

                            {{ Form::text('porcentaje',null,['class'=>'input-small']) }} %
                        </div>
                    </div>
                </div>
                @else
                    <div id="div1" >
                        <h2>Promoción</h2>
                        <div class="control-group"  >

                            {{ Form::label('PorcentajedeDescuento', 'Porcentaje de Descuento',['class'=> 'control-label']);}}
                            <div class="controls">

                                {{ Form::text('descuentoPorc',null,['class'=>'input-small']) }} %
                            </div>
                        </div>
                    </div>
                @endif


            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Actualizar Paquete Turistico</button>
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