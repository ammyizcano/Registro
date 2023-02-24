<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>¡Hola!</p>
    <p>Una persona desea comunicarse contigo: <b>{{$contactame->nombre}}</b></p>
    <table>
        <tr>
            <td><b>Nombre</b></td>
            <td>{{$contactame->nombre}}</td>
        </tr>
       <tr>
            <td><b>Identidad</b></td>
            <td>{{$contactame->identidad}}</td>
        </tr>
        <tr>
            <td><b>Celular</b></td>
            <td>{{$contactame->celular}}</td>
        </tr>
        
        <tr>
            <td><b>Departamento</b></td>
            <td>{{$contactame->departamento}</td>
        </tr>
  
    </table>


</body>
</html>