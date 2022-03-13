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

                        <form action="">
                            <label for="title" class="field-label">Título: </label>
                            <select size="1" name="select" class="field-input">
                                <option value="ascendente">Ascendente (Z-A)</option>
                                <option value="descendente" active>Descendente (A-Z)</option>
                            </select>
                        
                            <label for="title" class="field-label">Provincia de origen: </label>
                            <select size="1" name="select" class="field-input">
                                <option value="Todos" active>Todos</option>
                                <option value="SanJose">San José</option>
                                <option value="Alajuela">Alajuela</option>
                                <option value="Cartago">Cartago</option>                                
                                <option value="Heredia">Heredia</option>                              
                                <option value="Guanacaste">Guanacaste</option>
                                <option value="Puntarenas">Puntarenas</option>
                                <option value="Limon">Limón</option>
                            </select>

                            <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Leyendas</h4>
                        <pre>Título de una leyenda.</pre>
                        <pre>Título de una leyenda.</pre>
                        <pre>Título de una leyenda.</pre>
                        <pre>Título de una leyenda.</pre>
                        <pre>Título de una leyenda.</pre>
                        <pre>Título de una leyenda.</pre>
                    </div>
                </div>
                <div class="card card-big">
                    <div class="card-body">
                        <h4>Detalle de la Leyenda: Nombre</h4>

                        <p>Es el fantasma de una carreta que deambula por las noches las callejuelas de alguna ciudad, 
                            con el yugo alto y vacío, sin bueyes que la conduzcan ni boyero que la dirija.<p>

                        <p>Provincia de origen:</p>

                        <pre id="ship">
                                    <p class="ship-blue">Limón</p>
                                    <p class="ship-purple">San José</p>
                                    <p class="ship-red">Alajuela</p>
                                    <p class="ship-periwinkle">Cartago</p>
                                    <p class="ship-yellow">Heredia</p>
                                    <p class="ship-orange">Puntarenas</p>
                                    <p class="ship-green">Guanacaste</p>
                        </pre> 
                    </div>

                    <footer class="card-footer">
                        <a class="action-link action-edit">
                            <i class="icon icon-pen"></i>
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
