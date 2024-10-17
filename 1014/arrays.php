<?php
# "matrizes"
$a = [17, 32];
$b = [15, 60];
$c = [$a, $b];
echo $c[1][0];

###############################
# arrays multidimensionais
$a = ['a','b','c','d'];
$b = ['e','f','g','h'];
$c = ['i','j','k','l'];
$d = ['m','n','o','p'];
$e = [$a, $b];
$f = [$c, $d];
$g = [$e, $f];
echo $g[0][1][3]; # h
echo $g[1][1][3]; # p
# adicionar um novo elemento
$d[] = 'q';
$d[] = 'r';
# percorrer um array
foreach($d as $element){
    echo "<p>$element</p>";
}
#percorrer com chave e valor
echo '<h3>percorrer com chave e valor</h3>';
foreach($d as $key => $element){
    echo "<p>$element está na posição $key</p>";
}

# arrays associativos
$estados = ['SC' => 'Santa Catarina', 'PR' => 'Paraná'];

echo $estados['SC'];
# adicionar um elemento com chave
$estados['RS'] = 'Rio Grande do Sul';

echo '<h3>array associativo</h3>';
foreach($estados as $uf => $nome){
    echo "<p>$uf - $nome</p>";
}

# percorrer um array bidimensional
$a = ['a','b','c','d'];
$b = ['e','f','g','h'];
$e = [ $a, $b];
echo '<h3>Matriz</h3>';
foreach($e as $vetor){
    foreach($vetor as $letra){
        echo "<p>$letra</p>";
    }
}
# imprimir $e em uma tabela html 2 linhas x 4 colunas
echo '<table border="1">';
foreach($e as $linha){   
    echo '<tr>';
    foreach($linha as $letra){
        echo "<td>$letra</td>";
    }
    echo '</tr>';
}
echo '</table>';