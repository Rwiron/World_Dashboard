<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CountryLanguage extends Model
{
    protected $table = 'countryLanguage'; // Adjust the table name if different
    public $incrementing = false; // Since we're using a composite key
    protected $primaryKey = ['CountryCode', 'Language']; // Note: Eloquent does not support composite keys out-of-the-box
    protected $keyType = 'string';

    protected $fillable = [
        'CountryCode', 'Language', 'IsOfficial', 'Percentage',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}