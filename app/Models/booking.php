<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'checkin',
        'checkout',
        'guest',
      
    ];
    public function files()
    {
        return $this->belongTo(file::class);
    }
}
