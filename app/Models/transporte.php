<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transporte extends Model
{
    use HasFactory;
    protected $table='transportes';
    protected $filelable=['nombreEmpresa','transmision','ac','numAsientos','modelo','precio','detalles','disponible'];
}
