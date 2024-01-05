<?php

namespace App\Enums;

enum SolutionType: string
{
    case DIET = 'DIET';
    case FITNESS = 'FITNESS';

    // 유효한 값이 있는지 확인하는 메소드 (enum 인스턴스 생성하지 않고 호출하기 위해 static 으로 생성)
    public static function isValid(string $type): bool
    {
        return in_array($type, self::cases());
    }

}
