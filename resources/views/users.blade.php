<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/var.css">
</head>
<body>

    <h1>users</h1>

    <h2>teste</h2>

    @foreach ($user as $list)

    <ul class="user-list-ul">
        <li> {{$list->id}}</li>
        <li> {{$list->name}}</li>
        <li> {{$list->email}}</li>
        
    </ul>
    
    @endforeach

    
</body>
</html>