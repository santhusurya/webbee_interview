<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get all the workshops for the event
     */
    public function workshop()
    {
        return $this->hasMany(Workshop::class,'event_id');
    }
}
