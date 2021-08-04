<?php

function getCells(): string {
  $depreciation = 4000;
  $valueTotal = 28000;
  $cells = "";

  for ($i = 1; $i <= 7; $i++) {
    $currentDepreciation = $i * $depreciation;
    $valueDepreciated = $valueTotal - $currentDepreciation;

    $cells .= "
      <tr>
        <td>$i</td>
        <td>$depreciation</td>
        <td>$valueDepreciated</td>
        <td>$currentDepreciation</td>
      </tr>
    ";
  }

  return $cells;
}

function getTablePerson() {
  $cells = getCells();
  echo "
    <table border='1'>
      <tr style='text-align: center'>
        <th>Ano</th>
        <th>Depreciação</th>
        <th>Valor no fim do ano</th>
        <th>Depreciação acomulada</th>
      </tr>
        $cells
    </table>
  ";
}

getTablePerson();