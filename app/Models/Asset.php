<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = "assets";
    protected $fillable=['name','code','uid','image','isactive'];
    
   
    public function AssetType(){
        return $this->belongsTo(AssetType::class,'uid','id');
    }

    public static function getAllAsset(){
        
        return Asset::all();
    }
   
}
