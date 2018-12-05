<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\oa_model;
use App\oa_brand;
use App\country_model;
use App\type_model;
use App\oa_color;
use App\model_color;

use Illuminate\Support\Facades\File;

class ModelController extends Controller
{
    //
    public function list()
    {
    	$list = oa_model::get();
    	return view('model.list')
    		->with('title','Список моделей')
    		->with('list',$list)
    		->with(['addTitle'=>'Новая модель','route'=>'modeladd'])
			->with('edit','modeledit')
			->with('delete','modeldelete');

    }

    public function add()
    {
    	$brandlist = oa_brand::pluck('name','id');
    	$countrylist = country_model::pluck('name','id');
    	$typelist = type_model::pluck('name','id');
    	$model = new oa_model();
    	return view('model.add')
    		->with('title','Новая модель')
    		->with(['addTitle'=>'Новая модель','route'=>'modeladd'])
    		->with('brands',$brandlist)
    		->with('countrys',$countrylist)
    		->with('types',$typelist)
    		->with('model',$model);
    }

    public function put(Request $request)
    {	
    	if(isset($_POST['submit']))
    	{
    		$model = new oa_model($_POST); 
            foreach ($request->file() as $key=>$file) {
                $name = $key.'.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                $model->$key = $name;
                $file->move(storage_path('app/public/images/'.$model->link), $name);
            }    		
            $model->save();
                        
            foreach ($request->color_id as $color) 
            {
                $model_color = new model_color();
                $model_color->model_id = $model->id;
                $model_color->color_id = $color;
                $model_color->save();
            }
            return redirect()->route('modellist');
    	}
    	return redirect()->route('modellist');
    }

    public function edit($id)
    {
    	$brandlist = oa_brand::pluck('name','id');
    	$countrylist = country_model::pluck('name','id');
    	$typelist = type_model::pluck('name','id');
    	$model = oa_model::find($id);
        $model->colorBybrand;
        $model->colorBymodel;
    	return view('model.add')
    		->with('title','Новая модель')
    		->with(['addTitle'=>'Новая модель','route'=>'modeladd'])
    		->with('brands',$brandlist)
    		->with('countrys',$countrylist)
    		->with('types',$typelist)
    		->with('model',$model);
    }

    public function update(Request $request,$id)
    {
    	if(isset($_POST['submit']))
    	{
    		$model = new oa_model();
    		$model = $model->find($id);    		
     		foreach ($request->file() as $key=>$file) {
     			$name = $key.'.'.pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
     			$model->$key = $name;
     			$file->move(storage_path('app/public/images/'.$model->link), $name);
            }

            model_color::where('model_id',$model->id)->delete();
            foreach ($request->color_id as $color) 
            {
                $model_color = new model_color();
                $model_color->model_id = $model->id;
                $model_color->color_id = $color;
                $model_color->save();
            }

            $model->update($request->input());
            return redirect()->route('modellist');
    	}
    	return redirect()->route('modellist');
    }

    public function delete($id)
    {
    	$model = new oa_model();
    	$model = $model->find($id);
    	return view('model.del')//вывод вива
			->with('title','Удаление модели')//заголовок
			->with('model',$model);//модель типа
    }

    public function destroy($id)
    {
    	if(isset($_POST['delete']))
    	{
            $model = new oa_model();
            $model = $model->find($id);
            File::deleteDirectory(storage_path('app/public/images/'.$model->link));
    		oa_model::destroy($id);
            model_color::where('model_id',$id)->delete();
    	}
    	return redirect()->route('modellist');
    }
}
