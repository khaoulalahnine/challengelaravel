<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table='services';
    protected $fillable=[
        'title',
        'description',
        'duration',
        'price',
        'image',
    ];
public function booking()
{
    return $this->belongsTo(booking::class);
}
}
