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
                <h4><i class="icon-reorder"></i> Empresa  </h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">

            </div>
        </div>
         <!-- END BLANK PAGE PORTLET-->
     </div>
 </div>

@endsection