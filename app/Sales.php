<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'id',
        'customer_id',
        'sale_date',
    ];

    protected $table = 'sales';

    // Ver a quem pertence a venda
    public function client()
    {
        return $this->belongsTo(Client::class, 'customer_id');
    }

}
