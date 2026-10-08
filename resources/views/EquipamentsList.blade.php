<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <h1>Lista de Equipamentos</h1>

    @foreach ($user as $list)

    <ul>
        <li> {{$list->model}}</li>
        <li> {{$list->type}}</li>
        <li> {{$list->unit}}</li>
        <li> {{$list->patrimonio}}</li>
        <li> {{$list->glpi}}</li>
        <li> {{$list->status}}</li>
        
        
    </ul>
    
    @endforeach

    
</body>
</html>