<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Huella Ecológica</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Resultado de la Huella Ecológica</h1>

<div class="calculator">
    <?php
    // Obtener los valores del formulario
    $electricidad = $_POST['electricidad'];
    $gas = $_POST['gas'];
    $transporte = $_POST['transporte'];
    $residuos = $_POST['residuos'];
    $agua = $_POST['agua'];

    // Validar que todos los campos estén llenos
    if (!$electricidad || !$gas || !$transporte || !$residuos || !$agua) {
        echo '<p class="error">Por favor, complete todos los campos.</p>';
    } else {
        // Calcular la huella ecológica
        $huellaEnergetica = $electricidad * 0.5; // Ejemplo de cálculo
        $huellaTransporte = $transporte * 0.3; // Ejemplo de cálculo
        $huellaResiduos = $residuos * 0.2; // Ejemplo de cálculo
        $huellaAgua = $agua * 0.1; // Ejemplo de cálculo

        $huellaTotal = $huellaEnergetica + $huellaTransporte + $huellaResiduos + $huellaAgua;

        // Mostrar el resultado
        echo '<div class="resultado">';
        echo '<h2>Resultado:</h2>';
        echo '<p>' . number_format($huellaTotal, 2) . ' toneladas CO2 equivalente por mes</p>';
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
