<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['sala_id','user_id', 'data_reserva'];
    protected $table="reserva";

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function sala(){
        return $this->belongsTo('App\Sala');
    }
}