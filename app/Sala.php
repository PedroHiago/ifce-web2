<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = ['nome'];
    protected $table="sala";
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }
}
