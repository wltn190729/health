<?php

namespace App\Services;

/**
 * PersonalTrainer 클래스는 클라이언트로부터 전달 받은 정보를 통해 적절한 전문가에게 솔루션을 문의하는 역할을 합니다.
 */
class PersonalTrainer
{
    private array $solutionTypes;
    private array $lifeStyleTags;

    /**
     * @param array $solutionTypes 솔루션 타입
     * @param array $lifeStyleTags 라이프스타일 태그
     * @desc 객체 지향 프로그래밍을 위해 객체의 상태를 초기화 이후 해당 상태를 사용할 수 있게 하는 것이 낫다고 판단되었습니다.
     */
    public function __construct(array $solutionTypes = [], array $lifeStyleTags = [])
    {
        $this->solutionTypes = $solutionTypes;
        $this->lifeStyleTags = $lifeStyleTags;
    }

    public function getSolution()
    {

    }
}
