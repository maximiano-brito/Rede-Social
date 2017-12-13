<?php

if(isset($_POST['first'], $_POST['last'],$_POST['email'], $_POST['password'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Bem-vindo(a) {$first} {$last}!";
}

?>

<form action="index.php" method="post">
    <br/>
    <input type="text" name="first" placeholder="Primeiro Nome">
    &nbsp
    <input type="text" name="last" placeholder="Último Nome">
    <br/><br/>
    <input type="text" name="email" placeholder="E-mail">
    <br/><br/>
    <input type="password" name="password" placeholder="Password">
    <br/><br/>
    <input type="button" value="Submeter" onclick="msg()">
</form>

<script>
    function msg() {
        alert("Bem-vindo(a)!");
    }
</script>