<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['inspection_id', 'title', 'description'];

    public function inspection() {
        return $this->belongsTo(Inspection::class);
    }

    public function findings() {
        return $this->hasMany(Finding::class);
    }
}
