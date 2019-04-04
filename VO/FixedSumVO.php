<?php


class fixedSumVO
{
    protected $fixedSum;

    public function __construct($fixedSum)
    {
        if ((float) $fixedSum < 0 ) {
            throw new \Exception('Величина скидки введена не верно.');
        }

        $this->fixedSum=$fixedSum;
    }
    public function fixedSum() {
        return $this->fixedSum -> fixedSum;
    }
}