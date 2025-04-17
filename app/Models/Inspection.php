<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Inspection extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    protected $fillable = ['client_id', 'property_address', 'inspection_date'];

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
