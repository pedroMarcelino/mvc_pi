<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'tel'
    ];

    protected $table = 'clients';

    // Compras por ID
    public function sales()
    {
        return $this->hasMany(Sales::class, 'customer_id');
    }
}
