<?php

namespace App\Listeners;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class QueryListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        $this->log = new Logger('sql');
        $file = sprintf('logs/sql/%s.log', date('Ymd'));
        $this->log->pushHandler(
            new StreamHandler(
                storage_path($file),
                Logger::INFO
            )
        );
    }

    /**
     * Handle the event.
     *
     * @param  QueryExecuted  $event
     * @return void
     */
    public function handle(QueryExecuted $event)
    {
        if (env('APP_ENV', 'production') == 'local') {
            $sql = str_replace("?", "'%s'", $event->sql);
            $log = vsprintf($sql, $event->bindings);

            // Log::info($log);
            $this->log->addInfo($log);
        }
    }
}
