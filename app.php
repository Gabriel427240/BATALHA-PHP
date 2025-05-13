<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

require 'vendor/autoload.php';

use App\Model\Heroi;
use App\Model\Arma;
use App\Model\Monstro;
use App\Model\Batalha;


$heroi = new Heroi("caradeporco", 100);


$espada = new Arma("Espada ceifadora", 100, "Espada");
$Garrucha = new Arma("Garrucha veia", 1565, "Garrucha");
$heroi->addArma($espada);
$heroi->addArma($Garrucha);

$monstro = new Monstro("zebatata", 4634, "Guerreiro");


$batalha = new Batalha($heroi, $monstro);
$resultado = $batalha->iniciarBatalha();


echo "Resultado da Batalha:\n";
echo "Vencedor: " . $resultado->getVencedor() . "\n";
echo "Log de Ações:\n";
foreach ($resultado->getLog() as $log) {
    echo $log . "\n";
}