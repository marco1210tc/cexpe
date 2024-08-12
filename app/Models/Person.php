<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persona'; //para que reconozca la tabla; default_value = people
    protected $primaryKey = 'nPerCodigo'; //default_value = 'id'
    use HasFactory;

    protected $fillable = [
        'cPerApellido',
        'cPerNombre',
        'cPerDireccion',
        'dPerFecNac',
        'nPerEdad',
        'nPerSueldo',
        'nPerEstado',
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }
}
