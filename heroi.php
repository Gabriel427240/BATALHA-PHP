<?php

declare(strict_types=1);

namespace App\Model;
class Heroi {
    private $nivel;
    private $nome;
    private $armas;

    public function __construct(string $nome, int $nivel) {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->armas = [];
    }

    public function addArma(Arma $arma): void {
        $this->armas[] = $arma;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function getArmas(): array {
        return $this->armas;
    }

    public function atacar(): int {
        if (empty($this->armas)) {
            return 5; 
        }
        $arma = $this->armas[array_rand($this->armas)];
        return $arma->getDano() + $this->nivel; 
    }
}