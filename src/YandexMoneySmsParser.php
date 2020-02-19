<?php

/**
 * Class YandexMoneySmsParser
 */
class YandexMoneySmsParser
{
    /**
     * Parse sms from text
     *
     * @param string $textSms
     *
     * @return YandexMoneySmsValueDto
     */
    public function parseTextSms($textSms)
    {
        preg_match_all('#(?<![\d])\d{4}(?![рРpP\d])#miu', $textSms, $code);
        preg_match_all('#(\d{1,},\d{1,}[рРpP]|\d{1,}[рРpP])#miu', $textSms, $sum);
        preg_match_all('#(\d{11,})#miu', $textSms, $wallet);

        return new YandexMoneySmsValueDto($code[0][0], $sum[0][0], $wallet[0][0]);
    }
}