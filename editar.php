 <?php 
 require 'config.php';
 

 $usuario = [];
 $id = filter_input(INPUT_GET,'id');

 if($id){
     $sql = $pdo->prepare("SELECT * FROM test.usuario WHERE idusuario = :id;");
     $sql->bindValue(':id' , $id);
     $sql->execute();
     
       if($sql->rowCount() > 0){

         $usuario = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
        header("Location: index.php");
        exit;
       
       }
     
 }else{
    header("Location: index.php");
        exit;  
 }
 
 ?>

 <h1>
    Editar Usuário
 </h1>
<link rel="stylesheet" href="style.css">
 <form action="editar_action.php" method="post">
    <input type="hidden" name="id"  value="<?=$usuario['idusuario'];?>">
        <label >
            Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>">
        </label>
        <label >
            Email: <input type="text" name="email" value="<?=$usuario['email'];?>">
        </label>
        <input type="submit" value="Atualizar">


 </form>