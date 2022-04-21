<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Weblink extends Model
{
    use HasFactory;

    public function item(): MorphOne
    {
        return $this->morphOne(Item::class, 'content');
    }
}
