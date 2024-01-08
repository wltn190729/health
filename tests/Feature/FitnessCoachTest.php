<?php


use App\Services\FitnessCoach;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FitnessCoachTest extends TestCase
{
    /*
     * 라이프 스타일 태그를 안 넣었을 때 문자열을 반환하는지 테스트
     * */
    public function test_is_return_solutions_string()
    {
        $fitnessCoach = new FitnessCoach();

        $fitSolution = $fitnessCoach->provideSolution();

        $this->assertIsString($fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions()
    {
        $fitnessCoach = new FitnessCoach();

        $fitSolution = $fitnessCoach->provideSolution(['enough_money', 'strong_will']);

        $this->assertEquals('Crossfit', $fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions_2()
    {
        $fitnessCoach = new FitnessCoach();

        $fitSolution = $fitnessCoach->provideSolution(['strong_will']);

        $this->assertEquals('Cardio Exercise', $fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions_3()
    {
        $fitnessCoach = new FitnessCoach();

        $fitSolution = $fitnessCoach->provideSolution(['enough_money']);

        $this->assertEquals('Spinning', $fitSolution);
    }


}
