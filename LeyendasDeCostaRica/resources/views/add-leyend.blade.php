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
        <header class="head">
            <a href="#" class="logo"> 
                <img src="https://cdn-icons.flaticon.com/png/512/5482/premium/5482886.png?token=exp=1647163585~hmac=f886a8947cfd2ac3a65a3635b4127769"
                 alt="Leyendas de Costa Rica">      
            </a>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li class="main-nav-item">
                        <a href="/leyends"class="main-nav-link">
                            <span>Ver leyendas</span>
                        </a>
                    </li>
                    <li class="main-nav-item active">
                        <a href="/leyend/add" class="main-nav-link">
                            <span>Agregar leyenda</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                     <h1 >Nueva leyenda</h1>

                        <form action="/leyends"  method="POST">
                            <label for="name" class="field-label">Título: </label>
                            <input type="text" name="name" id="name" class="field-input">
                            
                            <label for="image_url" class="field-label">URL de la imagen de refrencia: </label>
                            <input type="text" name="image_url" id="image_url" class="field-input">

                            <label for="location" class="field-label">Provincia de origen: </label>
                            <select size="1" name="location" id="location" class="field-input">
                                <option value="SanJose" selected>San José</option>
                                <option value="Alajuela">Alajuela</option>
                                <option value="Cartago">Cartago</option>                                
                                <option value="Heredia">Heredia</option>                              
                                <option value="Guanacaste">Guanacaste</option>
                                <option value="Puntarenas">Puntarenas</option>
                                <option value="Limon">Limón</option>
                            </select>

                            <label for="description" class="field-label">Descripción:</label>
                            <textarea name="description" id="description" rows="10" class="field-textarea"></textarea>

                            <button type="submit" class="btn btn-primary">Crear</button>
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