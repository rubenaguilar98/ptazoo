@extends("layouts.app")

        <style>
        table,th, td{
            width : 50%;
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
    <button class="btn btn-secondary btn-lg " style="margin : 3vh; float:left ;">
        <a href="/userAdminMenu" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
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

                <button class="btn btn-danger btn-lg">
                    <a href="/deleteUser/{{ $user->id }}" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                        </svg>
                    </a>
                </button>
            
            </div>

            <h1 id="titulo" style="text-align : center">{{ $user->nombre }}</h1>


            <div>
                <table class="table" style="margin-left: 3vh;">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if($user->is_admin == 1)
                        <td>Administrador</td>
                    @else
                        <td>Usuario</td>
                    @endif
                </tr>
                    
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        
        <form id="form" class="col-md-6" action="{{ route('user.update',['id' => $user->id]) }}" method="POST" style="margin : 3vh; display : none;">
            @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                        </div>

                        <div class="col">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="is_admin">Rol</label>
                            <input type="text" class="form-control" id="is_admin" name="is_admin" value="{{ $user->is_admin }}">
                        </div>
                    </div>
                
                    <div class="row" style="margin-top : 2vh;">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                        </div>
                    </div>
                    
        </form>
    </div>
    
</div>
@endsection
