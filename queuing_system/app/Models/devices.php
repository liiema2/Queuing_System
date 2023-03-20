<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  devices extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name', 'ip_address', 'status', 'connection', 'service', 'username', 'password', 'nameDevice','created_at','updated_at'
    ];

    public function service()
{
    return $this->hasOne(Service::class);
}
}
