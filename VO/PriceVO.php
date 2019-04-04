<?php


class PriceVO
{
    protected $price;

    public function __construct($price)
    {


        if ($price <= 0 ) {
            throw new \Exception('Значение цены не может быть отрицательным.');
        }

        $this->price=$price;
    }
    public function Price () {
        return $this->price -> price();
    }
}