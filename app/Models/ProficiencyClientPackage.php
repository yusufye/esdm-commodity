<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProficiencyClientPackage extends Model
{
    use HasFactory;

    public function ProficiencyClientCommodity(): belongsTo
    {
        return $this->belongsTo(ProficiencyClientCommodity::class);
    }
}
