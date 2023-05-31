<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtividadeGutoPHP</title>
</head>
<body>

<?php
$carros =[];
$carros = array("Gol", "Onix");
echo "<br>";
echo $carros[0];
echo "<br>";
print_r($carros);
echo "<br>";

// inserindo um array na posição 2.
$carros[2] = "uno";
print_r($carros);
echo "<br>";

// inserindo um array no final da array.
array_push($carros, "Fiesta");
print_r($carros);
echo "<br>";

// removendo um array predeterminado.
unset($carros[1]);
print_r($carros);
echo "<br";

// ordenando o array.
sort($carros);
print_r($carros);
echo "<br>";

// laço de repetição "FOR"
//for ($i; $i < count($carros); $i++);
//echo ($carros[i++]);

// laço de repetição "FOREACH"
foreach($carros as $carro) // para cada posição em "$carros" é mostrado uma posição em"$carro", que pode ser "$C", "$c", etc..
{echo $carro . "<br>";}
echo "<br>";

?>
    
</body>
</html>