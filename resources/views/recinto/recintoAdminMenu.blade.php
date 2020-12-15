@extends("layouts.app")

<style>
table, td, th {
  border: 2px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
  background-color : white;
  text-align : center;
}
</style>
<script src="../js/scripts.js" language="javascript" type="text/javascript"></script>

@section("content")
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
    <button href="/" class="btn btn-secondary btn-lg " style="margin-left : 3vh; margin-top : 3vh;float:left ;">
        <a href="/" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
            </svg>
        </a>
    </button>
    <div class="row col-md-12">
        <div class="col" style="text-align : left;">
            <h1 id="titulo" style="text-align : center">Listado de Recintos</h1>
                <table class="table">
                    <tr >
                        <th>Recinto</th>
                    </tr>
                    @foreach($recintos->sortBy('nombre') as $recinto)
                    <tr>
                        <td><a href="/showAdminRecinto/{{ $recinto->idRec }}">{{ $recinto->nombre }}</a></td>
                    </tr>
                    @endforeach
                </table>
        </div>
        <div class="col">
            <h1 id="titulo" style="text-align : center">Añadir recinto                
                <button class="btn btn-success" onclick="show()">
                    <svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                </button></h1>

            <form id="form" action="{{ route('recinto.add') }}" method="POST" style="display : none;" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"required>
                    </div>

                    <div class="col">
                        <label for="area">Area</label>
                        <input type="text" class="form-control" id="area" name="area"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="cientifico">Nombre cientifico</label>
                        <input type="text" class="form-control" id="cientifico" name="cientifico"required>
                    </div>

                    <div class="col">
                        <label for="alimentacion">Alimentacion</label>
                        <input type="text" class="form-control" id="alimentacion" name="alimentacion"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="comederos">Comederos</label>
                        <input type="text" class="form-control" id="comederos" name="comederos"required>
                    </div>

                    <div class="col">
                        <label for="bebederos">Bebederos</label>
                        <input type="text" class="form-control" id="bebederos" name="bebederos"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                         <label for="vallado">Vallado</label>
                        <input type="text" class="form-control" id="vallado" name="vallado"required>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"required></textarea>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-8">

                        <label for="img">Imagen</label>
                        <input type="file" accept=".jpg,.png" id="img" name="img"required>
                    </div>
                    <div class="col-md-4">
                        <label for="idHab">Habitat</label>
                        <select type="integer" class="form-control" id="idHab" name="idHab">
                            @foreach($habitats as $habitat)
                                <option value="{{ $habitat->idHab }}">{{ $habitat->nombre }}</option>
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
</div>
@endsection