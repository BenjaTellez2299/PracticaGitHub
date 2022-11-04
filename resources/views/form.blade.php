
@extends('main')

@section('contenido')

    @if(session()->has('confirmacion'))
        {!!"<script>
            Swal.fire(
            'Bien Hecho Chavo Cardenal!',
            'Preciona el botón para continuar!',
            'success')
        </script>"!!}
    @endif

    <p class="fs-1">Formulario</p>
    <p class="fs-6">Llena lo que se te pide en el siguiente formulario</p>

    @if($errors->any())

            @foreach($errors->all() as $error)

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Formulario Mal, Checalo!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endforeach

    @endif

    <form class="m-2" method="post" action="GuardarForm">
    @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="txtMatri" value="{{ old('txtMatri') }}">
            <label for="floatingInput">Matrícula</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtMatri') }}
                </p>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="txtPass" value="{{ old('txtPass') }}">
            <label for="floatingPassword">Contraseña</label>
                <p class="fst-italic text-danger">
                    {{ $errors->first('txtPass') }}
                </p>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-outline-success m-2">Ingresar Formulario</button>
        </div>
            
    </form> 

@stop
