<?php

function getCells(): string {
  $fahrenheit = 0;
  $celsius = 0;
  $cells = "";

  while ($celsius < 60) {
    // Fiz a alteração da formula dada no exercicio, pois o resultado não
    // estava batento por conta da aproximação 
    $celsius = ($fahrenheit - 32) /1.8;

    $formatedFahrenheit = round($fahrenheit, 2);
    $formatedCelsius = round($celsius, 2);

    $cells .= "
      <tr>
        <td>$formatedFahrenheit</td>
        <td>$formatedCelsius</td>
      </tr>
    ";

    $fahrenheit += 2;
  }

  return $cells;
}

function getTablePerson() {
  $cells = getCells();
  echo "
    <table border='1'>
      <tr style='text-align: center'>
        <th>Fahrenheit</th>
        <th>Celsius</th>
      </tr>
        $cells
    </table>
  ";
}

getTablePerson();