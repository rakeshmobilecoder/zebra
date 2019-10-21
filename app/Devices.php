<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devices extends Model
{
    use SoftDeletes;
    protected $table = 'devices';
    protected $primaryKey = 'id';

    protected $fillable = ['user_id', 'device_name','created_at', 'updated_at' ];

    protected $dates = ['deleted_at'];
	
	
}
