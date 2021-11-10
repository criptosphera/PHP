<?php

$a = 'joao';
$b = 'carlos';

$c=($a == $b);
$d=($a != $b);

echo $a;
echo '<br>';

$frase = 'Esta frase tem 29 caracteres';

$numero_caracteres_total = strlen($frase);

echo $numero_caracteres_total;
echo '<br>';

$primeira_palavra = substr($frase, 0,4);

echo $primeira_palavra;
echo '<br>';

$todas_maiusculas = strtoupper($frase);

echo $todas_maiusculas;
echo '<br>';

$todas_minusculas = strtolower($frase);

echo $todas_minusculas;
echo '<br>';

$nova_frase = str_replace('a','x',$frase);

echo $nova_frase;
echo '<br>';

$posicao = strpos($frase,'a');
echo $posicao;
echo '<br>';

$nome = "Ana Maria Silva Cardoso";
$x = str_contains($nome, 'Silva');

echo $x;
echo '<br>';
