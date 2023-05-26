<?php 
       require 'config.php';

 $nome = filter_input(INPUT_POST,'name');
 $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL) ; //filter verifica se o email é valido

 if($nome && $email){ //verifica se esse email existe
     $sql =  $pdo->prepare("SELECT * FROM test.usuario where email = :email");
     $sql->bindValue(':email',$email); 
     $sql->execute(); 

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO test.usuario (nome ,email) values(:nome,:email)"); 
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email', $email);
        $sql->execute();
        header("Location: index.php");
        exit;
    }else{
        header("Location: cadastrar.php");
        exit;
    };
    

 }else{
    header("Location: index.php");
    exit;
 };

?> 
  <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>