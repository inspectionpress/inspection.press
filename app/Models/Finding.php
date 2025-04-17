<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Finding extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'title', 'description', 'image_path', 'recommendation'];

    public function section() {
        return $this->belongsTo(Section::class);
    }
}
