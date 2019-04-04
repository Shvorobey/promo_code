<?php


class DiscountPromoCodeVO
{
    protected $discountPromoCode;

    public function __construct($discountPromoCode)
    {
        $checkArray = [10, 20, 30];
        if (in_array($discountPromoCode, $checkArray) ) {
            throw new \Exception('Недопустимое значение скидки.');
        }

        $this->discountPromoCode = $discountPromoCode;
    }
    public function discountPercent () {
        return $this->discountPromoCode ->discountPromoCode();
    }
}