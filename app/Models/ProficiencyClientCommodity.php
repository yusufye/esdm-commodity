<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProficiencyClientPackage;


class ProficiencyClientCommodity extends Model
{
    use HasFactory;
    public function ProficiencyClientPackage(): HasMany
    {
        return $this->hasMany(ProficiencyClientPackage::class);
    }
    
    public function ProficiencyClient(): belongsTo
    {
        return $this->belongsTo(ProficiencyClient::class);
    }

    
}
