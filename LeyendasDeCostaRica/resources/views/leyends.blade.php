<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leyendas de Costa Rica</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('scss/app.scss')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="banner"> 
        <img src="img/banner.png" alt="Leyendas de Costa Rica">   
    </div>
    <header class="head main-nav">
            <a href="#" class="logo"> 
               <!-- <img src="https://cdn-icons.flaticon.com/png/512/5482/premium/5482886.png?token=exp=1647163585~hmac=f886a8947cfd2ac3a65a3635b4127769"
                 alt="Leyendas de Costa Rica">      -->
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
    <div class="wrap">
        <header class="head secondary-nav"> 
            <nav class="main-nav">
                <ul class="main-nav-list">
                <li class="main-nav-item">
                        <a href="/leyends" class="main-nav-link">
                            <span>Leyendas de Costa Rica</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[0]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Limón</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[1]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de San José</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[2]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Alajuela</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[3]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Cartago</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[4]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Heredia</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[5]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Puntarenas</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/{{$locations[6]['id']}}/filter" class="main-nav-link">
                            <span>Leyendas de Guanacaste</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                @forelse ($leyends as $leyend)
                <div class="card card-small">
                    <div class="card-body" id="leyend-titles">
                            <h4>Leyendas</h4>
                            <div id="list" > 
                                    
                                        <h4>Detalle de la Leyenda: <a href="/leyend/{{$leyend->id}}">{{$leyend['name']}}</a></h4>
                                        <div id="ship">
                                            <p>Provincia de origen:</p>
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

                                        <p class="description">{{$leyend['description']}}</p>
                            </div>
                    </div>
                    <footer class="card-footer">
                            <a href="/leyend/{{$leyend['id']}}" class="action-link action-see">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"/></svg>
                            </a>
                            <a href="/leyend/{{$leyend['id']}}/edit" class="action-link action-edit">
                                <i class="icon icon-pen"></i>
                            </a>
                            <a class="action-link action-delete">
                                <i class="icon icon-trash"></i>
                            </a>
                    </footer>
                </div>
                @empty
                    <p class="bg-danger text-white p-1">No hay leyendas disponibles</p>
                @endforelse

            </div>
        </main>
    </div>
</body>
</html>
