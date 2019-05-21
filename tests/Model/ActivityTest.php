<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/18 0018
 * Time: 20:05
 */

namespace Tests\Model;

use App\Model\Activity;
use Illuminate\Support\Facades\Log;
use phpseclib\Crypt\Random;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    public function testGetActivity()
    {
        $obj = new Activity();
        $obj->activity_name='活动'.rand(100, 1000);
        $obj->start_time = time();
        $obj->end_time = $obj->start_time + 86400;
        $obj->save();
    }
}
