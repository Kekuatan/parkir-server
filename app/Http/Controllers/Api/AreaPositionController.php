<?php

namespace App\Http\Controllers\Api;

use App\Enum\ValidationEnum;
use App\Http\Controllers\Controller;
use App\Models\AreaPosition;
use App\Traits\ApiCrudTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class AreaPositionController extends Controller
{

    use ApiCrudTrait;


    public function model()
    {
        return AreaPosition::class;
    }
    public function validationRules($resource_id = 0)
    {
        return ValidationEnum::areaPosition();
    }
}
