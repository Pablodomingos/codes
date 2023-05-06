<?php

$value = (float) readline();

const MIN_NOTE = 2.00;
$notes = [100, 50, 20, 10, 5, 2];
$coins = [1, 0.5, 0.25, 0.1, 0.05, 0.01];
$result = [];
$i = 0;
$j = 0;

while ($i < count($notes) && $j < count($coins)) {
    if (empty($result[$notes[$i]])) {
        $result += ["$notes[$i]" => 0];
        $i++;
    }
    if (empty($result[$coins[$j]])) {
        $result += ["$coins[$j]" => 0];
        $j++;
    }
}

$i = 0;
$j = 0;

do {

    if ($value >= MIN_NOTE) {
        if ($value >= $notes[$i]) {
            $value = round($value - $notes[$i], 2);
            $result[$notes[$i]] += 1;
        } else {
            $i++;
        }
    } else {
        if ("$value" >= $coins[$j]) {
            $value = round($value - $coins[$j], 2);
            $result["$coins[$j]"] += 1;
        } else {
            $j++;
        }
    }
} while($value > 0);

echo "NOTAS:\n".
$result[100] . " nota(s) de R$ 100.00\n".
$result[50]  . " nota(s) de R$ 50.00\n" .
$result[20]  . " nota(s) de R$ 20.00\n" .
$result[10]  . " nota(s) de R$ 10.00\n" .
$result[5]   . " nota(s) de R$ 5.00\n"  .
$result[2]   . " nota(s) de R$ 2.00\n"  .
"MOEDAS:\n".
$result['1']    . " moeda(s) de R$ 1.00\n" .
$result['0.5']  . " moeda(s) de R$ 0.50\n" .
$result['0.25'] . " moeda(s) de R$ 0.25\n" .
$result['0.1']  . " moeda(s) de R$ 0.10\n" .
$result['0.05'] . " moeda(s) de R$ 0.05\n" .
$result['0.01'] . " moeda(s) de R$ 0.01\n";
