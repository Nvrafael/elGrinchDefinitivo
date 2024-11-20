<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/images/christmas-background.jpg');
            background-size: cover;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
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
</body>
</html>
