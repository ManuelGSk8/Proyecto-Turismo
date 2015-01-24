@extends('layout'))

@section('content')

<div class="row-fluid">
   <div class="span12">
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
       <h3 class="page-title">
         PAGINA PRINCIPAL
       </h3>
       <ul class="breadcrumb">
           <li>
               <a href="#">Inicio</a>
               <span class="divider">/</span>
           </li>
       </ul>
       <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="metro-nav">
    <div class="metro-nav-block nav-block-green">
        <a data-original-title="" href="{{ route('paquetesCreados', [$datosAgencia[0]->nombre_Comercial,base64_encode($datosAgencia[0]->id)]) }} ">
            <i class="icon-tasks"></i>
            <div class="info">{{count($datosAgencia[0]->Paqueteturistico)}}</div>
            <div class="status">Paquetes Creados</div>
        </a>
    </div>
    <div class="metro-nav-block nav-block-yellow">
        <a data-original-title="" href="#">
            <i class="icon-tags"></i>
            <div class="info">0</div>
            <div class="status">Ventas</div>
        </a>
    </div>
    <div class="metro-nav-block nav-block-grey">
        <a data-original-title="" href="#">
            <i class="icon-comments-alt"></i>
            <div class="info">0</div>
            <div class="status">Comentarios Paquetes</div>
        </a>
    </div>
    <div class="metro-nav-block nav-block-orange">
        <a data-original-title="" href="#">
            <i class="icon-envelope"></i>
            <div class="info">0</div>
            <div class="status">Mensajes</div>
        </a>
    </div>

</div>

@endsection