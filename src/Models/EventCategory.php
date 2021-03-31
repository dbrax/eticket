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

class EventCategory extends Model
{
    protected $guarded = [];
    protected $table="event_categories";


    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
