<?php

include_once ("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nasc = filter_input(INPUT_POST, 'nasc', FILTER_SANITIZE_STRING);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Nascimento: $nasc <br>";
echo "Telefone: $tel <br>";

$result_cadastro = "INSERT INTO cadastro (nome, email, nascimento, telefone) VALUES ('$nome', '$email', '$nasc', '$tel')";

$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if (mysqli_insert_id($conn)){
    header("Location: estagio.php");
} else {
    header("Location: estagio.php");
}