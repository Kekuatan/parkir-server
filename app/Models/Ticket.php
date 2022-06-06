<?php

namespace App\Models;

use App\Enum\DiskEnum;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Ticket extends Model
{
    use HasFactory, UuidTrait;

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];
    protected $appends = ['vehicle_in_url', 'vehicle_out_url'];

    public function getVehicleOutUrlAttribute($value)
    {
        return $this->picture_vehicle_out ? Storage::disk(DiskEnum::PUBLIC)->url($this->picture_vehicle_out) : '';
    }
    public function getVehicleInUrlAttribute($value)
    {
        return $this->picture_vehicle_in ? Storage::disk(DiskEnum::PUBLIC)->url($this->picture_vehicle_in) : '';
    }

    public function member()
    {
        return $this->hasOne(Member::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function bypasser()
    {
        return $this->hasOne(Bypasser::class);
    }

    public function voucher()
    {
        return $this->hasOne(Voucher::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
