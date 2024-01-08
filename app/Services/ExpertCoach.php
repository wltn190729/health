<?php

namespace App\Services;

/*
 * 전문가 클래스의 비즈니스 로직을 수행하는 클래스
 * */

use App\Interfaces\ExpertSolution;

class ExpertCoach implements ExpertSolution
{
    public array $fitSolutions;

    public array $lifeStyleTags;

    public function provideSolution(array $lifeStyleTags = []): string
    {
        // 최적의 솔루션
        $fitSolution = null;
        // 라이프 스타일 태그 포함된 개수
        $maxMatchCount = 0;
        // 태그가 1개일 때 포함할 배열 선언
        $singleFitSolution = [];
        foreach ($this->fitSolutions as $solution => $tags) {
            // 라이프 스타일 태그가 포함되면 카운트 증가
            $matchCount = 0;
            foreach ($tags as $tag) {
                if (in_array($tag, $lifeStyleTags)) {
                    $matchCount++;
                }
            }

            // 라이프 스타일 태그 포함 개수가 최대 포함 개수 보다 클 경우 적합한 솔루션이라 판단
            if ($matchCount > $maxMatchCount) {
                $maxMatchCount = $matchCount;
                $fitSolution = $solution;
            }

            // 라이프 스타일 태그가 1개이고, 적합한 솔루션 타입들이 1개일때 제일 적합도가 맞다고 판단
            if (count($lifeStyleTags) === 1 && count($tags) === 1 && $matchCount > 0) {
                $singleFitSolution[] = $solution;
            }
        }

        // 적합한 솔루션이 없을 때 무작위로 반환
        if (empty($fitSolution)) {
            $fitSolutionArray = array_keys($this->fitSolutions);
            shuffle($fitSolutionArray);
            $fitSolution = current($fitSolutionArray);
        }

        // 라이프 스타일 1개, 적합한 솔루션 타입이 1개 일 경우가 있을 경우 그 중에서 무작위 차출
        if (count($singleFitSolution) > 0) {
            shuffle($singleFitSolution);
            $fitSolution = current($singleFitSolution);
        }

        return $fitSolution;

    }

    /**
     * 고객에 제시한 라이프 스타일 태그 set 메소드
     */
    public function setFitSolutions(array $solutions): void
    {
        $this->fitSolutions = $solutions;
    }
}
