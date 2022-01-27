<?php

namespace App\Exports;

use App\Models\Asset;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AssetExport implements  FromCollection, WithCustomCsvSettings, WithHeadings
{
    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ','
        ];
    }
    public function heading():array{
        return[
            'Id',
            'Type',
            'Name',
            'Code',
            'Images',
            'Isactive',
            'Created At', 'Updated At'

        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Asset::select('id','uid','name','code','image','isactive','created_at','updated_at')->get();
    }
  
    
}
