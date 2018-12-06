<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_data extends Model
{
    //
    protected $fillable = ['type','company_id','vin','model_id','complect_id','transmission_id','wheel_id','location_id','pricestart','pricefinish'];

    public function checkEmpty()
    {
    	foreach ($this->attributes as $key => $value) {
    		if($key!='type' && $key!='company_id')
    			if(!empty($value))
    				return 1;
    	}
    	return 0;
    }
}
