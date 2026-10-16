
<?php
$lado = 5;
$base = 8;
$altura = 4;

// Calcular las areas
$areaCuadrado = $lado * $lado;
$areaRectangulo = $base * $altura;
$areaTriangulo = ($base * $altura) / 2;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas de Figuras</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header>
        <h1>📐 Areas de Figuras Geometricas</h1>
        <p>Aprendiendo matematicas con PHP</p>
    </header>

    <main>
        <div class="contenedor">

            <div class="tarjeta">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Square.svg"
                     alt="Figura de un cuadrado">
                <h2>Cuadrado</h2>
                <p>Lado: <?php echo $lado; ?> cm</p>
                <p class="resultado">
                    Area: <?php echo $areaCuadrado; ?> cm²
                </p>
            </div>

            <div class="tarjeta">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Rectangle_example.svg"
                     alt="Figura de un rectangulo">
                <h2>Rectangulo</h2>
                <p>Base: <?php echo $base; ?> cm</p>
                <p>Altura: <?php echo $altura; ?> cm</p>
                <p class="resultado">
                    Area: <?php echo $areaRectangulo; ?> cm²
                </p>
            </div>

            <div class="tarjeta">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Triangle_with_notations.svg"
                     alt="Figura de un triangulo">
                <h2>Triangulo</h2>
                <p>Base: <?php echo $base; ?> cm</p>
                <p>Altura: <?php echo $altura; ?> cm</p>
                <p class="resultado">
                    Area: <?php echo $areaTriangulo; ?> cm²
                </p>
            </div>

        </div>

        <section class="conclusion">
            <h2>Comparacion de areas</h2>

            <?php
            if ($areaRectangulo > $areaCuadrado) {
                echo "<p>El rectangulo tiene mayor area que el cuadrado.</p>";
            } else {
                echo "<p>El cuadrado tiene un area mayor o igual.</p>";
            }
            ?>
        </section>
    </main>

    <footer>
        <p>Proyecto de PHP - Figuras geometricas</p>
    </footer>

</body>
</html>
