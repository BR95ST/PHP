<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Calcular área do circulo</title>
</head>
<body>
    <?php
        function areaCirculo($raio){
            return M_PI * pow($raio, 2);
        }

        $raio = 5;
        $area = areaCirculo($raio);
        
        echo "O raio tem $raio cm <br>";
        echo "A área tem $area cm² <br>";
    ?>
</body>
</html>