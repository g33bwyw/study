<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Activity implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $str;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($str)
    {
        //
        $this->str = $str;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        info('队列任务执行时间：' . date('Y-m-d H:i:s'));
        info('result:' . $this->str);
    }
}
