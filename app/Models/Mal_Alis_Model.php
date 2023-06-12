<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mal_Alis_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'techizatci',
        'barcode',
        'mal_adi',
        'tip',
        'miqdar',
        'alis_qiy',
        'alis_cem',
        'satis_qiy',
        'satis_cem',
        
    ];
}
