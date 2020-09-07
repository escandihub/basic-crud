<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'name',
        'objective',
        'location',
        'number_guests',
        'date'
    ];
    use HasFactory;
    public function friends()
    {
        return $this->hasMany('App\Models\Friend');
    }
}
