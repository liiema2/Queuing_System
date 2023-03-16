<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'servicecode',
        'servicename',
        'description',
        'status',
        'priority'
    ];
    public function numericalOrders()
    {
        return $this->hasMany(number_order::class, 'service_id');
    }


}
