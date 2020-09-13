<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Things extends Model
{
    protected $fillable = [
        'name', 'amount',
    ];
    use HasFactory;
    public function belongToParty()
    {
        return $this->belongsTo('App\Models\Party', 'party_id', 'id');
    }
}
