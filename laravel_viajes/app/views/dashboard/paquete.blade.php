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
           <li class="active">
               Paquetes Turístico
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
                <h4><i class="icon-reorder"></i> Listado Paquete Turístico</h4>
                <span class="tools">
                <a href="javascript:;" class="icon-chevron-down"></a>
                <a href="javascript:;" class="icon-remove"></a>
                </span>
            </div>
            <div class="widget-body">
                <!-- BEGIN FORM-->
                <a href="{{ route('admi-paquete-turistico')}}" class="btn btn-primary">Nuevo <i class="icon-plus"></i></a>
                <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="icon-bullhorn"></i> Nombre</th>
                        <th class="hidden-phone"><i class="icon-question-sign"></i> Lugar</th>
                        <th><i class="icon-bookmark"></i> Precio</th>
                        <th><i class=" icon-edit"></i> Fechas</th>
                        <th><i class=" icon-edit"></i> Estado</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#">Vector Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                        <td>12120.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-important label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                Adimin co
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>56456.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-warning label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                boka soka
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>14400.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-success label-mini">Paid</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                salbal llb
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>2323.50$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-danger label-mini">Paid</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Vector Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                        <td>12120.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-important label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                Adimin co
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>56456.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-warning label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Vector Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                        <td>12120.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-important label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                Adimin co
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>56456.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-warning label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">Vector Ltd</a></td>
                        <td class="hidden-phone">Lorem Ipsum dorolo imit</td>
                        <td>12120.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-important label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">
                                Adimin co
                            </a>
                        </td>
                        <td class="hidden-phone">Lorem Ipsum dorolo</td>
                        <td>56456.00$ </td>
                        <td>20/10/2014 - 25/10/2014 </td>
                        <td><span class="label label-warning label-mini">Due</span></td>
                        <td>
                            <button class="btn btn-success"><i class="icon-ok"></i></button>
                            <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                            <button class="btn btn-danger"><i class="icon-trash "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!-- END FORM-->
            </div>
        </div>
         <!-- END BLANK PAGE PORTLET-->
     </div>
 </div>
@endsection