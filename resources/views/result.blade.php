<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>

    @vite('resources/css/app.css')

</head>
<body>

<div class="container">

<h1>Información del Contacto</h1>

<div class="field">
<p><strong>Nombre:</strong> {{ session('name') }}</p>
</div>

<div class="field">
<p><strong>Teléfono:</strong> {{ session('phone') }}</p>
</div>

<div class="field">
<p><strong>Dirección:</strong> {{ session('address') }}</p>
</div>

<div class="field">
<p><strong>Correo Electrónico:</strong> {{ session('email') }}</p>
</div>

<div class="field">
<p><strong>Estado Civil:</strong> {{ session('status') }}</p>
</div>

<a href="/contact" class="button">Volver</a>

</div>

</body>
</html>
