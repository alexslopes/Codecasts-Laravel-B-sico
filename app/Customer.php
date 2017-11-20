<?php

namespace Teste;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function purchases()
    {
        return $this->hasMany(Purchases::class);
    }
}
