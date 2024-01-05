<?php

namespace App\Http\Controllers;

use App\Enums\LifeStyleTag;
use App\Enums\SolutionType;
use App\Services\PersonalTrainer;
use Illuminate\Http\Request;

/**
 * HealthController 컨트롤러
 *
 * 이 컨트롤러는 솔루션에 대한 클라이언트 요청을 관리합니다.
 * 과제에는 체중조절로 나와 있지만 차후 확장성을 고려해, HealthController 에서 관리하도록 설계했습니다.
 */
class HealthController extends Controller
{
    public function provideWeightSolution(Request $request)
    {
        // 솔루션 타입은 값이 없을 수도 있음
        $solutionTypes = $request->input('solution_types', []);
        $lifeStyleTags = $request->input('life_style_tags', []);

        // enum 을 사용하여 유효한 솔루션 타입 값만 담음
        $validSolutionTypes = array_filter($solutionTypes, function ($type) {
            return SolutionType::isValid($type);
        });

        // enum 을 사용하여 유효한 태그 값만 담음
        $validLifeStyleTags = array_filter($lifeStyleTags, function ($tag) {
            return LifeStyleTag::isValid($tag);
        });

        $personalTrainer = new PersonalTrainer($validSolutionTypes, $validLifeStyleTags);

        // PersonalTrainer 클래스를 통해 솔루션을 받음
        $solution = $personalTrainer->getSolution();

        return '';

    }
}
