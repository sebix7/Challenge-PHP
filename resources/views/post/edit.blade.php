@extends("layout")

@section("title", "Editar post")

@section("content")
        <div class='container-fluid'>
            @foreach($post as $campo)
            <h1 class='h2 mt-3'>EDITAR POST</h1>
            <h2 class='h5 mt-3'>ID DEL POST: <strong>{{$campo->id}}</strong></h2>
            <form action="{{route('post.update', $campo, ['id'=>$campo->id])}}" method="POST">
                @csrf @method("PATCH")
                <div class="mt-3">
                    <div class="form-group">
                        <label for="titulo">Ingrese titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="{{$campo->titulo}}">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Ingrese categoria:</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{$campo->categoria}}">
                    </div>
                    <div class="form-group">
                        <label for="contenido">Ingrese contenido:</label>
                        <textarea class="form-control" id="contenido" name="contenido">{{$campo->contenido}}</textarea>
                    </div>                    
                    <div class="form-group">
                        <label for="fecha_de_creacion">Ingrese fecha de creación:</label>&nbsp;
                        <input type="date" id="fecha_de_creacion" name="fecha_de_creacion" value="{{$campo->fecha_de_creacion}}">
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark mb-3">Actualizar</button>
                </div>
            </form>
            @endforeach
        </div>
@endsection
