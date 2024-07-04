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
                <th>id</th>
                <th>piso</th>
                <th>area en metros cuadrados</th>
                <th>color</th>
                <th>idDuenio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($propiedades as $propiedade)
                
           <tr>
            <td>{{$propiedade->id}}</td>
            <td>{{$propiedade->piso}}</td>
            <td>{{$propiedade->area}}</td>
            <td>{{$propiedade->color}}</td>
            <td>{{$propiedade->idDuenio}}</td> 
           </tr>
          
          
          @endforeach
        </tbody>
        
    </table>
    
</body>
</html>