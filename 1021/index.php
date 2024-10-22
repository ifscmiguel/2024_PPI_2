<?php
# arquivo index.php
# require, include, require_once, include_once
require("Usuario.php");

$user = new Usuario("Miguel");
echo "<p>O nome do user é $user->nome</p>";
$user->sobrenome = "Cabral";

echo "<p>{$user->getNomeCompleto()}</p>";
echo '<p>'.$user->getNomeCompleto().'</p>';

# chamar o invoke (usar o obj como uma função)
$user();

$user->email = 'miguel@gmail.com';
echo "<p>meu e-mail é $user->email";
