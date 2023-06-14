<?php

namespace App\Imports;

use App\Models\Mal_Alis_Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MalImport implements ToModel,WithHeadingRow

{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Mal_Alis_Model([
            'techizatci' => $row['techizatci'],
            'sened_no' => $row['sened_no'],
            'barcod'   => $row['barcod'],
            'mal_adi'  => $row['mal_adi'],
            'tip'      => $row['tip'],
            'miqdar'   => $row['miqdar'],
            'alis_qiy' => $row['alis_qiy'],
            'satis_qiy' => $row['satis_qiy'],
        ]);
    }
}
