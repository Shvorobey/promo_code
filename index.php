<?php

require_once 'VO/PriceVO.php';
require_once 'src/Classes/PromoCode.php';
require_once 'src/Classes/DiscountPercentPromoCode.php';
require_once 'src/Classes/CouponPromoCode.php';
require_once 'src/Classes/DiscountFixedSumPromoCode.php';
require_once 'VO/DiscountPercentVO.php';
require_once 'VO/DiscountPromoCodeVO.php';
require_once 'VO/FixedSumVO.php';


$promoCode = new DiscountPercentPromoCode;

try {
    $promoCode -> setPrice( new PriceVO (100));
} catch (\Exception $exception) {
    $reportPrice = $exeption -> getMessage ();
    echo $reportPrice;
}

try {
    $promoCode -> setDiscountPercent(new DiscountPercentVO (10));
} catch (\Exception $exception) {
    $reportDiscountPercent = $exeption -> getMessage ();
    echo $reportDiscountPercent;
}
//var_dump($promoCode);

try {
    $promoCode ->getDiscount (100);
} catch (\Exception $exception){
    $reportDiscount = $exeption -> getMessage ();
    echo $reportDiscount;
}






