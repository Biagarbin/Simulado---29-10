<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    protected $fillable =[
        'produto_id',
        'nome',
        'descricao',
        'marca',
        'categoria_id',
        'preco_custo',
        'preco_venda',
        'quantidade',
        'estoque_minimo',
        'validade',
    ];
    public function movimentacoes(): HasMany
    {
        return $this->hasMany(Movimentacao::class);
    }
}
