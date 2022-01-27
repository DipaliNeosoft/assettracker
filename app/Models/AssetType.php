<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AssetType extends Model
{
    use HasFactory;
    protected $fillable=['type','description'];
    protected $guarded = array();
    // protected $fillable = ['asset_id', 'images'];
    // protected $table = "asset_images";
    // public function Asset(){
    //     return $this->belongsTo('App\Models\Asset','id');
    // }
    protected $table = "asset_types";
    public function Asset(){
        return $this->hasMany(Asset::class,'uid','id');
    }

   
}
