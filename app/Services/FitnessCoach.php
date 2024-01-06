<?php

namespace App\Services;

use App\Interfaces\ExpertSolution;

class FitnessCoach extends ExpertCoach
{
    public function __construct()
    {
        // 상속 받은 클래스에 고객이 제공한 라이프 스타일 태그 set
        $this->setFitSolutions([
            'Crossfit' => ['enough_money', 'strong_will'],
            'Cardio Exercise' => ['strong_will'],
            'Strength' => ['strong_will', 'enough_time'],
            'Spinning' => ['enough_money']
        ]);
    }
}
