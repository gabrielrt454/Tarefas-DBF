<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa2 extends Model
{
    protected $table = 'tarefa2';
    protected $fillable = ['nome', 'raca', 'classe', 'idade','arma'];
}

