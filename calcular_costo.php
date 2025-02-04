<?php
function calcularCosto($plan, $paquetes, $duracion) {
    $costos = [
        'Basico' => 9.99,
        'Estandar' => 13.99,
        'Premium' => 17.99,
        'Deporte' => 6.99,
        'Cine' => 7.99,
        'Infantil' => 4.99
    ];

    $total = $costos[$plan];
    $paquetesArray = explode(",", $paquetes);
    
    foreach ($paquetesArray as $paquete) {
        if (isset($costos[$paquete])) {
            $total += $costos[$paquete];
        }
    }

    if ($duracion === 'Anual') {
        $total *= 12; // Costo anual
    }

    return $total;
}
?>
