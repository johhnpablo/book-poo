<?php

namespace Facades;

class PagSeguroFacade
{
    private $request;

    public function __construct($currency)
    {
        $this->request = new PagSeguroPaymentRequest();
        $this->request->setCurrency($currency);
    }

    public function addItem($product, $amount)
    {
        $item = new PagSeguroItem;
        $item->setId($product->id);
        $item->setDescription($product->description);
        $item->setQuantity($amount);
        $item->setAmount($product->price);
        $this->request->addItem($item);
    }

    public function setCustomer($customer)
    {
        $address = new PagSeguroAddress();
        $address->setStreet($customer->address);
        $address->setNumber($customer->number);
        $address->setDistrict($customer->neighborhood);
        $address->setCity($customer->city);
        $address->setState($customer->state);
        $this->request->setShippingAddress($address);

        $sender = new PagSeguroSender();
        $sender->setEmail(trim($customer->email));
        $sender->setName(trim($customer->name));
        $this->request->setSender($sender);
    }

}