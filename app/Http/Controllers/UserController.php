<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Models\AssetType;
use App\Models\Asset;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;





class UserController extends Controller
{

    
    public function export()
    {
        return Excel::download(new UserExport, 'asset.xls');
    }
}
