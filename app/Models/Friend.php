<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    protected $with = ['party'];
    protected $fillable = ['name','email','phone','mood','party_id'];
    public function party()
    {
        return $this->belongsTo('App\Models\Party');
    }
}
