<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Prof extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function cours(): BelongsToMany
    {
    	return $this->belongsToMany(Cours::class,);
    }
}
