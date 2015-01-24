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
                <br>
                {{Session::get("mensaje")}}
                @if(count($consultaPaquete)>0)
                    <div class="widget-body">
                        <a href=""  style="margin-left:100px;margin-bottom: 20px;" class="btn btn-primary">Nuevo <i class="icon-plus"></i></a>
                        <!-- BEGIN FORM-->

                        <section id="destination-styles">

                            <div class="dStyles-inner container">
                                @foreach ($consultaPaquete as $paqueteTuristico)

                                    @if($paqueteTuristico->id % 2=== 0)
                                        @if($paqueteTuristico->promocion===1)
                                            <div class="destination-style-1 isotope-item" style="margin-right: 20px; position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);" >
                                                <div class="popular-tag"></div>
                                                <div class="visual">
                                                    <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                </div>
                                                <div class="place-info">
                                                    <div class="place">
                                                        {{$paqueteTuristico->nombre_paquete }}
                                                    </div>
                                                    <div class="read-more">
                                                        <div class="arrow"></div>
                                                        S/. {{ $paqueteTuristico->precio }}
                                                    </div>
                                                </div>
                                                <div class="desti-hover">
                                                    <div class="destination-style-2" >
                                                        <div class="visual">
                                                            <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                        </div>
                                                        <div class="title">
                                                            {{$paqueteTuristico->nombre_paquete }}
                                                        </div>
                                                        <div class="price-info">
                                                            S/. {{ $paqueteTuristico->precio }}
                                                        </div>
                                                        <div class="discount-tag">{{ $paqueteTuristico->descuentoPorc }}%</div>
                                                        <div class="clearfix"></div>
                                                        <h6>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div>
                                                            <a href="" class="booknow2">Modificar Info.</a>
                                                            @if($paqueteTuristico->estado!='activo')
                                                                <td>
                                                                    <a href=""  class="booknow4">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <a href=""  class="booknow5">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @endif
                                                            <a href="destination-detail.html" class="booknow3">Modificar Itinerario</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="destination-style-1" style="margin-left:20px; left: -35px;" >
                                                <div class="visual">
                                                    <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                </div>
                                                <div class="place-info">
                                                    <div class="place">
                                                        {{$paqueteTuristico->nombre_paquete }}
                                                    </div>
                                                    <div class="read-more">
                                                        <div class="arrow"></div>
                                                        S/. {{ $paqueteTuristico->precio }}
                                                    </div>
                                                </div>
                                                <div class="desti-hover">
                                                    <div class="destination-style-2" >
                                                        <div class="visual">
                                                            <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                        </div>
                                                        <div class="title">
                                                            {{$paqueteTuristico->nombre_paquete }}
                                                        </div>
                                                        <div class="price-info">
                                                            S/. {{ $paqueteTuristico->precio }}
                                                        </div>
                                                        <div class="discount-tag">{{ $paqueteTuristico->descuentoPorc }}%</div>
                                                        <div class="clearfix"></div>
                                                        <h6>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div>
                                                            <a href="" class="booknow2">Modificar Info.</a>
                                                            @if($paqueteTuristico->estado!='activo')
                                                                <td>
                                                                    <a href=""  class="booknow4">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <a href=""  class="booknow5">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @endif
                                                            <a href="destination-detail.html" class="booknow3">Modificar Itinerario</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    @else
                                        @if($paqueteTuristico->promocion===1)
                                            <div class="destination-style-1">
                                                <div class="popular-tag"></div>
                                                <div class="visual">
                                                    <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />

                                                </div>
                                                <div class="place-info">
                                                    <div class="place">
                                                        {{$paqueteTuristico->nombre_paquete }}
                                                    </div>
                                                    <div class="read-more">
                                                        <div class="arrow"></div>

                                                        S/. {{ $paqueteTuristico->precio }}
                                                    </div>
                                                </div>
                                                <div class="desti-hover">
                                                    <div class="destination-style-2" >

                                                        <div class="visual">
                                                            <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                        </div>
                                                        <div class="title">
                                                            {{$paqueteTuristico->nombre_paquete }}
                                                        </div>
                                                        <div class="price-info">
                                                            <span>$1500 </span>
                                                            S/. {{ $paqueteTuristico->precio }}
                                                        </div>
                                                        <div class="discount-tag">{{ $paqueteTuristico->descuentoPorc }}%</div>
                                                        <div class="clearfix"></div>
                                                        <h6>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div>
                                                            <a href="" class="booknow2">Modificar Info.</a>
                                                            @if($paqueteTuristico->estado!='activo')
                                                                <td>
                                                                    <a href=""  class="booknow4">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <a href=""  class="booknow5">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @endif
                                                            <a href="destination-detail.html" class="booknow3">Modificar Itinerario</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="destination-style-1">

                                                <div class="visual">
                                                    <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />

                                                </div>
                                                <div class="place-info">
                                                    <div class="place">
                                                        {{$paqueteTuristico->nombre_paquete }}
                                                    </div>
                                                    <div class="read-more">
                                                        <div class="arrow"></div>

                                                        S/. {{ $paqueteTuristico->precio }}
                                                    </div>
                                                </div>
                                                <div class="desti-hover">
                                                    <div class="destination-style-2" >

                                                        <div class="visual">
                                                            <img src="{{ URL::asset($paqueteTuristico->foto_paquete) }}" alt="" />
                                                        </div>
                                                        <div class="title">
                                                            {{$paqueteTuristico->nombre_paquete }}
                                                        </div>
                                                        <div class="price-info">
                                                            S/. {{ $paqueteTuristico->precio }}
                                                        </div>
                                                        <div class="discount-tag">{{ $paqueteTuristico->descuentoPorc }}%</div>
                                                        <div class="clearfix"></div>
                                                        <h6>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>
                                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                        <div>
                                                            <a href="" class="booknow2">Modificar Info.</a>
                                                            @if($paqueteTuristico->estado!='activo')
                                                                <td>
                                                                    <a href=""  class="booknow4">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <a href=""  class="booknow5">{{$paqueteTuristico->estado }}</a>
                                                                </td>
                                                            @endif
                                                            <a href="" class="booknow3">Modificar Itinerario</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @endif
                                                    <!--=============================-->


                                            @endforeach

                                            <div class="load-more row-fluid">
                                                <div class="span12">
                                                    <button class="input-block-level">Load more Offers</button>
                                                </div>
                                            </div>
                            </div>
                        </section>



                        <!-- END FORM-->
                    </div>
                @else
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        <a href="{{ route('creacionPaqueteTuristico') }}" class="btn btn-primary">Nuevo Paquete<i class="icon-plus"></i></a>


                        <!-- END FORM-->
                    </div>
                @endif
            </div>
            <!-- END BLANK PAGE PORTLET-->
        </div>
    </div>
@endsection