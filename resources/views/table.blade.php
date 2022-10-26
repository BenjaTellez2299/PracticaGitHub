
@extends('main')

@section('contenido')

    <p class="fs-1">Tablas</p>
    <p class="fs-6">Muestra Información Importante</p>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Núm. Lista</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Edad</th>
        </tr>
    </thead>

    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Benjamín</td>
        <td>Enríquez Téllez</td>
        <td>21</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Gabriel</td>
        <td>Galván Niño</td>
        <td>50</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Alfredo</td>
        <td>Madrigal Tercero</td>
        <td>15</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Ricardo</td>
        <td>Colín Maldonado</td>
        <td>26</td>
        </tr>
    </tbody>

    </table>

@stop
