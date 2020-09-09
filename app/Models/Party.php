<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
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
    // use SoftDeletes;
    public function friends()
    {
        return $this->hasMany('App\Models\Friend');
    }
   public function things()
   {
       return $this->hasMany('App\Models\Things');
   }
}
