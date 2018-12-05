<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\oa_brand;
class oa_color extends Model
{
    //
    protected $fillable = ['name','rn_code','web_code','brand_id'];
    public $timestamps = false;

    public function brand()
    {
    	$res = $this->belongsTo('App\oa_brand');
    	if($res)
    		return $res;
    }
}
