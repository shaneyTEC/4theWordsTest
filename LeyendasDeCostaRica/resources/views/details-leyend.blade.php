<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$leyend['name']}}</title>
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
    <!-- START See Leyend Details / Content Block -->
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1 >Detalles de la leyenda "{{$leyend['name']}}"</h1>

                        <form action="">
                        <img src="{{$leyend['image_url']}}" class="card-img-top"/>
                        <div id="list" > 
                            <div id="ship">
                                <p id="ship-title">Provincia de origen:</p>
                                @if ($leyend['location'] === 1)
                                    <p class="ship-blue">Limón</p>
                                @elseif ($leyend['location'] === 2)
                                    <p class="ship-purple">San José</p>
                                @elseif ($leyend['location'] === 3)
                                    <p class="ship-red">Alajuela</p>
                                @elseif ($leyend['location'] === 4)
                                    <p class="ship-periwinkle">Cartago</p>
                                @elseif ($leyend['location'] === 5)
                                    <p class="ship-yellow">Heredia</p>
                                @elseif ($leyend['location'] === 6)
                                    <p class="ship-orange">Puntarenas</p>
                                @elseif ($leyend['location'] === 7)
                                    <p class="ship-green">Guanacaste</p>
                                @endif
                            </div> 
                        </div> 
                        <p id="ship-title">Provincia de origen:</p>
                        <p>{{$leyend->description}}</p>
                        </form>
                        <a href="/leyend/{{$leyend->id}}/edit" class="button btn btn-primary">Editar leyenda</a>
                       
                    </div>
                </div>
            </div>
        </main>
    <!-- END See Leyend Details / Content Block -->
    </div>
</body>
</html>