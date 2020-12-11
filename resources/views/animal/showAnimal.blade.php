@extends("layouts.app")


@section("content")
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
    <div class="row" style="margin : 3vh;">
        <button href="/" class="btn btn-secondary btn-lg " style="margin : 3vh;float:left ;">
            <a href="/showRecinto/{{ $animal->idRec }}" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
                </svg>
            </a>
        </button>
    </div>
    <div class="row">
        <div style="text-align : left; margin : 5vh;">
                <h1 id="titulo" style="text-align : center">{{ $animal->nombre }}</h1>
                <div class="row col-md-12" style="margin : 2vh;">
                    <img class="col-md-6" src="../img/recintos/{{ $animal->imagen }}" class="" style="display : left; margin : auto;width : 80rem; height : 20rem;"/>
                    <div class="col-md-6" style="background-color : white;"><h4 style="margin : 1vh;">{{ $animal->descripcion }}</h4></div>
                </div>
                <div>
                    <table class="table">

                    <tr >
                        <th>Peso</th>
                        <th>Altura</th>
                        <th>Especie</th>
                        <th>Enfermedad</th>
                        <th>Fecha Nacimiento</th>
                    </tr>
                    <tr>
                        <td>{{ $animal->peso }}</td>
                        <td>{{ $animal->altura }}</td>
                        <td>{{ $animal->especie }}</td>
                        <td>{{ $animal->enfermedad }}</td>
                        <td>{{ $animal->fech_nac }}</td>
                    </tr>
                        
                    </table>
        </div>
    </div>
</div>
@endsection