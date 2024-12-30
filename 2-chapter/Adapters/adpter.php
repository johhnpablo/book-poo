<?php

class ClienteService
{
    public static function informaInadimplentes($mailer)
    {
        $inadimplentes = Cliente::getInadimplentes();

        foreach ($inadimplentes as $cliente) {
            $mailer->setHtmlBody();
            $mailer->addAddress($cliente->email);
            $mailer->setHtmlBody('Hei <b>$cliente->nome</b>, cumpra com suas obrigações.');
            $mailer->send();
        }
    }
}

//Antes utilizariamos ClienteService::informaInadimplentes(new OldServiceEmail)

ClienteService::informaInadimplentes(new \Adapters\PHPMailerAdapter);