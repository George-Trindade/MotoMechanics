<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $table='agendamentos';
    protected $fillable=['veiculo_id','Servico','Descricao','Data','Horario'];
}
