<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InspectionTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function sections()
    {
        return $this->hasMany(TemplateSection::class);
    }
}
