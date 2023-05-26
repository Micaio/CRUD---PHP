<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Cadastrar Formulario</h1> 
        <form action="cadastrar_action.php" method="post">
            <label>
                Nome: <input type="text" name="name">
            </label>
            <label>
                Email: <input type="email" name="email">
            </label>
            <input type="submit" valuer=""Salvar>
        </form>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>


</body>
</html>