<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TemplateFinding extends Model
{
    use HasFactory;

    protected $fillable = ['template_section_id', 'title', 'description', 'recommendation'];

    public function section()
    {
        return $this->belongsTo(TemplateSection::class);
    }
}
