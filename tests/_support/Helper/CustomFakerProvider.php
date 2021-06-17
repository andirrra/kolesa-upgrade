<?php
namespace Helper;

use Faker\Provider\Base;

class CustomFakerProvider extends Base
{
    /**
     * Возвращает рандомную карту
     */
    public function createCreditCardNumber()
    {
        return sprintf(
            '%d %d %d %d',
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999),
            random_int(1000, 9999)
        );
    }
}