<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{

    protected $table = 'habitat';
    protected $primaryKey = 'idHab';

    public function recintos()
    {
        return $this->hasMany('App\Models\Recinto' , 'idHab');
    }

    use HasFactory;
}
