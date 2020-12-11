@extends("layouts.app")

        <style>
        table,th, td{
            width : 100%;
            border : 1px solid black;
        }
        table {
        display : block;
        overflow-x : auto;
        border-collapse: collapse;
        background-color : white;
        text-align : center;
        }
        </style>
        <script src="../js/scripts.js" language="javascript" type="text/javascript"></script>

@section("content")

<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
<button  class="btn btn-secondary btn-lg " style="margin : 3vh;float:left ;">
        <a href="/showTipoAnimal/{{ $animal->idRec }}" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
            </svg>
        </a>
    </button>
    <div class="row justify-content-center" style="box-sizing : border-box; width : 100%;">
        <div style="text-align : left; margin : 5vh;box-sizing : border-box; width : 100%;">
            <div class="row justify-content-center" style="float:right ; margin : 2vh;">
            
                <button class="btn btn-info btn-lg" style="margin-right : 1vh;" onclick="show()">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>
                </button>

                <button class="btn btn-danger btn-lg" style="margin-right : 5vh;">
                    <a href="/deleteAnimal/{{ $animal->idAni }}" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </a>
                </button>
            
            </div>

            <h1 id="titulo" style="text-align : center">{{ $animal->nombre }}</h1>


            <div style="margin-left : 10vh; margin-right : 5vh;">
                <table class="table">
                <tr>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Tipo</th>
                    <th>Especie</th>
                    <th>Enfermedad</th>
                    <th>Dieta</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                </tr>
                <tr>
                    <td>{{ $animal->peso }}</td>
                    <td>{{ $animal->altura }}</td>
                    <td>{{ $animal->tipo }}</td>
                    <td>{{ $animal->especie }}</td>
                    <td>{{ $animal->enfermedad }}</td>
                    <td>{{ $animal->dieta }}</td>
                    <td><textarea name="descripcion" id="descripcion" cols="100" rows="5">{{ $animal->descripcion }}</textarea></td>
                    <td><img src="../img/animales/{{ $animal->imagen }}" style="width : 256px; height : 128px;"></td>
                </tr>
                    
                </table>
            </div>
        </div>
    </div>
    <div class="row col-md-12">
        
        <form id="form" class="col-md-12" action="{{ route('animal.update',['idAni' => $animal->idAni]) }}" method="POST" style="margin : 3vh; display : none;">
            @csrf
            <div class="row">
                    <div class="col">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $animal->nombre}}"required>
                    </div>

                    <div class="col">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" id="peso" name="peso" value="{{ $animal->peso}}"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="altura">Altura</label>
                        <input type="text" class="form-control" id="altura" name="altura" value="{{ $animal->altura}}"required>
                    </div>

                    <div class="col">
                        <label for="tipo">Tipo</label>
                        <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $animal->tipo}}"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                         <label for="especie">Especie</label>
                        <input type="text" class="form-control" id="especie" name="especie" value="{{ $animal->especie}}"required>
                    </div>

                    <div class="col">
                        <label for="enfermedad">Enfermedad</label>
                        <input type="text" class="form-control" id="enfermedad" name="enfermedad" value="{{ $animal->enfermedad}}"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="dieta">Dieta</label>
                        <input type="text" class="form-control" id="dieta" name="dieta" value="{{ $animal->dieta}}"required>
                    </div>

                    <div class="col">
                        <label for="fech_nac">Nacimiento</label>
                        <input type="date" class="form-control" id="fech_nac" name="fech_nac" value="{{ $animal->fech_nac}}"required>
                    </div>
                </div>

                <div class="row" style="margin-bottom : 2vh;">
                    <div class="col">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"required>{{ $animal->descripcion}}</textarea>
                    </div>
                </div>

                <div class="row" style="margin-bottom : 3vh;">
                    <div class="col-md-3">
                        <label for="idRec">Recinto</label>
                        <select type="integer" class="form-control" id="idRec" name="idRec"required>
                            <option value="{{ $recinto->idRec }}">{{ $recinto->nombre }}</option>
                            @foreach($recintos as $recintoo)                             
                                    <option value="{{ $recintoo->idRec }}">{{ $recintoo->nombre }}</option>                          
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">Aceptar</button>
                    </div>
                </div>
        </form>
    </div>
    
</div>
@endsection
