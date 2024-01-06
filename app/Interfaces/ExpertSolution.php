<?php

namespace App\Interfaces;

/**
 * 전문가 클래스의 공통 인터페이스
 */
interface ExpertSolution
{
    // 솔루션 제공 메소드
    public function provideSolution(array $lifeStyleTags = []);

    // 우선순위 설정 메소드
}
