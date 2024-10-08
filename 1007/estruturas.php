<?php
$a = 3;
$b = 4;
$c = '4';

// estruturas de controle
if($a > $b){
    echo '$a é maior que $b';
}
elseif($a == $b){
    echo '$a é igual a $b';
}
else{
    echo '$b é maior que $a';
}
echo '<hr>';
# ternário
echo ($a>=$b)?'a é maior':'b é maior';
echo '<hr>';
if($a>=$b){
    echo 'a é maior';
}
else {
    echo 'b é maior';
}

echo '<hr>';

switch($a){
    case 1:
        echo '$a vale 1';
        break;
    case 2:
        echo '$a vale 2';
        break;
    default:
        echo '$a é outro valor';
}
echo '<hr>';
$b = 4;
$c = '4';
# compara só o valor
if($b==$c){
    echo '$b e $c são iguais';
}
else{
    echo '$b e $c são diferentes';
}

echo '<hr>';
# compara o valor e o tipo das variáveis
if($b===$c){
    echo '$b e $c são iguais';
}
else{
    echo '$b e $c são diferentes';
}





















