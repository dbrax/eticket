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
use Epmnzava\BillMe\Models\Event;

class Ticket extends Model
{
    protected $guarded = [];
    protected $table="tickets";

    public function event()
    {
        return $this->belongsTo(Event::class,'eventid');
    }
}
