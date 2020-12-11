@extends('layouts.app')

@section('content')
<div class="contenido">
    
        <div class="col-md-12" style="margin-bottom : 5vh; text-align : center;">
            <div class="col-md-4 offset-md-4 card-body" style="display : block;">
                        @if (session('error'))
                        <div class="alert alert-danger">
                        {{ session('error') }}
                        </div>
                        @endif
            </div>
            <div class="row justify-content-center">
        

                
                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 1vh;">                    
                        <img  src="img/homeImg/habitat.png">
                        <div class="card-body text-center">
                            <a href="/habitatMenu" class="card-text" style="font-size :3vh;">HABITATS</a>
                        </div>
                    </div>
            

                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/animal.png" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="/showAllRecintos" class="card-text" style="font-size :3vh;">ANIMALES</a>
                        </div>
                    </div>
 
                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/restaurant.png" alt="Card image cap" >
                        <div class="card-body text-center">
                            <a href="/showRestaurante" class="card-text" style="font-size :3vh;">RESTAURANTE</a>
                        </div>
                    </div>

                    <div class="card border-dark" style="width: 18rem; height : 18rem; margin-top : 5vh; margin-left : 2vh;">                          
                        <img src="img/homeImg/entrada.png" alt="Card image cap" >
                        <div class="card-body text-center">
                            <a href="/showProductos" class="card-text" style="font-size :3vh;">ENTRADAS</a>
                        </div>
                    </div>

            </div>

        </div>
    
</div>
@endsection
