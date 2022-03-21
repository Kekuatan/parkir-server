<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaPosition extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
