<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';
    public $timestamps = true;

    protected $casts = [
        'amount' => 'float'
    ];

    protected $fillable = [
        'tracking_number',
        'current_location',
        'destination',
        'description',
        'amount'
    ];

    public function customers()
    {

        return $this->belongsToMany(Customer::class)->withTimestamps();
    }
}
