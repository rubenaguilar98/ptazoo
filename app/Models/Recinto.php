<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{

    protected $table = 'recinto';
    protected $primaryKey = 'idRec';
    public function animales()
    {
        return $this->hasMany('App\Models\Animal' , 'idRec');
    }

    public function cuidadores(){

        return $this->belongsToMany('App\Models\Cuidador' , 'cuidador_recinto' , 'idRec' , 'idCui');

    }


    use HasFactory;
}
