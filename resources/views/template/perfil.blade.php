
@extends('template.master')
@section('contenido_central')
<!-- Start Page Content here -->
        <!-- ============================================================== -->
        @section('myHeader')
            {{$usuarios[0]->username}}
        @endsection()
       <div class="wrapper">
            <!--<div class="container-fluid">-->

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                    <li class="breadcrumb-item active">Perfil</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Perfil</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg col">
                        <div class="card-box text-center">
                            <img src="style/assets/images/users/user-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">

                            <h4 class="mb-0">{{$usuarios[0]->nombre}}</h4>
                            <p class="text-muted">{{$usuarios[0]->username}}</p>

                            <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Editar perfil</button>

                            <div class="text-left mt-3">
                                <p class="text-muted mb-2 font-13"><strong>Nombre completo :</strong> <span class="ml-2">{{$usuarios[0]->nombre}} {{$usuarios[0]->ap_pat}}  {{$usuarios[0]->ap_mat}}</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Telefono :</strong><span class="ml-2">{{$usuarios[0]->telefono}}</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{$usuarios[0]->email}}</span></p>

                                <p class="text-muted mb-1 font-13"><strong>Ubicacion :</strong> <span class="ml-2">{{$usuarios[0]->paise->nombre}}</span></p>
                            </div>

                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i
                                            class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                            class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                            class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                            class="mdi mdi-github-circle"></i></a>
                                </li>
                            </ul>
                        </div> <!-- end card-box -->

                        

                    </div> <!-- end col-->
                </div>
                <!-- end row-->

                
           <!-- </div>  end container -->
        </div>
        <!-- end wrapper -->
    @endsection()
