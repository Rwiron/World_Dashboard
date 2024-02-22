<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city'; // Adjust the table name if different
    protected $primaryKey = 'ID';
    public $incrementing = true;

    protected $fillable = [
        'Name', 'CountryCode', 'District', 'Population',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'CountryCode', 'Code');
    }
}