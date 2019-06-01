<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/18 0018
 * Time: 20:05
 */

namespace Tests\Model;

use App\Model\Activity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use phpseclib\Crypt\Random;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    public function testGetActivity()
    {
        info('任务执行时间：' . date('Y-m-d H:i:s'));
        $str = rand(0, 10000);
        \App\Jobs\Activity::dispatch($str)->delay(Carbon::now()->addSecond(30));
//        $obj = new Activity();
//        $obj->activity_name='活动'.rand(100, 1000);
//        $obj->start_time = time();
//        $obj->end_time = $obj->start_time + 86400;
//        $obj->save();
    }
}
