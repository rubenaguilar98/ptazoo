<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    protected $table = "animal";
    protected $primaryKey = "idAni";



    use HasFactory;
}


