@extends("layout")

@section("title", "Posts")

@section("content")
    <div class="container-fluid">
        <h1 class="h2 mt-3">ULTIMOS 50 POSTS</h1>
        <table class="table table-sm mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fecha de creación</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse($posts as $post)
                <tr>
                    <td>@php echo $i++ @endphp</td>
                    <td>{{$post->id}}</td>
                    <td>{{$post->titulo}}</td>
                    <td><img src="images/{{$post->imagen}}" class="img-fluid"></td>
                    <td>{{$post->categoria}}</td>
                    <td>{{$post->fecha_de_creacion}}</td>
                </tr>
                @empty
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection