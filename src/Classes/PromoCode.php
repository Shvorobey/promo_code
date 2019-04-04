<?php



abstract class PromoCode
{
    protected $price;
    //protected $discountPrice;


    public function getPrice()
    {
        return $this -> price ->price ();
    }


    public function setPrice(PriceVO $price)
    {
        $this->price = $price;
    }

    public function getDiscount ($price)
    {
        $discountPrice = $price -  ($price * $discountPercent * 0.01) - $fixedSum;

        if ( $discountPrice < $price*0.7 ) {
            throw new \Exception('Ошибка. Скидка не может быть более 30%.');}

        //return $this->discountPrice ->discountPrice () ;

       echo " Полная цена: $price->price денег, <br>
              Скидка: $discountPercent %, <br>
              Фиксированная скидка: $fixedSum денег, <br>
              Цена с учетом скидки составит: $discountPrice денег. ";

    }
}