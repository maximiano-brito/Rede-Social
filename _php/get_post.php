<?php

if(isset($_POST['email'], $_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST['email']=='root@outlook.com' and $_POST['password']=='pass'){
        echo "Login efetuado com sucesso!";
    }else{
        echo "Erro ao iniciar sessão. Tente de novo.";
    }
}

?>

<form action="index.php" method="post">
    <input type="text" name="email" placeholder="E-mail">
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
</form>
