<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>ID del duenio {{$duenioEditar->idDuenio}}</h2>
    <div class="form-container">
        <form action="{{ route('duenio.editar.guardar',$duenioEditar->idDuenio) }}" method="PUT">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value={{$duenioEditar->nombre}} required>
            </div>
            <div class="form-group">
                <label for="text">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value={{$duenioEditar->apellido}} required>
            </div>
            <div class="form-group">
                <label for="email">Correo:</label>
                <input type="email" id="correo" name="correo" value={{$duenioEditar->correo}} required>
            </div>
            <button type="submit">Editar</button>
        </form>
    </div>
    
</body>
</html>
