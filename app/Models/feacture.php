<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\title;

class feacture extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'cleaning_fee',
        'sleeping_situation',
        'address',
        'area',
        'state',
        'country',
        'zip',
        'room',
        'bathrooms',
        'property_size',
        'bedrooms',
        'please_note',
        'amenities',
        'terms',
    ];
    protected $primaryKey = 'id';
    public function feacture()
    {
        return $this->belongsTo(title::class);
    }
}
