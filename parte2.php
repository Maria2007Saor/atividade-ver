<?php

// 5. Função helloWorld
function helloWorld() {
    echo "Hello, World!";
}

// 6. Função greet
function greet($name) {
    echo "Hello, $name!";
}

// 7. Função add
function add($a, $b) {
    return $a + $b;
}

// 8. Função multiply (com valor padrão no segundo argumento)
function multiply($a, $b = 2) {
    return $a * $b;
}

// Chamadas de exemplo (opcional para testar)
helloWorld();            // Exibe: Hello, World!
echo "<br>";
greet("Maria");          // Exibe: Hello, Maria!
echo "<br>";
echo add(5, 10);         // Exibe: 15
echo "<br>";
echo multiply(4);        // Exibe: 8 (4 * 2)
echo "<br>";
echo multiply(4, 3);     // Exibe: 12
?>

  

