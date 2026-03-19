<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>

    @vite('resources/css/app.css')

</head>
<body>

<div class="container">

<h1>Formulario de Contacto</h1>

@if ($errors->any())
    <div style="color:red; margin-bottom:20px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="/contact">
    @csrf

    <div class="field">
        <label>Nombre</label>
        <input type="text" name="name" required>
    </div>

    <div class="field">
        <label>Teléfono</label>
        <input type="text" name="phone" required>
    </div>

    <div class="field">
        <label>Dirección</label>
        <input type="text" name="address" required>
    </div>

    <div class="field">
        <label>Correo Electrónico</label>
        <input type="text" name="email" required>
    </div>

    <div class="field">
        <label>Estado Civil</label>
        <select name="status" required>
            <option value="">Seleccione una opción</option>
            <option value="Soltero/a">Soltero/a</option>
            <option value="Casado/a">Casado/a</option>
            <option value="Divorciado/a">Divorciado/a</option>
            <option value="Viudo/a">Viudo/a</option>
        </select>
    </div>

    <button type="submit">Enviar</button>

</form>

</div>

</body>
</html>
