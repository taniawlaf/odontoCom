@extends('template.master')
@section('contenido_central')

<!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
           
                 <div class="container-fluid">
              <!-- @if(isset($infoMessage))      
                            <div class="alert alert-primary" role="alert">
                This is a primary alert—check it out!
                </div>
                
                 @endif
            -->
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">OdontoCom</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Registrar una cita</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Registrar una cita</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title">Registra una cita en el siguiente formulario</h4>
                            

                            <div class="alert alert-warning d-none fade show">
                                <h4 class="mt-0">Oh snap!</h4>
                                <p class="mb-0">This form seems to be invalid :(</p>
                            </div>

                            <div class="alert alert-info d-none fade show">
                                <h4 class="mt-0">Yay!</h4>
                                <p class="mb-0">Everything seems to be ok :)</p>
                            </div>

                            <form id="demo-form" data-parsley-validate="" action="{{action('App\Http\Controllers\FormularioController@save_record')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="heard">Selecciona el tratamiento ha realizar:</label>
                                    <select id="heard" class="form-control" required="" name="tratamiento">
                                        <option value="">Selecciona..</option>
                                        <!--Itera el array de tratamientos-->
                                        @foreach($tratamientos as $tratamiento)
                                            <option value="{{$tratamiento->id}}">{{$tratamiento->nombre}}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="heard">Selecciona el paciente:</label>
                                    <select id="heard" class="form-control" required="" name="usuario">
                                        <option value="">Selecciona..</option>
                                        <!--Itera el array de tratamientos-->
                                        @foreach($usuarios as $usuario)
                                            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
                                        @endforeach
                                        
                                        
                                    </select>
                                </div>

                                
                                <div class="form-group">
                                    <label for="birthdaytime">Selecciona una fecha:</label>
                                    <input style="border-radius: 20px; color=#9999;" type="datetime-local" id="birthdaytime" name="fechaCita">
                                </div>
                                    

                                <div class="form-group mb-0">
                                    <input type="submit" class="btn btn-success" value="Confirmar">
                                </div>

                            </form>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->


                
                
            </div> <!-- end container -->
        </div>

@endsection()