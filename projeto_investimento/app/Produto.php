<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


// colunas da tabela usadas no crud

class Produto extends Model
{
    protected $fillable = ['nome','descricao','valor','numero'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produtos';

}
