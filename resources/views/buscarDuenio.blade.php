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
        <form action="{{ route('duenio.buscar') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="text">duenioID</label>
                <input type="text" id="duenioID" name="duenioID" required>
            </div>
       
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>