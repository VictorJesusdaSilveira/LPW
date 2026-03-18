<?php
require_once("model/Heroi.php");
require_once("model/Yugi.php");

$resposta = $_GET["resposta"];
$resposta = $_GET["rand"];
$acertou = false;

//Cartas Yugi-OH
$cartas = array();

$obelisco = new Yugi("Obelisco, O Atormentador" , "https://http2.mlstatic.com/D_NQ_NP_886192-MLB41059514111_032020-O.webp" , "Deus egípcio usado por Kaiba no anime.");
array_push($cartas , $obelisco);
$slyfer = new Yugi("Slyfer, O Dragão do Céu" , "https://img.mypcards.com/img/3/579/yugioh_ldk2-ens01/yugioh_ldk2-ens01_en-1686920415.jpg" , "Deus egípcio usado por Yugi no anime.");
array_push($cartas , $slyfer);
$dragaoAlado = new Yugi("Dragão Alado de Rá" , "https://img.mypcards.com/img/3/1514/yugioh_sbcb_en203/yugioh_sbcb_en203_en.jpg" , "Deus egípcio usado por Marik.");
array_push($cartas , $dragaoAlado);

//Heróis
$herois = array();

$homemAranha = new Heroi("Homem-Aranha" , "https://cienciahoje.org.br/wp-content/uploads/2018/11/legiao_vpZw6kWY8GuK9cqCh5DJEFafL437IyAz02smlNgRoO.png.jpeg" , "O herói mais famoso do mundo.");
array_push($herois , $homemAranha);
$flash = new Heroi("Flash" , "https://hqrock.com.br/wp-content/uploads/2011/06/the-flash-01-2011.jpg" , "O herói mais rápido que existe.");
array_push($herois , $flash);
$doutorEstranho = new Heroi("Doutor-Estranho" , "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRziiAMHI1UjptuCEDJPA-njAkKzABIbjV4Q&s" , "Um dos magos mais poderosos, conhecido como mago supremo.");
array_push($herois , $doutorEstranho);


$sorteado = $cartas[2];
// foreach ($cartas as $c {
    
// }

var_dump($sorteado);




//usar a função rand() para sortear os palpites
