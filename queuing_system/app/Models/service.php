<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';



    protected $fillable = [
        'servicename', 'description', 'status', 'priority', 'devices_id'
    ];
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function service()
{
    return $this->hasOne(Service::class);
}
    public function orders()
{
    return $this->hasOne(orders::class);
}


}
