<?php

namespace App\Exports;
use App\Models\Asset;
use App\Models\AssetType;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UserExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return Asset::all();
    }

    public function headings(): array
    {
        return [
            'Id', 'Name', 'Code', 'Type','Isactive', 'Image', 'Created At', 'Updated At'
        ];
    }
}
