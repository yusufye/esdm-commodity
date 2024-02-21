<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commodity;

class Commodity_package extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'commodity_id',
        'price',
        'description',
    ];

    public function commodity(): belongsTo
    {
        return $this->belongsTo(Commodity::class);
    }

}
