
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <title>Catalogo de filmes</title>
</head>
<body>
    <h1>Filmes 🎬</h1>
    <?php
    $banners = ["banner.png","banner2.png","banner3.png","banner4.png","banner5.png","banner6.png"];
    $sorteio = rand(0,5);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'";
    ?>
    <div class="lista">
        <?php
         $filmes = ["Vingadores - Ultimato", "Pulp Fiction", "Kill Bill", "Titanic", "Gato de botas", "O Bom Dinossauro"];
         $capas = ["vingadores.jpg", "pulp.jpg", "kill.jpg", "gamber.jpg", "gatodebotas.jpg", "dinossauro.jpg"];
 
        $numero_filmes = count($filmes);
        $contador = 0;
        while ($contador < $numero_filmes){
            echo "<div class='card'>";
            echo "<img src='$capas[$contador]'>";
            echo "<br> $filmes[$contador] <br><br>";
            echo "</div>";
 
            $contador++;
        }
        ?>
    </div>
</body>
</html>