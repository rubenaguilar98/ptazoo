@extends("layouts.app")
<!DOCTYPE html>
<html>
    <head>



    </head>
    <body>
@section("navbar")


@endsection
@section("content")
   <div class="row justify-content-center">

        <div class="card bg-light mb-3" style="max-width: 60rem; margin-top : 3vh ; opacity : 0.95;">
            <div class="card-header">BIENVENIDOS A PTA ZOO</div>
            <div class="card-body">
                <h5 class="card-title">PTA ZOO es un zoo creado para que animales de todo el mundo con dificultades para la propia supervivencia tengan un lugar donde poder crecer , reproducirse y convivir con otros animales y personas. Si quieres vivir una experiencia única , no dudes en visitarnos. La diversión está asegurada !</h5>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

    <div class="card bg-light mb-3" style="max-width: 35rem;  opacity : 0.95;">
        <div class="card-header">REGISTRATE</div>
        <div class="card-body">
            <h5 class="card-title">Si quieres ver todo nuestro contenido <a href="{{ route('register') }}"> !REGISTRATE! </a></h5>
        </div>
    </div>
    </div>

    <div class="row justify-content-center">
        <div class="card bg-light mb-3" style="max-width: 50rem;">
            <div class="card-body">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="img/carousel.jpg" alt="First slide" style="width : 100%; height : auto;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel2.jpg" alt="Second slide" style="width : 100%; height : auto;">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/carousel3.jpg" alt="Third slide" style="width : 100%; height : auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

    <div class="card bg-light mb-3" style="width: 35rem;opacity : 0.95;">
        <div class="card-header">Horario</div>
        <div class="card-body">
            <p class="card-text">De lunes a viernes : 10:00 - 21:00</p>
            <p class="card-text">Sabados : 10:00 - 17:00</p>
            <p class="card-text">Domingos : Cerrado</p>
        </div>
    </div>
    </div>

    <div class="row justify-content-center">

    <div class="card bg-light mb-3" style="max-width: 30rem;opacity : 0.95;">
        <div class="card-header">UBICACION</div>
        <div class="card-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2260.748614607414!2d-4.560312583823931!3d36.74221785002063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1605462262799!5m2!1ses!2ses" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    </div>
        </div>



    @endsection
    </body>
</html>
