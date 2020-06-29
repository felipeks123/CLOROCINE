<?php

$bd = new SQLite3("Receitas.db");
$sql = "DROP TABLE IF EXISTS Receitas";

if ($bd->exec($sql))
    echo "\n Receitas apagadas com sucesso\n";


$sql = "CREATE TABLE Receitas(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo varchar (200) NOT NULL,
    imagem varchar (200) ,
    ingredientes TEXT,
    nota DECIMAL (2,1) 
    )
    ";
    
    if ($bd->exec($sql))
    echo "\n tabela criada com sucesso\n";
    else 
    echo "\n tabela deu erro \n";
$sql = "INSERT INTO Receitas (id,titulo,imagem,ingredientes,nota ) VALUES (
0,
    'Torta De Macarrao',
    'https://img.itdg.com.br/tdg/images/recipes/000/033/200/166353/166353_original.jpg?mode=crop&width=710&height=400',
    'ingredientes=> <p><h5>INGREDIENTES</h5>
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
<br>Queijo ralado para polvilhar</p>',
8.5
)";
if ($bd->exec($sql))
echo "\n receitas inseridas com sucesso\n";
else 
echo "\n tabela deu erro \n";

$sql = "INSERT INTO Receitas (id,titulo,imagem,ingredientes,nota ) VALUES (
    1,
     'Dogão Prensado',
     'https://img.itdg.com.br/tdg/images/recipes/000/167/055/138677/138677_original.jpg?mode=crop&width=710&height=400',
    'ingredientes => <p><h5>INGREDIENTES</h5>
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
<br>sal a gosto</p>',
9.5 
)";
if ($bd->exec($sql))
echo "\n receitas inseridas com sucesso\n";
else 
echo "\n tabela deu erro \n";

?>