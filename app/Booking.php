<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

protected $primaryKey = 'date_string';
   public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_string', 'rooms_booked'
    ];
    protected $casts = [
        'rooms_booked' => 'array',
    ];
}
