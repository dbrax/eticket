<?php

/**
 * Author: Emmanuel Paul Mnzava
 * Twitter: @epmnzava
 * Github:https://github.com/dbrax/eticket
 * Email: epmnzava@gmail.com
 * 
 */

namespace Epmnzava\BillMe\Models;

use Illuminate\Database\Eloquent\Model;

class EventDateTime extends Model
{
    protected $guarded = [];
    protected $table="event_categories";
    public function event()
    {
        return $this->belongsTo(Event::class,'eventid');
    }
}
