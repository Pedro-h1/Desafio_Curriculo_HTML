<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["msg"];

echo "<h1>Mensagem recebida!</h1>";

echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Assunto:</strong> $assunto</p>";
echo "<p><strong>Mensagem:</strong> $mensagem</p>";

?>