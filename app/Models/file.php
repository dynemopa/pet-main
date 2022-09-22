<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    use HasFactory;
    protected $fillable = [
        'filenames'
    ];
    protected $primaryKey = 'files_id';
    public function setFilenamesAttribute($value)
    {
        $this->attributes['filenames'] = json_encode($value);
    }
    public function title()
    {
        return $this->hasOne(title::class,'files_id' ,'files_id');
    }
    // public function booking()
    // {
    //     return $this->hasOne(booking::class,'files_id' ,'files_id');
    // }
}
