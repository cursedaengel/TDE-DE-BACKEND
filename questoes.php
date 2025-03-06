<?php
// *_*_*_*_*_*_*_*_*_*_*_
// NOTA ESQUECIDA
$a = 1;
$m = 5;


$b = (2*$m) - $a;
echo $b;


// *_*_*_*_*_*_*_*_*_*_*_
//ALTURA MINIMA


$altura = 120;
$brinquedos = [200, 90, 100, 123, 120, 169];
$quantidade = 0;


foreach ($brinquedos as $brinquedo) {
    if ($altura >= $brinquedo) {
        $quantidade += 1;
    }
}
echo $quantidade;


// *_*_*_*_*_*_*_*_*_*_*_
//TELEFERICO
$qnt_alunos = 20;
$qnt_max_cabine = 10;
$nova_qnt_max_cabine = $qnt_max_cabine - 1;
$qnt_viagens = 0;


while ($qnt_alunos > 0):
    $qnt_alunos -= $nova_qnt_max_cabine;
    $qnt_viagens += 1;
endwhile;


echo $qnt_viagens;

