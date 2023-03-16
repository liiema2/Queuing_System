<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class number_order extends Model
{

    use HasFactory;

    protected $table = 'numerical_orders';

    public function service()
    {
        return $this->belongsTo(Service::class);
    }


}
