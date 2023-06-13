<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techizatci_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'ad',
        'phone',
    ];
}
