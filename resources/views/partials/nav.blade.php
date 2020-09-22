        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.create')}}">Crear post</a>
                    </li>
                </ul>
            <form class="form-inline my-2 my-lg-0" action="{{route('post.show', 'id')}}" method="GET">
                @csrf
                <input id="id" name="id" class="form-control mr-sm-2" type="search" placeholder="Ingrese ID" aria-label="Search">
                <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Buscar">
            </form>
            </div>
        </nav>