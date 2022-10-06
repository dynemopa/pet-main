<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\feacture;
use Cviebrock\EloquentSluggable\Sluggable;

class title extends Model
{
  
    use HasFactory,Sluggable;
  
    protected $fillable = [
        
        'title',
        'price_per_night',
        'content',
        'property_id',
        'city',
    ];

  
    public function feacture()
    {
        return $this->hasOne(feacture::class,'title_id' ,'id');
    }
    public function file()
    {
        return $this->hasOne(file::class,'title_id','id');
    }
    public function booking()
    {
        return $this->hasMany(booking::class,'title_id','id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    // public function feacture()
    // {
    //     return $this->belongsTo(feacture::class,'title_id','title_id');
    // }
   
}
