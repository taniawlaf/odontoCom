@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">

<body>
        <h1>Enviar Correo Electrónico</h1>
    <table>
        <tr>
          <td>


    {!! Form::open (['url'=>'/enviar_correo','method'=>'post']) !!}

{!! Form::label ('destinatario','Para:',['class'=>'control-label']) !!}
    {!! Form::text ('destinatario',null,['placeholder'=>'Ingresa la dirección de destino',
        'required','class'=>'form-control']) !!}
          </td>
        </tr>
        <tr>
          <td>
{!! Form::label ('asunto','Asunto:',['class'=>'control-label']) !!}
    {!! Form::text ('asunto',null,['placeholder'=>'Asunto','required','class'=>'form-control']) !!}
           </td>
        </tr>
        <tr>
          <td>

{!! Form::label ('contenido_mail','Contenido:',['class'=>'control-label']) !!}
    {!! Form::textarea ('contenido_mail',null,['placeholder'=>'Contenido','required','class'=>'form-control']) !!}
          </td>
        </tr>
        <tr>
          <td>
    {!! Form::submit('Enviar correo',['class'=>'btn btn-primary btn-lg']) !!}
    {!! Form::close() !!}
          </td>
        </tr>
      </table>
@endsection()