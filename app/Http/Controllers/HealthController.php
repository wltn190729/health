<?php

namespace App\Http\Controllers;

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

    }
}
