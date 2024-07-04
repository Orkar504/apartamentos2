<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="form-container">
        <form action="{{ route('duenio.guardar') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="text">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <button type="submit">Guardar</button>
        </form>
    </div>
    
    
</body>
</html>