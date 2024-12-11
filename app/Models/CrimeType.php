<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrimeType extends Model
{
    use HasFactory;

    protected $table = 'crime_types';

    protected $fillable = [
        'name',
    ];

    public function defendants()
    {
        return $this->hasMany(Defendant::class);
    }
}
