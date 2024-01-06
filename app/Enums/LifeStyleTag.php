<?php

namespace App\Enums;

enum LifeStyleTag: string
{
    case ENOUGH_MONEY = 'enough_money';

    case STRONG_WILL = 'strong_will';

    case ENOUGH_TIME = 'enough_time';

    // 유효한 값이 있는지 확인하는 메소드
    public static function isValid(string $tag): bool
    {
        return in_array($tag, self::cases());
    }

}
