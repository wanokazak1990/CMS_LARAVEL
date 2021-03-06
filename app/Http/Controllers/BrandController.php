<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\oa_brand; //подключаю модель отвечающую за бренд в базе данных

/*
BrandController - обрабатывает все операции с созданием, редактированием и удалением брендов.
*/

class BrandController extends Controller
{
    //Список всех брендов
	public function list()
	{
		$brand = new oa_brand();
		$list = $brand->get();//получаю все бренды
		return view('brand.brandlist')//вывод вива списка брендов
			->with('list',$list)//список брендов
			->with('title','Список брендов')//заголовок
			->with(['addTitle'=>'Новый бренд','route'=>'brandadd'])
			->with('edit','brandedit')
			->with('delete','branddelete');
	}

	//Создание нового бренда (вывод формы)
	public function add()
	{
		return view('brand.brandadd')//вывод вива создания бренда
			->with('title','Новый бренд')//заголовок
			->with(['addTitle'=>'Новый бренд','route'=>'brandadd']);
	}

	//Создание нового бренда (запись данных из формы в бд)
	public function put()
	{
		if(isset($_POST['submit']))//если нажат сабмит
		{
			$brand = new oa_brand();
			$brand->create($_POST);//записываем данные из поста в модель и заливаем модель в БД 
		}
		return redirect()->route('brandlist');//перенаправляем на список брендов (имя роута brandlist)
	}

	//Редактирование бренда (вывод формы)
	public function edit($id)
	{
		$brand = new oa_brand();
		$brand = $brand->find($id);//ищу бренд по id
		return view('brand.brandadd')//вывод вива
			->with('title','Редактирование бренда')//заголовок
			->with('brand',$brand);//модель бренда по id
	}

	//Редактирование бренда (запись данных из формы в бд)
	public function update($id)
	{
		if(isset($_POST['submit']))//если нажат сабмит
		{
			$brand = new oa_brand();
			$brand = $brand->find($id);//ищу бренд по id
			$brand->name = $_POST['name'];//перезаписываю в модели бренд имя бренда из поста
			$brand->save();//пересохраняю модель в бд
		}
		return redirect()->route('brandlist');//перенаправляем на список брендов (имя роута brandlist)
	}

	//Удаление бренда (Вывод формы проверки)
	public function delete($id)
	{
		$brand = new oa_brand();
		$brand = $brand->find($id);//ищу бренд по id
		return view('brand.branddel')//вывод вива
			->with('title','Удаление бренда')//заголовок
			->with('brand',$brand);
	}

	//Удаление бренда (выполнение)
	public function destroy($id)
	{
		if(isset($_POST['delete']))//если нажат делете
		{
			oa_brand::destroy($id);//удаляю жестко
		}
		return redirect()->route('brandlist');//перенаправляем на список брендов (имя роута brandlist)
	}
}
