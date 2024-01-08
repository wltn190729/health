<?php


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Services\DietExpert;
use Tests\TestCase;

class DietExpertTest extends TestCase
{
    /*
     * 라이프 스타일 태그를 안 넣었을 때 문자열을 반환하는지 테스트
     * */
    public function test_is_return_solutions_string()
    {
        $dietExpert = new DietExpert();

        $fitSolution = $dietExpert->provideSolution();

        $this->assertIsString($fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions()
    {
        $dietExpert = new DietExpert();

        $fitSolution = $dietExpert->provideSolution(['enough_time', 'strong_will']);

        $this->assertEquals('Intermittent Fasting', $fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions_2()
    {
        $dietExpert = new DietExpert();

        $fitSolution = $dietExpert->provideSolution(['enough_time']);

        $this->assertEquals('Intermittent Fasting', $fitSolution);
    }

    /**
     * 라이프 스타일 태그를 넣었을 때 적합한 솔루션을 제시하는지 테스트
     */
    public function test_is_return_fit_solutions_3()
    {
        $dietExpert = new DietExpert();

        $fitSolution = $dietExpert->provideSolution(['enough_money']);

        $this->assertEquals('LCHF', $fitSolution);
    }


}
