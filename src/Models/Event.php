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
use Epmnzava\BillMe\Models\Ticket;

class Event extends Model
{
    protected $guarded = [];
    protected $table="events";

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function eventDateTime()
    {
        return $this->hasMany(EventDateTime::class);
    }
}
