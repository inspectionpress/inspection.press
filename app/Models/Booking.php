<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['company_id', 'name', 'email', 'phone', 'address', 'scheduled_at', 'status', 'property_data'];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
