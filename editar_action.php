<?php 
 require 'config.php';
 

 $usuario = [];
 $id = filter_input(INPUT_POST,'id');
 $nome = filter_input(INPUT_POST ,'nome');
 $email = filter_input(INPUT_POST,'email' ,FILTER_VALIDATE_EMAIL);


 if($id && $nome && $email){

    $sql = $pdo->prepare("UPDATE test.usuario SET  nome = :nome , email = :email where  idusuario = :id; ");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':id',$id);
    $sql->execute();
     header("Location: index.php");
     exit;
    echo "aqui";
 }else{
    header("Location: index.php");
    exit;
 }
 echo "aqui fora";
 ?>