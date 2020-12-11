@extends('layouts.app')

@section('content')
<div class="contenido">
    
        <div class="col-md-12" style="margin-bottom : 5vh;">

            <div class="row justify-content-center">


                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 1vh;">                    
                        <img  src="img/homeImg/habitat.png">
                        <div class="card-body text-center">
                            <a href="/habitatAdminMenu" class="card-text" style="font-size :3vh;">HABITATS</a>
                        </div>
                    </div>
            

                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/recinto.png" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="/recintoAdminMenu" class="card-text" style="font-size :3vh;">RECINTOS</a>
                        </div>
                    </div>

                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/animal.png" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="/animalAdminMenu" class="card-text" style="font-size :3vh;">ANIMALES</a>
                        </div>
                    </div>

                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/usuario.png" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="/userAdminMenu" class="card-text" style="font-size :3vh;">USUARIOS</a>
                        </div>
                    </div>

            </div>

        </div>
    
</div>
@endsection
