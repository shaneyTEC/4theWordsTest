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
    <div class="wrap">
        <header class="head">
            <a href="#" class="logo"> 
                <img src="https://cdn-icons.flaticon.com/png/512/5482/premium/5482886.png?token=exp=1647163585~hmac=f886a8947cfd2ac3a65a3635b4127769"
                 alt="Leyendas de Costa Rica">      
            </a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item active">
                        <a href="/leyends" class="main-nav-link">
                            <span>Ver leyendas</span>
                        </a>
                    </li>
                    <li class="main-nav-item">
                        <a href="/leyend/add" class="main-nav-link">
                            <span>Agregar leyenda</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-small">
                    <div class="card-body">
                        <h4>Filtros</h4>

                        <form action="/leyends/filter" method="POST">
                            <label for="title" class="field-label">Título: </label>
                            <select size="1" name="select" class="field-input">
                                <option value="ascendente">Ascendente (Z-A)</option>
                                <option value="descendente" active>Descendente (A-Z)</option>
                            </select>
                        
                            <label for="title" class="field-label">Provincia de origen: </label>
                            <select size="1" name="selectfilter" id="selectfilter"class="field-input">
                                <option value="0" selected>Todos</option>
                                <option value="1">Limón</option>
                                <option value="2">San José</option>
                                <option value="3">Alajuela</option>
                                <option value="4">Cartago</option>                                
                                <option value="5">Heredia</option>    
                                <option value="6">Puntarenas</option>                          
                                <option value="7">Guanacaste</option>
                            </select>

                            <a href="/leyends/filter" class="button btn btn-primary">Aplicar Filtros</a>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" id="leyend-titles">
                        <h4>Leyendas</h4>
                        <div> 
                            <ol> 
                                @foreach ($leyends as $leyend)
                                    <li><a href="/leyend/{{$leyend->id}}"><pre>{{$leyend['name']}}</pre><a></li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card card-big">
                    <div class="card-body">
                        <h4>Detalle de la Leyenda: {{$leyends[0]['name']}}</h4>

                        <div id="ship">
                            <p>Provincia de origen:</p>
                                @if ($leyends[0]['location'] === 1)
                                        <p class="ship-blue">Limón</p>
                                @elseif ($leyends[0]['location'] === 2)
                                        <p class="ship-purple">San José</p>
                                @elseif ($leyends[0]['location'] === 3)
                                        <p class="ship-red">Alajuela</p>
                                @elseif ($leyends[0]['location'] === 4)
                                        <p class="ship-periwinkle">Cartago</p>
                                @elseif ($leyends[0]['location'] === 5)
                                        <p class="ship-yellow">Heredia</p>
                                @elseif ($leyends[0]['location'] === 6)
                                        <p class="ship-orange">Puntarenas</p>
                                @elseif ($leyends[0]['location'] === 7)
                                        <p class="ship-green">Guanacaste</p>
                                @endif
                            </div> 

                        <p>{{$leyends[0]['description']}}<p>
                    </div>

                    <footer class="card-footer">
                        <a href="/leyend/{{$leyends[0]['id']}}/edit" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                    </footer>
                </div>
                <div class="card">
                    <div class="card-body" id="bottom-card">
                        <h4>El Origen</h4>
                        <div>
                            <img src="https://i.pinimg.com/originals/a7/a0/d3/a7a0d3de9c5698f1679309de8c53cb09.jpg" alt="CR Ayer y Hoy | Puntarenas, Costa rica, Antigua">
                            <span> 
                                <p>En tiempos muy antiguos donde no existía la televisión, había muy poca delincuencia y las familias tenían muchos hijos.</p>
                                <hr/>
                                <p>Los abuelos o ancianos de Costa Rica se sentaban en el corredor con todos sus nietos e hijos
                                    a relatar innumerables historias y leyendas de terror vividas por ellos para entretenerlos.</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" id="bottom-card">
                        <h4>De generación en generación</h4>
                        <div> 
                            <img src="https://maritzacartin.files.wordpress.com/2020/08/portada-para-tiempo-cronolc3b3gico-de-la-radio-en-costa-rica.jpg" 
                            alt="La Radio en Costa Rica…su historia">
                            <span> 
                                <p>De este modo han pasado a todas las generaciones, actualmente hay personas que han vivido
                                experiencias cercanas con algunos personajes de estos relatos como: “La Segua“, “La Llorona” o “El Cadejos“.
                                </p>
                                <a href="/leyend/add" class="button btn btn-primary">Crear leyenda</a>
                            </span>
                        </div>
                     </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
