<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    use HasFactory;
    protected $fillable=[
        'foodPicture',
        'foodPrice',
        'foodName',
        'foodDetails',
    ];
}
