<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function profs(): BelongsToMany
    {
    	return $this->belongsToMany(Prof::class,);

    }
}
