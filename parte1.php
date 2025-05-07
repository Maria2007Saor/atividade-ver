<?php
// 1. Variável $x
$x = 5;
$x++; // Incrementa 1
echo "1. Valor de x após incremento: $x<br>";

// 2. Variável $y
$y = 10;
$y--; // Decrementa 1
echo "2. Valor de y após decremento: $y<br>";

// 3. Variável $a
$a = 3;
echo "3. Valor inicial de a: $a<br>";
echo "   Valor de a com pré-incremento (++a): " . ++$a . "<br>";
echo "   Valor de a com pós-incremento (a++): " . $a++ . "<br>";
echo "   Valor final de a: $a<br>";

// 4. Variável $b
$b = 8;
echo "4. Valor inicial de b: $b<br>";
echo "   Valor de b com pré-decremento (--b): " . --$b . "<br>";
echo "   Valor de b com pós-decremento (b--): " . $b-- . "<br>";
echo "   Valor final de b: $b<br>";
?>
