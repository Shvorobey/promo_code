<?php


class DiscountPercentVO
{
    protected $discountPercent;

    public function __construct($discountPercent)
    {
        $discountPercent = (float) $discountPercent;

        if ($discountPercent < 0 || $discountPercent > 30 ) {
            throw new \Exception('Недопустимое значение скидки.');
        }

        $this->discountPercent = $discountPercent;
    }
    public function discountPercent () {
        return $this->discountPercent -> discountPercent();
    }
}