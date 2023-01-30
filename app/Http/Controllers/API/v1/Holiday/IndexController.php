<?php

namespace App\Http\Controllers\API\v1\Holiday;

use App\Http\Controllers\Controller;
use App\Models\Holiday;

class IndexController extends Controller
{
    public function __invoke()
    {
        $holidays = Holiday::all();
        $holidays = $holidays->sortBy(function ($holiday) {
            $date = new \DateTime($holiday->date);
            return $date->format('n');
        })->groupBy(function ($holiday) {
            $date = new \DateTime($holiday->date);
            $months = [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ];
            return $months[$date->format('n') - 1];
        });
        return response()->json($holidays);
    }
}
