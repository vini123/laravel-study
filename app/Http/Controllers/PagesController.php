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

        Log::notice('仿佛有痛楚。如果我晕眩，那是因为幻觉丰盛，能量薄弱。足以支持我对你的迷恋，不够支持我们的快乐。');
        return 'log is created';
    }

    public function b1(){
        return view('bootcss/b1');
    }
}
