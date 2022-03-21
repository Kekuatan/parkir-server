<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bypasser extends Model
{
    use HasFactory, UuidTrait;

    public function ticket(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Ticket::class);
    }

}
