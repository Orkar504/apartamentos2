<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Propiedades</h1>

    <table>
        <thead>
            <tr>
                <th>idDuenio</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duenios as $duenio)
                
           <tr>
            <td>{{$duenio->idDuenio}}</td>
            <td>{{$duenio->nombre}}</td>
            <td>{{$duenio->apellido}}</td>
            <td>{{$duenio->correo}}</td> 
           </tr>
          
          
          @endforeach
        </tbody>
        
    </table>
    
</body>
</html>