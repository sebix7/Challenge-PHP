@extends("layout")

@section("title", "Editar post")

@section("content")
        <div class='container-fluid'>
            @forelse($post as $campo)
            <h1 class='h2 mt-3'>EDITAR POST</h1>
            <h2 class='h5 mt-3'>ID DEL POST: <strong>{{$campo->id}}</strong></h2>
            <form action="{{route('post.update', $campo, ['id'=>$campo->id])}}" method="POST">
                @csrf @method("PATCH")
                <div class="mt-3">
                    <div class="form-group">
                        <label for="titulo">Ingrese titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$campo->titulo}}" required>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Ingrese contenido:</label>
                        <textarea class="form-control" id="contenido" name="contenido" required>{{$campo->contenido}}</textarea>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mb-3">Actualizar</button>
                </div>
            </form>
            @empty
            <div class="alert alert-danger text-center mt-3">
                No existe ningún post con este ID.
            </div>
            @endforelse
        </div>
@endsection
