<?php

final class DiscountFixedSumPromoCode extends PromoCode {

    protected $discountPercent = 0;
    protected $fixedSum;


    public function getFixedSum()
    {
        return $this->fixedSum -> fixedSum();
    }


    public function setFixedSum(FixedSumVO $fixedSum)
    {
        $this->fixedSum = $fixedSum;
    }


}