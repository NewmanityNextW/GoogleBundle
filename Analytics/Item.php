<?php

namespace AntiMattr\GoogleBundle\Analytics;

class Item
{
    private $category;
    private $name;
    private $orderNumber;
    private $price;
    private $quantity;
    private $sku;

    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setName($name)
    {
        $this->name = (string) $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
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

    public function setPrice($price)
    {
        $this->price = (float) $price;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = (int) $quantity;

        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setSku($sku)
    {
        $this->sku = (string) $sku;

        return $this;
    }

    public function getSku()
    {
        return $this->sku;
    }
}
