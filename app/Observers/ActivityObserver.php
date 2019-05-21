<?php

namespace App\Observers;

use App\Model\Activity;

class ActivityObserver
{
    //
    public function created(Activity $activity)
    {
        info('活动创建成功');
        info($activity->activity_name);
    }
}
