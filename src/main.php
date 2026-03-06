<?php
$heroe = ["nombre" => "Kratos", "vida" => 100, "ataque" => 20, "defensa" => 5];
$villano = ["nombre" => "Bicho", "vida" => 100, "ataque" => 20, "defensa" => 2];

function calcularDanio($ataque, $defensa) {
    $impacto = $ataque - $defensa;
    if ($impacto < 0) {
        return 0; // Caso A: El daño es negativo, devolvemos 0
    }

    return $impacto; // Caso B: El daño es positivo, devolvemos el número real
}

echo "--- ¡COMIENZA LA BATALLA! ---<br>";

while ($heroe["vida"] > 0 && $villano["vida"] > 0) {
    // TURNO DEL HÉROE
    $golpeHeroe = calcularDanio($heroe["ataque"], $villano["defensa"]);
    $villano["vida"] -= $golpeHeroe;
    
    // Control de vida negativa
    if ($villano["vida"] < 0) $villano["vida"] = 0;
    
    echo "{$heroe['nombre']} golpea. Vida del {$villano['nombre']}: {$villano['vida']}<br>";

    if ($villano["vida"] <= 0) break;

    // TURNO DEL VILLANO
    $golpeVillano = calcularDanio($villano["ataque"], $heroe["defensa"]);
    $heroe["vida"] -= $golpeVillano;
    
    // Control de vida negativa
    if ($heroe["vida"] < 0) $heroe["vida"] = 0;
    
    echo "{$villano['nombre']} golpea. Vida de {$heroe['nombre']}: {$heroe['vida']}<br>";

    if ($heroe["vida"] <= 0) break;

    echo "--------------------------<br>";
}

echo "<br>--- FIN DEL COMBATE ---<br>";

if ($heroe["vida"] > 0) {
    echo "<strong>¡VICTORIA! {$heroe['nombre']} ha ganado la partida.</strong>";
} else {
    echo "<strong>¡DERROTA! {$villano['nombre']} ha ganado la partida.</strong>";
}
?>
