<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'planification_id',
    ];

    public function planification(){
        return $this->belongsTo(Planification::class);
    }

    public function periods(){
        return $this->hasMany(Period::class, 'day_id', 'id');
    }
}
