<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class PagesController extends Controller
{
    public function log(){
        Log::info('烟花飞腾的时候，火焰掉入海中。');
        Log::warning('遗忘就和记得一样，是送给彼此最好的纪念。');
        Log::error('爱从来都不是归宿，也不是我们彼此的救赎。');

        return 'log is created';
    }
}
