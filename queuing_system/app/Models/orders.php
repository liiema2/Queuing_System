<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;

    protected $fillable = [
     	'username',	'service_id',	'device_id',	'number_orders',	'status',	'source',	'created_at'	,'updated_at'

    ];
    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
