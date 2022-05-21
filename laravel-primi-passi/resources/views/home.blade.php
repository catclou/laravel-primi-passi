@php 
    $dato1 = 'Questo è il primo dato dinamicizzato';
    $dato2 = 'Questo è il secondo dato dinamicizzato';
    $dato3 = 'Questo è il terzo dato dinamicizzato';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <h1>Hello world</h1>
    <h3>{{$dato1}}</h3>
    <h3>{{$dato2}}</h3>
    <h3>{{$dato3}}</h3>
</body>
</html>