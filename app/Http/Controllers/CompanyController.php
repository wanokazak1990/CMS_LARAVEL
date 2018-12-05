<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;

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
    	return view('company.add')
    		->with('company',$company)//список брендов
			->with('title','Новая акция');//заголовок
    }

    public function put()
    {
    	echo "string";
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
