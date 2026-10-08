<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <h1>Adicionar novo usuario</h1>


    <form action="/add" method="post">
        
        @csrf

        <label for="name">Nome:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Senha:</label>
        <input type="password" name="password" required>
        
      
         
        <label for="password_confirmation">Confirmação de Senha:</label>
        <input type="password" name="password_confirmation" required>
         
        <button type="submit">Criar user</button>   
    </form>
	
</body>
</html>