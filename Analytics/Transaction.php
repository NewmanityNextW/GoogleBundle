<?php

namespace AntiMattr\GoogleBundle\Analytics;

class Transaction
{
    private $affiliation;
    private $city;
    private $country;
    private $orderNumber;
    private $shipping;
    private $state;
    private $tax;
    private $total;

    public function setAffiliation($affiliation)
    {
        $this->affiliation = (string) $affiliation;

        return $this;
    }

    public function getAffiliation()
    {
        return $this->affiliation;
    }

    public function setCity($city)
    {
        $this->city = (string) $city;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCountry($country)
    {
        $this->country = (string) $country;

        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = (string) $orderNumber;

        return $this;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setShipping($shipping)
    {
        $this->shipping = (float) $shipping;

        return $this;
    }

    public function getShipping()
    {
        return $this->shipping;
    }

    public function setState($state)
    {
        $this->state = (string) $state;

        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setTax($tax)
    {
        $this->tax = (float) $tax;

        return $this;
    }

    public function getTax()
    {
        return $this->tax;
    }

    public function setTotal($total)
    {
        $this->total = (float) $total;

        return $this;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
