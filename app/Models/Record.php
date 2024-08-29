<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'master',
        'service',
        'name_klient',
        'phone',
        'email',
        'comment',
        'total_price',
    ];
}
