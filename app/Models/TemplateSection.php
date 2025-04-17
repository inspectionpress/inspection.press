<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemplateSection extends Model
{
    use HasFactory;

    protected $fillable = ['inspection_template_id', 'title', 'description'];

    public function template()
    {
        return $this->belongsTo(InspectionTemplate::class);
    }

    public function findings()
    {
        return $this->hasMany(TemplateFinding::class);
    }
}
