<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
use App\oa_dop;
use App\oa_model;
use App\type_transmission;
use App\type_wheel;
use App\ava_loc;
use App\company_data;
use App\company_dop;

class CompanyController extends Controller
{
    //

    public function list()
    {
    	$list = [];
    	return view('company.list')
    		->with('list',$list)//список брендов
			->with('title','Список акций')//заголовок
			->with(['addTitle'=>'Новый акция','route'=>'companyadd'])
			->with('edit','companyedit')
			->with('delete','companydelete');
    }

    public function add()
    {
    	$company = new company();
    	$dops = oa_dop::pluck('name','id');
    	$models = oa_model::pluck('name','id');
    	$transmissions = type_transmission::pluck('name','id');
    	$wheels = type_wheel::pluck('name','id');
    	$locations = ava_loc::pluck('name','id');
    	return view('company.add')
    		->with('company',$company)//список брендов
			->with('title','Новая акция')
			->with('models',$models)
			->with('transmissions',$transmissions)
			->with('wheels',$wheels)
			->with('locations',$locations)
			->with('dops',$dops);
    }

    public function put(Request $request)
    {
    	if($request->has('submit')) ://если нажата создать
    		$company = new company($request->input());//вставляем в модель компании данные из формы
    		$company->day_in = strtotime($company->day_in);
    		$company->day_out = strtotime($company->day_out);
    		$company->save();//сохраняем компанию
    		if($request->has('dops')) ://если выбраны допы для номенклатуры
    			foreach ($request->input('dops') as $key => $id) ://то прохожу по им всем
    				$company_dop = new company_dop([//создаю модель номенклатуры компании
    					'company_id'=>$company->id,//записываю ид компании
    					'dop_id'=>$id//записываю ид допа
    				]);
    				$company_dop->save();//сохраняю
    			endforeach;
    		endif;

    		foreach ($request->type as $key => $value) ://проходимся по включениям/исключениям (проверять на существование не обязательно так как 2 поле априори всегда будут, хоть и пустые)
    			$mas = array();//создаю пустой массив для хранения исключений/включений
    			$mas['type'] = $value;//записываю тип (включение-1 или исключение-0 )
    			if(isset($request->vin[$key]))//если есть вин с индексом кей
    				$mas['vin'] = $request->vin[$key];//заносим его в массив

    			if(isset($request->model_id[$key]))
    				$mas['model_id'] = $request->model_id[$key];

    			if(isset($request->complect_id[$key]))
    				$mas['complect_id'] = $request->complect_id[$key];

    			if(isset($transmission_id->vin[$key]))
    				$mas['transmission_id'] = $request->transmission_id[$key];

    			if(isset($request->wheel_id[$key]))
    				$mas['wheel_id'] = $request->wheel_id[$key];

    			if(isset($request->location_id[$key]))
    				$mas['location_id'] = $request->location_id[$key];

    			if(isset($request->pricestart[$key]))
    				$mas['pricestart'] = $request->pricestart[$key];

    			if(isset($request->pricefinish[$key]))
    				$mas['pricestart'] = $request->pricestart[$key];
    			$company_data = new company_data($mas);//создаём модель исключений/включений из массива мас
    			$company_data->company_id = $company->id;//подзаписываю id компании в поле компани_ид
    			if($company_data->checkEmpty())//проверяю на пустоту (тайп и компани_ид игнорируются), если не пуста 
    				$company_data->save();//сохраняю
    			unset($mas,$company_data);//чищю масив и модель иключений/включений
    		endforeach;
    	endif;
    }

    public function edit($id)
    {
    	echo "string";
    }

    public function update($id)
    {
    	echo "string";
    }

    public function delete($id)
    {
    	echo "string";
    }

    public function destroy($id)
    {
    	echo "string";
    }
}
