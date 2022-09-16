<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Eleves;

class Promotions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cycle',
        'option'
    ];

    public function eleves():HasMany
    {
        return $this->hasMany(Eleves::class, 'promotion_id');
    }
    /*public function cour(){

        return $this->belongsTo(Cours::class);
    }*/
}
