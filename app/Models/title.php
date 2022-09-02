<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\feacture;

class title extends Model
{
  
    use HasFactory;
    protected $fillable = [
       
        'title',
        'content',
    ];
    protected $primaryKey = 'title_id';
  
    public function feacture()
    {
        return $this->hasOne(feacture::class,'title_id' ,'title_id');
    }
    public function files()
    {
        return $this->belongTo(file::class);
    }


    // public function feacture()
    // {
    //     return $this->belongsTo(feacture::class,'title_id','title_id');
    // }
   
}
