<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Leyenda</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('scss/app.scss')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="wrap">
        <header class="head">
            <a href="#" class="logo">      
            </a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                    <hr class="hr-vertical"/>
                        <a href="/leyends" class="main-nav-link">
                        <i class="icon icon-th-list"></i>
                            <span>Ver leyendas</span>
                        </a>
                    <hr class="hr-vertical"/>
                    </li>
                    <li class="main-nav-item">
                    <hr class="hr-vertical"/>
                        <a href="/leyend/add" class="main-nav-link">
                        <i class="icon icon-pen"></i>
                            <span>Agregar leyenda</span>
                        </a>
                        
                    <hr class="hr-vertical"/>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1 >Actualizar leyenda</h1>

                        <form action="/leyends" method="POST">
                            @csrf
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input" value="{{$leyend->name}}" >
                            
                            <label for="title" class="field-label">URL de la imagen de refrencia: </label>
                            <input type="text" name="title" id="title" class="field-input" value="{{$leyend->image_url}}">

                            <label for="title" class="field-label">Provincia de origen: </label>
                            <select size="1" name="select" class="field-input">

                            @foreach ($locations as $location)
                                @if ($leyend->location === $location->id)
                                <option value="$location->id" selected>{{ $location->name }}</p>
                                @else 
                                <option value="$location->id">{{ $location->name }}</p>
                                @endif
                            @endforeach
                           
                            </select>

                            <label for="content" class="field-label">Descripción:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea">{{$leyend->description}}</textarea>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="foot">
        </footer>
    </div>
</body>
</html>