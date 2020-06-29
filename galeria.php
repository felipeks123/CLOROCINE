<?php include "cabecalho.php" ?>
<?php
$bd = new SQLite3("Receitas.db");
$sql = "SELECT * FROM Receitas";
$rs = $bd->query($sql);


$Receitas1 = [
    "receita" => "Torta De Macarrao",
    "nota" => 9.1,
    "ingredientes" => "<p><h5>INGREDIENTES</h5>
<br>400 g de macarrão talharim
<br>4 ovos (claras separadas)
<br>1 cebola picada
<br>1 xícara (chá) de salsinha picada
<br>½ pote de requeijão cremoso
<br>100 g de presunto
<br>1 xícara (chá) de queijo ralado
<br>1 colher (sopa) de manteiga ou margarina
<br>1 colher (sopa) de azeite
<br>Temperos a gosto
<br>1 gema para pincelar
<br>Queijo ralado para polvilhar</p>",
    "imagem" => "https://img.itdg.com.br/tdg/images/recipes/000/033/200/166353/166353_original.jpg?mode=crop&width=710&height=400",
];
$Receitas2 = [
    "receita" => "Dogão Prensado",
    "nota" => 9.7,
    "ingredientes" => "<p><h5>INGREDIENTES</h5>
<br>5 colheres de óleo
<br>1 cebola picada
<br>1 dente de alho amassado
<br>1 tomate picado
<br>4 colheres de molho de tomate
<br>5 salsichas cortadas em rodelas
<br>1 lata de milho verde
<br>1 pitada de pimenta-do-reino
<br>1 pacote de batata palha
<br>1 sachê de maionese
<br>5 pães compridos de cachorro quente
<br>ketchup e mostarda
<br>queijo mussarela em fatias
<br>sal a gosto</p>",
    "imagem" => "https://img.itdg.com.br/tdg/images/recipes/000/167/055/138677/138677_original.jpg?mode=crop&width=710&height=400",
];
$Receitas3 = [
    "receita" => "Torta De Morango",
    "nota" => 9.7,
    "ingredientes" => "<p><h5>INGREDIENTES</h5>
<h5>MASSA:</h5>
<br>1 pacote de biscoito maisena
<br>1/2 xícara de margarina
<h5>RECHEIO:</h5>
<br>700 ml de leite
<br>1 lata de leite condensado
<br>2 colheres de essência de baunilha
<br>4 colheres de amido de milho
<br>2 gemas peneiradas
<br>1 lata de creme de leite
<h5>COBERTURA:</h5>
<br>2 caixas de morangos
<br>1 pacote de gelatina de morango
</p>",
    "imagem" => "https://img.itdg.com.br/tdg/images/recipes/000/021/079/31898/31898_original.jpg?mode=crop&width=710&height=400",
];
//$Receitas =[$Receitas1,$Receitas2,$Receitas3];
?>

<body>
    <nav class="nav-extended grey lighten-1">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">galeria</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>

        </div>
        <div class="nav-header center">
            <h1>Na Base Do Odio</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent grey darken-1">
                <li class="tab"><a class="active" href="#galeria.php">Pagina Principal</a></li>
                <li class="tab"><a class="active" href="#test2">Receitas Em Video</a></li>
                <li class="tab "><a class="active" href="#teste3">Favoritos</a> </li>
            </ul>
        </div>
    </nav>
    <?php while ($Receitas = $rs->fetchArray()) : ?>
        <div class="row">
            <div class="col s4">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src=" <?= $Receitas1["imagem"] ?>">

                        <a class="btn-floating halfway-fab waves-effect waves-light grey"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $Receitas1["nota"] ?></p>
                        <span class="card-title"><?= $Receitas1["receita"] ?></span>
                        <?= $Receitas1["ingredientes"] ?>
                    </div>
                   
                </div>
            
            </div>
                 <?php endwhile ?>
            </div> 
           
       
    


</body>

</html>