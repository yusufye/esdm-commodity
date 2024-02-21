<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commodity;

class Commodity_document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document',
        'year',
        'commodity_id',
        'file_path',
        'description',
    ];

}
