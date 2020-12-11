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
@section("content")
<div class="row contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
    <button href="/" class="btn btn-secondary btn-lg " style="margin : 3vh;float:left ;">
        <a href="/" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
            </svg>
        </a>
    </button>

    <div class="row col-md-12">
        <h1 id="titulo" style="text-align : center; margin-left : 10vh;">Listado de usuarios</h1>
            <table class="table" style="margin-left : 10vh; margin-right : 5vh; margin-bottom : 5vh;">
                 <tr >
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de registro</th>
                    <th>Rol</th>
                </tr>
                @foreach($users as $user)
                 <tr>
                    <td><a href="/showAdminUser/{{ $user->id }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->is_admin }}</td>
                </tr>
                 @endforeach
            </table>
    </div>
</div>
@endsection