<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $fillable = [
        'images'
    ];
    public function setFilenamesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
}
