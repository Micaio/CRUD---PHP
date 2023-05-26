<?php 
       require 'config.php';
       $lista =[];
       $sql = $pdo->query("SELECT * FROM test.usuario");
       if($sql->rowCount() > 0){
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
       };
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title> 
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

    <h1>Listagem de Usuários</h1>
    <table border="1">
       <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
       </tr>

    <?php  foreach($lista as $usuario):?>
          <tr>
                <td><?=$usuario["idusuario"]?></td>
                <td><?= $usuario["nome"]?></td>
                <td><?=$usuario["email"]?></td>
                <td>
                    <a href="editar.php?id=<?=$usuario['idusuario'];?>">[ Editar ]</a>
                    <a href="excluir.php?id=<?=$usuario['idusuario'];?>">[ Excluir ] </a>
                </td>
          </tr>
      <?php endforeach; ?> 
      </table>  
    <a href="cadastrar.php">Cadastrar Usuário</a>
   
</body>
</html>
