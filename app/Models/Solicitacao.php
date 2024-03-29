<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $table = "solicitacoes";

    protected $fillable = [
        'assunto',
        'solicitacao',
        'condominio',
        'unidade',
        'nome',
        'email',
        'foto',
        'status',
    ];
}
