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
    <div class="space12">
        <!-- BEGIN BLANK PAGE PORTLET-->
        <div class="widget green">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> Editar mis datos</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
                  <div class="widget-body">
                <h1>{{Session::get("mensaje")}}</h1>
                <div class="row-fluid">

                    <div class="span6">
                        {{ Form::model($user, ['route' => 'update_usuario', 'method' => 'PUT','enctype' => 'multipart/form-data', 'role' => 'form', 'novalidate']) }}

                        <div class="control-group">
                            {{ Form::label('nombrecompleto', 'Nombre Completo',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{Form::text('nombrecompleto',null,['class'=>'input-xlarge','required'])}}
                                {{$errors->first('nombrecompleto','<p class="help-inline error">:message</p>')}}
                            </div>
                        </div>
                        <div class="control-group">
                            {{ Form::label('email', 'email',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{Form::text('email',null,['class'=>'input-xlarge','required'])}}

                            </div>
                        </div>

                        <div class="control-group">
                            {{ Form::label('DNI', 'Documento de Identidad',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{Form::text('dni',null,['class'=>'input-xlarge','required'])}}
                            </div>
                        </div>

                        <div class="control-group">
                            {{ Form::label('celular', 'Celular',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{Form::text('celular',null,['class'=>'input-xlarge','required'])}}
                            </div>
                        </div>


                        <div class="control-group">
                            {{ Form::label('cFoto', 'cambiarFoto',['class'=> 'control-label']);}}
                            <div class="controls">
                                {{ Form::file('foto') }}
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Actualizar Datos</button>

                        </div>
                        {{ Form::close() }}

                    </div>
                    <div class="span6">

                        <div style="margin:50px 0px 15px 200px;">

                            <img src="{{URL::asset( Auth::user()->foto )}}" alt="" >

                        </div>
                    </div>

                </div>
                <!-- END FORM-->


            </div>
        </div>
        <!-- END BLANK PAGE PORTLET-->
    </div>

</div>

@endsection