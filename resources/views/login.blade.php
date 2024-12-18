<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background-image: url('asset/img/fondo');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh; /* Asegura que cubra toda la ventana */
        margin: 0;
    }
</style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1>¡Bienvenido a nuestra historia interactiva!</h1>
        <form action="/dashboard" method="GET">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>
</div>
</body>
</html>
