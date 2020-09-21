@extends("layout")

@section("title", "Editar post")

@section("content")
        <div class='container-fluid'>
            <h1 class='h2 mt-3'>CREAR NUEVO POST</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="form-group">
                        <label for="titulo">Ingrese titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$post->titulo}}" required>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Ingrese contenido:</label>
                        <textarea class="form-control" id="contenido" name="contenido" value="{{$post->titulo}}"  required></textarea>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mb-3">Crear</button>
                </div>
            </form>
        </div>
@endsection
