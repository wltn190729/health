<?php

namespace App\Exceptions;

use Exception;

/**
 * Exception
 */
class PersonalTrainerException extends Exception
{
    protected array $extraData;

    public static function wrongParam(string $message = null, array $data = []): PersonalTrainerException
    {
        return new static($message ?? '잘못된 파라미터 값 입니다.');
    }

}
