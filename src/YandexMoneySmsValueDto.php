<?php

/**
 * Class YandexMoneySmsValueDto
 */
class YandexMoneySmsValueDto
{
    /** @var string */
    public $code;

    /** @var string */
    public $sum;

    /** @var string */
    public $wallet;

    /**
     * YandexMoneySmsValueDto constructor.
     *
     * @param string $code
     * @param string $sum
     * @param string $wallet
     */
    public function __construct($code, $sum, $wallet)
    {
        $this->code = $code;
        $this->sum = $sum;
        $this->wallet = $wallet;
    }
}