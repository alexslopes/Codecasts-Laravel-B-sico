<?php

namespace Teste;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $casts = [
        'special_customer' => 'boolean',
        'birthdate' => 'date',
    ];

    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }
}
