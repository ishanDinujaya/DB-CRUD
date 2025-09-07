<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';//table name
    //columns
    protected $fillable=[
        'id','name','description','priority','event_date'
    ];
    public $timestamps=true;//created_at and updated_at columns
}
