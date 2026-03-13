<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>

    @vite('resources/css/app.css')

</head>
<body>

<div class="container">

<h1>Información del Contacto</h1>

<div class="field">
<p><strong>Name:</strong> {{ session('name') }}</p>
</div>

<div class="field">
<p><strong>Phone:</strong> {{ session('phone') }}</p>
</div>

<div class="field">
<p><strong>Address:</strong> {{ session('address') }}</p>
</div>

<div class="field">
<p><strong>Email:</strong> {{ session('email') }}</p>
</div>

<div class="field">
<p><strong>Civil Status:</strong> {{ session('status') }}</p>
</div>

</div>

</body>
</html>
