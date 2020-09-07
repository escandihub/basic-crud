<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Things extends Model
{
    protected $fillable = [
        'name', 'amount',
    ];
    protected $primaryKey = 'thing_id';
    use HasFactory;
}
