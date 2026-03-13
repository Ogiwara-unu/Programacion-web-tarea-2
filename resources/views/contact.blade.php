<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>

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
        <label>Name</label>
        <input type="text" name="name" required>
    </div>

    <div class="field">
        <label>Phone</label>
        <input type="text" name="phone" required>
    </div>

    <div class="field">
        <label>Address</label>
        <input type="text" name="address" required>
    </div>

    <div class="field">
        <label>Email</label>
        <input type="text" name="email" required>
    </div>

    <div class="field">
        <label>Civil Status</label>
        <input type="text" name="status" required>
    </div>

    <button type="submit">Enviar</button>

</form>

</div>

</body>
</html>
