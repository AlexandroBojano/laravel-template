<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

    <form action="/dashboard/admin/equipamentos/add" method="post">
        @csrf


    <label for="model">Modelo</label>
    <input type="text" name="model" id="" required>

    <label for="type">Tipo:</label>
    <select name="type" id="">
        <option value="impressora">Impressora</option>
        <option value="computer">Computador</option>
        <option value="Notebook">Notebook</option>
        <option value="allinone">All in One</option>
    </select>

    <label for="unit">Unidade</label>
    <input type="text" name="unit" id="" required>
    
    <label for="glpi">Número do GLPI</label>
    <input type="number" name="glpi" id="" required>

    <label for="patrimonio">Patrimonoio:</label>
    <input type="number" name="patrimonio" id="" required>    
    
    <label for="status">Status</label>
    <select name="status" id="">
        <option value="recebido">Recebido</option>
        <option value="planejado">Planejado</option>
        <option value="pendente">Pendente</option>
        <option value="pronto">Pronto</option>
        <option value="aguardando_retirada">Aguardando a Retirada</option>
         <option value="retirado">Retirado</option>
          <option value="inserviveis">Inserviveis</option>
    </select> 


    <button type="submit">Cadastrar Equipamento</button>
  
    

    </form>
	
</body>
</html>