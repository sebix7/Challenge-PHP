@extends("layout")

@section("title", "Crear post")

@section("content")
        <div class='container-fluid'>
            <h1 class='h2 mt-3'>CREAR NUEVO POST</h1>
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="form-group">
                        <label for="titulo">Ingrese titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Ingrese categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria">
                    </div>
                    <div class="form-group">
                        <label for="contenido">Ingrese contenido:</label>
                        <textarea class="form-control" id="contenido" name="contenido"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="fecha_de_creacion">Ingrese fecha de creación:</label>&nbsp;
                        <input type="date" id="fecha_de_creacion" name="fecha_de_creacion">
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mb-3">Crear</button>
                </div>
            </form>
        </div>
@endsection
