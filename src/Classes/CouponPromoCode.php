<?php


final class CouponPromoCode extends PromoCode
{

    protected $discountPercent;
    protected $fixedSum = 0;


    public function getDiscountPercent()
    {
        return $this->discountPercent -> discountPercent ();
    }


    public function setDiscountPercent(DiscountPercentVO $discountPercent)
    {
        $this->discountPercent = $discountPercent;
    }


}