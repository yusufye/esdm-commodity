<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Commodity_package;
use App\Models\Commodity_document;

class Commodity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent',
        'pup_id',
        'description',
    ];

    public function package(): HasMany
    {
        return $this->hasMany(Commodity_package::class);
    }
    
    public function document(): HasMany
    {
        return $this->hasMany(Commodity_document::class);
    }

    public function proficiencies()
    {
        return $this->belongsTo(Proficiency::class);
    }
}
