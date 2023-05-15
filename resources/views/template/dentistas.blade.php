@extends('template.master')
@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Dentistas</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dentistas</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

       
        
        <div class="row">
            @foreach ($consultorio as $item) 
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="pt-2 pb-2">
                        <img src="https://cdn3.vectorstock.com/i/1000x1000/06/87/dentist-tools-circle-icon-vector-25240687.jpg" class="rounded-circle img-thumbnail avatar-xl"
                            alt="profile-image">

                        <h4 class="mt-3"><a href="perfil" class="text-dark">{{$item->usuario->nombre}} {{$item->usuario->ap_pat}} {{$item->usuario->ap_mat}}</a></h4>
                        <p class="text-muted"><i class="mdi mdi-map-marker-outline"></i> {{$item->usuario->paise->nombre}}</p>

                        <p class="text-muted mt-3">
                            {{$item->usuario->username}}
                            <br>
                            {{$item->usuario->telefono}}
                            <br>
                            {{$item->usuario->email}}
                        </p>
                        <form action="{{ route('enviarcorreo') }}" method="POST">
                            @csrf
                             <button type="submit" class="btn btn-primary waves-effect waves-light">Enviar correo</button>
                         </form>
                    </div> <!-- end .padding -->
                </div> <!-- end card-box-->
            </div> <!-- end col -->
            @endforeach
        </div>
        <!-- end row -->
         
    </div> <!-- end container -->
</div>
@endsection()