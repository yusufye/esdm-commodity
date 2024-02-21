<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commodity;
use App\Models\User;

class Proficiency extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'years',
        'show_report'
    ];

    public function commodity()
    {
        return $this->hasMany(Commodity::class);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'proficiency_clients');
    }
}
