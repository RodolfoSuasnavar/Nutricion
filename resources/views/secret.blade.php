<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calorie Tracked</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center
        justify-content-center justify-content-md-between py-3 mb-4 border-buttom">
        <a class="d-flex flex-wrap align-items-center
        justify-content-center col-mb-3 mb-2 mb-md-0 text-dark text-decoration-none">
        Calorie Tracked @auth de {{Auth::user()->name}} @endauth
        </a>
        <div class="col-md-3 text-end">
            <a href="{{ route('logout') }}"><button type="button" class="btn btn-outline-primary me-2">
                Salir</button></a>
        </div>
        </header>
    </div>
    <article class="container text-center">
        <h2>Nutrición</h2>
    </article>
    <div class="card text-center">
        <div class="card-header">
          Selecciona la opción que quieres hacer!!.
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Registrar Alimento</h5>
                      <p class="card-text">Registra los los alimentos y bebidas que consumen diariamente.</p>
                      <a href="{{ route('alimento.index')}}" class="btn btn-primary">Registrar</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Registrar progreso</h5>
                      <p class="card-text">Registra los progresos de tu salud y estado físico.</p>
                      <a href="#" class="btn btn-primary">Registrar</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="card-footer text-body-secondary">

        </div>
      </div>

</body>
</html>
