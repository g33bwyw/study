<?php

namespace App\Model;

use App\Observers\ActivityObserver;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    protected $table = 'activity';

    const CREATED_AT = 'create_time';
    const UPDATED_AT = 'update_time';

    protected $dateFormat = 'U';

}
