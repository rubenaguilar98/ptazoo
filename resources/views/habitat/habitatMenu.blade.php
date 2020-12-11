@extends("layouts.app")


@section("content")
<div class="contenido" style="margin : 5vh 10vh 10vh 10vh;background-color: rgba(255, 255, 255, 0.8);">
    <button href="/" class="btn btn-secondary btn-lg " style="margin : 3vh;float:left ;">
        <a href="/" data-toggle="tooltip" data-placement="top" title="Editar" style="color : white;">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z"/>
            </svg>
        </a>
    </button>
    <div>
            <div class="row col-md-12 justify-content-center">
            @foreach($habitats->sortBy('nombre') as $habitat)

            <div class="card" style="width: 25%; margin : 5vh;">
				<img src="img/habitat/{{ $habitat->img }}" class="card-img-top" style="width : 100%; height : 15rem;"/>
				<div class="card-body text-center text-white" >
				    <button class="btn btn-primary"><a href="/showHabitat/{{ $habitat->idHab }}" class="card-title text-white">{{ $habitat->nombre }}</a></button>
				</div>
			</div>
            @endforeach
            </div>
    </div>
</div>
@endsection
