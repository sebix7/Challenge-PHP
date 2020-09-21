@extends("layout")

@section("title", "Ver Post")

@section("content")
    <div class='container-fluid'>
        @forelse($post as $campo)
        <h1 class='h2 mt-3'>ID DEL POST: <strong>{{$campo->id}}</strong></h1>
        <div class='jumbotron text-center bg-light mt-3' style='margin-bottom:0'>
            <div class='row no-gutters'>
                <div class='col-md-4'>
                    <img src='../images/" . $campo["imagen"] . "' class='card-img'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>
                        <h5 class='card-title'>{{$campo->titulo}}</h5>
                        <h6>{{$campo->categoria}} - {{$campo->fecha_de_creacion}}</h6>
                        <p class='card-text'>{{$campo->contenido}}</p>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger text-center mt-3">
            No existe ningún post con este ID.
        </div>
        @endforelse
    </div>
@endsection