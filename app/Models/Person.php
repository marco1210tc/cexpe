<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persona'; //para que reconozca la tabla; deafult_value = people
    protected $primaryKey = 'nPerCodigo';
    use HasFactory;
}
