<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mal_Alis_Model extends Model
{
    use HasFactory;
    protected $fillable = [
        'techizatci',
        'sened_no',
        'barcode',
        'mal_adi',
        'tip',
        'miqdar',
        'alis_qiy',
        'satis_qiy',
        
    ];

    public function getTechizatci()
    {
        return $this->hasOne('App\Models\Techizatci_Model', 'id', 'techizatci');
    }
}
