<?php

class ContaCorrente extends Conta
{
    protected int $limite;

    public function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function retirar($valor): bool
    {
        if(($this->saldo + $this->limite) >= $valor)
        {
            $this->saldo -= $valor;
        } else {
            return false;
        }
        return true;
    }
}