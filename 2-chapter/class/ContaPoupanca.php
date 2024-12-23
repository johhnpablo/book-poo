<?php

class ContaPoupanca extends Conta
{
    public function retirar($valor):bool
    {
        if($this->saldo >= $valor)
        {
            $this->saldo -= $valor;
        } else {
            return false;
        }
        return true;
    }
}