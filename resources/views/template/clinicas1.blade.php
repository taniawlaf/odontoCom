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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                            <li class="breadcrumb-item active">Clinicas</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Clinicas</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

       
        <div class="row">
            @foreach ($arrayClinicas as $item)
            <div class="col-lg-6 col-xl-3">
                 
                <!-- Simple card -->
                <div class="card"; style="width: 18rem;">
                    
                    <img class="card-img-top img-fluid" src="https://www.porlalibreedomex.com/wp-content/uploads/2021/04/Facultad-de-Odontologia-de-la-UAEM-800x445.jpg" alt="Card image cap">
                    <div class="card-body">
                        
                            <h5 class="card-title">{{$item->nombre}} {{$item->numero}}</h5>  
                            <p class="card-text">
                                {{$item->institucion}}
                                {{$item->paise->nombre}}
                                {{$item->entidade->nombre}}
                                {{$item->municipio->nombre}}
                            </p>
                            <a href="dentistas1/{{$item->id}}" class="btn btn-primary waves-effect waves-light">Dentistas</a>
                    </div>
                </div>
                    

             </div> <!-- end card-->
            @endforeach  
            </div><!-- end col -->


        </div>
        <!-- end row -->
       
    </div> <!-- end container -->
</div>
<!-- end wrapper -->
    
@endsection