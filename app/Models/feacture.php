<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\title;

class feacture extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_per_night',
        'cleaning_fee',
        'sleeping_situation',
        'address',
        'area',
        'state',
        'country',
        'city',
        'zip',
        'property_id',
        'room',
        'bathrooms',
        'property_size',
        'bedrooms',
        'please_note',
        'amenities',
        'terms',
    ];
    protected $primaryKey = 'feacture_id';
    public function product()
    {
        return $this->belongTo(title::class);
    }
    public function booking()
    {
        return $this->hasOne(booking::class,'feacture_id' ,'feacture_id');
    }
}
