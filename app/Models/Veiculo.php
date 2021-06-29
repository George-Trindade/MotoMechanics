<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;


    public function agendamento(){
        return $this->hasMany(Agendamento::class,'veiculo_id');
        return $this->hasMany(Agendamento::class,'Modelo');
    }
    public function orcamento(){
        return $this->hasMany(Orcamento::class,'veiculo_id');
        return $this->hasMany(Orcamento::class,'Modelo');
    }
    public function editaorcamento(){
        return $this->hasMany(Orcamento::class,'veiculo_id');
    }
}

