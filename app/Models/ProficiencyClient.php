<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ProficiencyClientCommodity;



class ProficiencyClient extends Model
{
    use HasFactory;

    public function ProficiencyClientCommodity(): HasMany
    {
        return $this->hasMany(ProficiencyClientCommodity::class);
    }
}
