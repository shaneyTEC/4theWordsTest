<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Leyenda</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('scss/app.scss')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <div class="wrap">
    <!-- START Top Nav / Header Block  -->
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
    <!-- END Top Nav / Header Block  -->
    <!-- START ADD Leyend Form / Content Block -->
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                     <h1 >Crear leyenda</h1>

                        <form action="/leyends"  method="post">
                            @csrf
                            <label for="name" class="field-label">Título: </label>
                            <input type="text" name="name" id="name" class="field-input">
                            
                            <label for="image_url" class="field-label">URL de la imagen de refrencia: </label>
                            <input type="text" name="image_url" id="image_url" class="field-input">

                            <label for="location" class="field-label">Provincia de origen: </label>
                            <select size="1" name="location" id="location" class="field-input">
                                @foreach ($locations as $location) 
                                    <option value="{{$location->id}}">{{ $location->name }}</p>
                                @endforeach
                            </select>

                            <label for="description" class="field-label">Descripción:</label>
                            <textarea name="description" id="description" rows="10" class="field-textarea"></textarea>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    <!-- END ADD Leyend Form / Content Block -->
    </div>
</body>
</html>