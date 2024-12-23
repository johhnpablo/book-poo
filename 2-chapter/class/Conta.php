<?php

abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;

        if ($saldo >= 0) {
            $this->saldo = $saldo;
        }
    }

    public function getInfo()
    {
        return "
            Agência:  {$this->agencia},
            Conta: {$this->conta},
        ";
    }

    public function depositar($valor)
    {
        if($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}