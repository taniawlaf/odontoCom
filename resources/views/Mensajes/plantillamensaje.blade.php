@extends('template.master')

@section('contenido_central')
<div class="wrapper">
    <div class="container-fluid">
    </table> 

    <table> 
    <tr>
        <td>
                    @if($var == '1')
                        <div class="alert alert-success">
                            <h2>  {!! $msj !!}</h2>
                        </div>
                    @else
                        <div class="alert alert-danger">
                            <h2> {!! $msj !!}</h2>
                        </div>
                    @endif
        </td>
    </tr>
    </table>
