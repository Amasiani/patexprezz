<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address'
    ];

    public function packages()
    {

        return $this->belongsToMany(Package::class)->withTimestamps();
    }
}
