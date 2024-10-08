<?php
// arquivo variáveis.php

# isso também é um comentário de uma linha

/*
Esse é um comentário 
de várias linhas
*/

$a = 3;
$b = 1.3;
$c = "IFSC";
$d = 'Garopaba';
$e = $c . $d; # concatenação
echo '<h1>'.$c.' '.$d.'</h1>';
echo "<h1>$c $d</h1>"; # interpreta variáveis
echo '<h1>$c $d</h1>'; # não interpreta

$ifsc = "Eu estudo no IFSC Garopaba";
$x = 'ifsc';
echo $$x;

$verdaeiro = true;
$falso = false;

# operadores matemáticos
# + - / *

# operadores lógicos
# e &&
# ou ||
echo '<hr>';
echo 4 + '123abc'; # somar



