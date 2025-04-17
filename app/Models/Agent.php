<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'company', 'license_number', 'type'];
}
