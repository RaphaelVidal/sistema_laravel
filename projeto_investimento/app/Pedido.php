<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable=['cliente','valor'];
    protected $guarded=['id','created_at','updated_at'];
    protected $table='pedidos';
}
