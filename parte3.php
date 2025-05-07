<?php
$frase = "Olá, mundo PHP!";

// strlen - Comprimento da string
echo "strlen: " . strlen($frase) . "<br>";

// strtoupper - Converte para maiúsculas
echo "strtoupper: " . strtoupper($frase) . "<br>";

// strtolower - Converte para minúsculas
echo "strtolower: " . strtolower($frase) . "<br>";

// ucfirst - Primeira letra maiúscula
echo "ucfirst: " . ucfirst(strtolower($frase)) . "<br>";

// ucwords - Primeira letra de cada palavra em maiúsculo
echo "ucwords: " . ucwords(strtolower($frase)) . "<br>";

// str_replace - Substitui parte da string
echo "str_replace: " . str_replace("PHP", "Mundo", $frase) . "<br>";

// strpos - Posição da primeira ocorrência
echo "strpos (de 'mundo'): " . strpos($frase, "mundo") . "<br>";

// substr - Pega uma parte da string
echo "substr (começando no 5, 5 letras): " . substr($frase, 5, 5) . "<br>";
?>


<?php
$numero1 = 10.75;
$numero2 = -25;
$numero3 = 4;

// abs - Valor absoluto
echo "abs: " . abs($numero2) . "<br>";

// round - Arredondar
echo "round: " . round($numero1) . "<br>";

// ceil - Arredonda para cima
echo "ceil: " . ceil($numero1) . "<br>";

// floor - Arredonda para baixo
echo "floor: " . floor($numero1) . "<br>";

// sqrt - Raiz quadrada
echo "sqrt: " . sqrt($numero3) . "<br>";

// pow - Potência
echo "pow: " . pow($numero3, 3) . "<br>"; // 4³ = 64

// max - Maior valor
echo "max: " . max($numero1, $numero2, $numero3) . "<br>";

// min - Menor valor
echo "min: " . min($numero1, $numero2, $numero3) . "<br>";

// rand - Número aleatório
echo "rand (1 a 100): " . rand(1, 100) . "<br>";
?>
