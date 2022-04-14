<?php

namespace App\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory, UuidTrait;

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
