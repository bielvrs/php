<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Paulista</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">Campeonato Paulista 2024</header>
    <h1><br>Times ⚽<br><br></h1>
    <div class="lista">
        <?php
        $times = ["Água Santa", "Botafogo SP", "Corinthians","Guarani","Inter de Limeira","Ituano", "Mirassol", "Novorizontino", "Palmeiras", "Ponte Preta", "Portuguesa", "Red Bull Bragantino", "Santo André", "Santos", "São Bernardo", "São Paulo"];
        $escudos = ["aguasanta.png", "bfc.png", "corinthians.png","guarani.png","limeira.png","ituano.png", "mirassol.png", "novorizontino.png", "palmeiras.png", "aapp.png", "portuguesa.png", "bragantino.png", "santoandre.png", "santos.png", "saobernardo.png", "saopaulo.png"];
 
        $numero_times = count($times);
        $contador = 0;
        while($contador < $numero_times){
            echo "<div class='card'>";
            echo "<img src= '$escudos[$contador]'>";
            echo "<br> $times[$contador] <br><br>";
            echo "</div>";
           
            $contador++;
        }
 
        ?>
    </div>
</body>
</html>