<?php

namespace App\Models;

use App\Models\Cours;
use App\Models\Interfaces\Personable;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Personable as PersonableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Enseignant extends Model
{
    use HasFactory,
     PersonableTrait;

    //protected $primaryKey = 'user_id';



}
