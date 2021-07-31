<?php
$name = 'Matheus';
$notas = [
  'nota1' => 2,
  'nota2' => 6,
  'nota3' => 7,
];

$sumNotas = 0;
foreach ($notas as $nota) {
  $sumNotas = $nota + $sumNotas;
};

$media =  $sumNotas / 3;

if ($media <= 4) {
  echo 'reprovado';
}

if (4 < $media && $media < 7) {
  echo 'em prova final';

}

if ($media > 7) {
  echo 'aprovado';

}