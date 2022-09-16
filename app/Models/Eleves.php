<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Traits\Personable as PersonableTrait;

use App\Models\Promotions;

class Eleves extends Model
{
    use PersonableTrait;



    protected $primaryKey = 'user_id';
    protected $fillable = ['address'];

    public function promotions(): BelongsTo
    {

        //return $this->hasMany(Promotions::class, 'eleve_id', 'id');
        return $this->belongsTo(Promotions::class);
    }
}
