<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'diarias',
        'create_at',
        'update_at',
    ];
    public function pedido()
    {
        return $this->hasOne(Pedido::class,);
    }
}
