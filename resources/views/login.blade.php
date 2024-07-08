<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main class="container align-center p-5">
        <a type="button" class="btn btn-success" href="{{ route('welcome') }}">Regresar al inicio</a>

        <form method="POST" action="{{ route('iniciar-sesion') }}">
            @csrf
            <br>
            <br>
            <br>
               <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email" required
                >
               </div>
               <div class="mb-3">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="passwordInput" name="password" required >
               </div>
               {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
            </div> --}}
            <div>
                <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Registrate</a></p>
            </div>
               <button type="submit" class="btn btn-primary">Acceder</button>
              </form>

    </main>
</body>
</html>
