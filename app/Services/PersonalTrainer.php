<?php

namespace App\Services;

use App\Exceptions\PersonalTrainerException;

/**
 * PersonalTrainer 클래스는 클라이언트로부터 전달 받은 정보를 통해 적절한 전문가에게 솔루션을 문의하는 역할을 합니다.
 */
class PersonalTrainer
{
    private string $solutionTypes;
    private array $lifeStyleTags;

    /**
     * @param string $solutionTypes 솔루션 타입
     * @param array $lifeStyleTags 라이프스타일 태그
     * @desc 객체 지향 프로그래밍을 위해 객체의 상태를 초기화 이후 해당 상태를 사용할 수 있게 하는 것이 낫다고 판단되었습니다.
     */
    public function __construct(string $solutionTypes = '', array $lifeStyleTags = [])
    {
        $this->solutionTypes = $solutionTypes;
        $this->lifeStyleTags = $lifeStyleTags;
    }

    /**
     * @throws PersonalTrainerException
     */
    public function getSolution(): string
    {
        if ($this->solutionTypes === 'DIET') {
            $expertCoach = new DietExpert();
        } else if ($this->solutionTypes === 'FITNESS') {
            $expertCoach = new FitnessCoach();
        } else {
            throw PersonalTrainerException::wrongParam();
        }

        return $expertCoach->provideSolution($this->lifeStyleTags);
    }
}
