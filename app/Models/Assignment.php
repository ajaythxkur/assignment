<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'column_1',
        'column_2',
        'column_3',
        'column_4',
        'column_5',
        'column_6',
        'column_7',
        'column_8',
        'column_9',
    ];
}
