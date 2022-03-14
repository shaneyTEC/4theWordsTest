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
                        <h1 >Detalles de la leyenda</h1>

                        <form action="">
                        <img src="{{$leyend['image_url']}}" class="card-img-top"/>
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input" value="{{$leyend->name}}" disabled>

                            <label for="title" class="field-label">Provincia de origen: </label>
                            <select size="1" name="select" class="field-input" disabled>
                            @if ($leyend->location === 1)
                            <option value="1">Limón</p>
                            @elseif ($leyend->location === 2)
                                <option value="2">San José</p>
                                @elseif ($leyend->location === 3)
                                <option value="3">Alajuela</p>
                                @elseif ($leyend->location === 4)
                                <option value="4">Cartago</p>
                                @elseif ($leyend->location === 5)
                                <option value="5">Heredia</p>
                                @elseif ($leyend->location === 6)
                                <option value="6">Puntarenas</p>
                                @elseif ($leyend->location === 7)
                                <option value="7">Guanacaste</p>
                                @endif
                            </select>

                            <label for="content" class="field-label">Descripción:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea" disabled>{{$leyend->description}}</textarea>
                        </form>
                        <a href="/leyend/{{$leyend->id}}/edit" class="button btn btn-primary">Editar leyenda</a>
                       
                    </div>
                </div>
            </div>
        </main>
        <footer class="foot">
        </footer>
    </div>
</body>
</html>