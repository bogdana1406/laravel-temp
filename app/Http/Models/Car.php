<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function brand()
    {
        return $this->hasOne(Brand::class);
    }

    public function engine()
    {
        return $this->hasOne(Engine::class);
    }
}
