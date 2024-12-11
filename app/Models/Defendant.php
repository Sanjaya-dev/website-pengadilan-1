<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Defendant extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'defendants';

    protected $fillable = [
        'name',
        'crime_type_id',
        'peneliti',
        'tanggal_SPDP',
        'tanggal_P17',
        'tanggal_tahap_1',
        'tanggal_P18',
        'tanggal_P19',
        'tanggal_P20',
        'tanggal_P21',
        'tanggal_P21A',
        'status',
    ];

    public function crimeType()
    {
        return $this->belongsTo(CrimeType::class);
    }
}
