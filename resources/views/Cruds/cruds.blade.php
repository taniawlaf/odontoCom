@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.KRXZH6lbUSYL0uyHVOW-wQHaHa?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('paises') !!}">Paises</a></h5>
                        <p class="card-text">gestion de la tabla paises</p>
                        
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.wUtc7X6lWdm42ZQqLrpoigAAAA?pid=ImgDet&w=338&h=338&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('entidades') !!}">Entidades</a></h5>
                        <p class="card-text">gestion de la tabla entidades</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.qxBj0JaM7caGPDSsNeGB1AHaHU?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('municipios') !!}">Municipios</a></h5>
                        <p class="card-text">gestion de la tabla municipios</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.6bqvkvM3MudM5UhzYVF_IQHaHa?pid=ImgDet&rs=1"; high='10'px; alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('usuarios') !!}">Usuarios</a></h5>
                        <p class="card-text">gestion de la tabla usuarios</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.KRXZH6lbUSYL0uyHVOW-wQHaHa?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('tiposUsuario') !!}">Tipos Usuario</a></h5>
                        <p class="card-text">gestion de la tabla tipos usuario</p>
                        
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.wUtc7X6lWdm42ZQqLrpoigAAAA?pid=ImgDet&w=338&h=338&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('tratamiento') !!}">Tratamientos</a></h5>
                        <p class="card-text">gestion de la tabla tratamientos</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.qxBj0JaM7caGPDSsNeGB1AHaHU?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('tiposTratamiento') !!}">Tipos Tratamientos</a></h5>
                        <p class="card-text">gestion de la tabla Tipos Tratamientos</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.6bqvkvM3MudM5UhzYVF_IQHaHa?pid=ImgDet&rs=1"; high='10'px; alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('clinicas') !!}">Clinicas</a></h5>
                        <p class="card-text">gestion de la tabla clinicas</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.KRXZH6lbUSYL0uyHVOW-wQHaHa?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('consultorios') !!}">Consultorios</a></h5>
                        <p class="card-text">gestion de la tabla consultorios</p>
                        
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.wUtc7X6lWdm42ZQqLrpoigAAAA?pid=ImgDet&w=338&h=338&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('citas') !!}">Citas</a></h5>
                        <p class="card-text">gestion de la tabla citas</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.qxBj0JaM7caGPDSsNeGB1AHaHU?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('inventario') !!}">Inventario</a></h5>
                        <p class="card-text">gestion de la tabla inventario</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.6bqvkvM3MudM5UhzYVF_IQHaHa?pid=ImgDet&rs=1"; high='10'px; alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('materiales') !!}">Materiales</a></h5>
                        <p class="card-text">gestion de la tabla materiales</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-6 col-xl-3">
                <!-- Simple card -->
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://th.bing.com/th/id/OIP.KRXZH6lbUSYL0uyHVOW-wQHaHa?pid=ImgDet&rs=1" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{!! asset('archivosTratamientos') !!}">Archivos de Tratamientos</a></</h5>
                        <p class="card-text">gestion de la tabla Archivos cde Tratamientos</p>
                        
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

       
    </div>
</div>
    
@endsection()