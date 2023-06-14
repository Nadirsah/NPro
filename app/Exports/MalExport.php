<?php

namespace App\Exports;

use App\Models\Mal_Alis_Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MalExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mal_Alis_Model::select("id", "techizatci", "sened_no", "barcod", "mal_adi","tip", "miqdar", "alis_qiy","satis_qiy")->get();
    }

    public function headings(): array
    {
        return ["ID", "Techizatci", "Sened_NO", "Barcod", "Mal_adi", "Tip","Miqdar", "Alis_qiy", "Satis_qiy"];
    }
}
