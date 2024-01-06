<?php

namespace App\Services;

use App\Interfaces\ExpertSolution;

class DietExpert extends ExpertCoach
{

    public function __construct()
    {
        // 상속 받은 클래스에 고객이 제공한 라이프 스타일 태그 set
        $this->setFitSolutions([
            'Intermittent Fasting' => ['enough_time', 'strong_will'],
            'LCHF' => ['enough_money']
        ]);
    }

}
