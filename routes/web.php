<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*РОУТЫ AJAX ЗАПРОСОВ*/

Route::post('/getcolor',		'AjaxController@getcolor')			->name('getcolor');

Route::get('/getoption',		'AjaxController@getoption')			->name('getoption');

Route::get('/getmodels',		'AjaxController@getmodels')			->name('getmodels');

Route::get('/getmotors',		'AjaxController@getmotors')			->name('getmotors');

Route::post('/getpacks',		'AjaxController@getpacks')		->name('getpacks');

Route::get('/getcomplects',		'AjaxController@getcomplects')		->name('getcomplects');



/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ БРЕНДОВ*/

Route::get('/brandlist', 		'BrandController@list')				->name('brandlist');

Route::get('/brandadd', 		'BrandController@add')				->name('brandadd');

Route::post('/brandadd', 		'BrandController@put')				->name('brandadd');

Route::get('/brandedit/{id}', 	'BrandController@edit')				->name('brandedit');

Route::post('/brandedit/{id}', 	'BrandController@update')			->name('brandedit');

Route::get('/branddel/{id}', 	'BrandController@delete')			->name('branddelete');

Route::delete('/branddel/{id}', 'BrandController@destroy')			->name('branddelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ СТРАН*/

Route::get('/countrylist', 			'CountryController@list')		->name('countrylist');

Route::get('/countryadd', 			'CountryController@add')		->name('countryadd');

Route::post('/countryadd', 			'CountryController@put')		->name('countryadd');

Route::get('/countryedit/{id}', 	'CountryController@edit')		->name('countryedit');

Route::post('/countryedit/{id}', 	'CountryController@update')		->name('countryedit');

Route::get('/countrydel/{id}', 		'CountryController@delete')		->name('countrydelete');

Route::delete('/countrydel/{id}', 	'CountryController@destroy')	->name('countrydelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ ТИПОВ КУЗОВА*/

Route::get('/typemodellist', 			'TypeModelController@list')		->name('typemodellist');

Route::get('/typemodeladd', 			'TypeModelController@add')		->name('typemodeladd');

Route::post('/typemodeladd', 			'TypeModelController@put')		->name('typemodeladd');

Route::get('/typemodeledit/{id}', 		'TypeModelController@edit')		->name('typemodeledit');

Route::post('/typemodeledit/{id}', 		'TypeModelController@update')	->name('typemodeledit');

Route::get('/typemodeldel/{id}', 		'TypeModelController@delete')	->name('typemodeldelete');

Route::delete('/typemodeldel/{id}', 	'TypeModelController@destroy')	->name('typemodeldelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ МОДЕЛЕЙ АВТО*/

Route::get('/modellist', 			'ModelController@list')		->name('modellist');

Route::get('/modeladd', 			'ModelController@add')		->name('modeladd');

Route::post('/modeladd', 			'ModelController@put')		->name('modeladd');

Route::get('/modeledit/{id}', 		'ModelController@edit')		->name('modeledit');

Route::post('/modeledit/{id}', 		'ModelController@update')	->name('modeledit');

Route::get('/modeldel/{id}', 		'ModelController@delete')	->name('modeldelete');

Route::delete('/modeldel/{id}', 	'ModelController@destroy')	->name('modeldelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ ЦВЕТОВ*/

Route::get('/colorlist', 			'ColorController@list')		->name('colorlist');

Route::get('/coloradd', 			'ColorController@add')		->name('coloradd');

Route::post('/coloradd', 			'ColorController@put')		->name('coloradd');

Route::get('/coloredit/{id}', 		'ColorController@edit')		->name('coloredit');

Route::post('/coloredit/{id}', 		'ColorController@update')	->name('coloredit');

Route::get('/colordel/{id}', 		'ColorController@delete')	->name('colordelete');

Route::delete('/colordel/{id}', 	'ColorController@destroy')	->name('colordelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ РАЗДЕЛОВ ОПЦИЙ*/

Route::get('/optparentlist', 		'OptionParentController@list')				->name('optparentlist');

Route::get('/optparentadd', 		'OptionParentController@add')				->name('optparentadd');

Route::post('/optparentadd', 		'OptionParentController@put')				->name('optparentadd');

Route::get('/optparentedit/{id}', 	'OptionParentController@edit')				->name('optparentedit');

Route::post('/optparentedit/{id}', 	'OptionParentController@update')			->name('optparentedit');

Route::get('/optparentdel/{id}', 	'OptionParentController@delete')			->name('optparentdelete');

Route::delete('/optparentdel/{id}', 'OptionParentController@destroy')			->name('optparentdelete');

/*РОУТЫ ДЛЯ РЕДАКТИРОВАНИЯ ОПЦИЙ*/

Route::get('/optionlist',			'OptionController@list')	->name('optionlist');

Route::get('/optionadd',			'OptionController@add')		->name('optionadd');

Route::post('/optionadd',			'OptionController@put')		->name('optionadd');

Route::get('/optionedit/{id}',		'OptionController@edit')	->name('optionedit');

Route::post('/optionedit/{id}',		'OptionController@update')	->name('optionedit');

Route::get('/optiondel/{id}',		'OptionController@delete')	->name('optiondelete');

Route::delete('/optiondel/{id}',	'OptionController@destroy')	->name('optiondelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ ТИПОВ ТРАНСМИССИИ, ПРИВОДОВ, ТИПОВ МОТОРОВ*/

Route::get('/partmotorlist',		'PartMotorController@list')	->name('partmotorlist');

Route::post('/partmotorlist',		'PartMotorController@put') 	->name('partmotorlist');

Route::delete('/partmotorlist',		'PartMotorController@destroy')->name('partmotorlist');

/*РОУТЫ ДЛЯ СОЗДАНИЯ МОТОРОВ*/

Route::get('/motorlist',			'MotorController@list')		->name('motorlist');

Route::get('/motoradd',				'MotorController@add')		->name('motoradd');

Route::post('/motoradd',			'MotorController@put')		->name('motoradd');

Route::get('/motoredit/{id}',		'MotorController@edit')		->name('motoredit');

Route::post('/motoredit/{id}',		'MotorController@update')	->name('motoredit');

Route::get('/motordel/{id}',		'MotorController@delete')	->name('motordelete');

Route::delete('/motordel/{id}',		'MotorController@destroy')	->name('motordelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ ПАКЕТОВ*/

Route::get('/packlist',				'PackController@list')		->name('packlist');

Route::get('/packadd',				'PackController@add')		->name('packadd');

Route::post('/packadd',				'PackController@put')		->name('packadd');

Route::get('/packedit/{id}',		'PackController@edit')		->name('packedit');

Route::post('/packedit/{id}',		'PackController@update')	->name('packedit');

Route::get('/packdel/{id}',			'PackController@delete')	->name('packdelete');

Route::delete('/packdel/{id}',		'PackController@destroy')	->name('packdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ КОМПЛЕКТАЦИЙ*/

Route::get('/complectlist',			'ComplectController@list')		->name('complectlist');

Route::get('/complectadd',			'ComplectController@add')		->name('complectadd');

Route::post('/complectadd',			'ComplectController@put')		->name('complectadd');

Route::get('/complectedit/{id}',	'ComplectController@edit')		->name('complectedit');

Route::post('/complectedit/{id}',	'ComplectController@update')	->name('complectedit');

Route::get('/complectdel/{id}',		'ComplectController@delete')	->name('complectdelete');

Route::delete('/complectdel/{id}',	'ComplectController@destroy')	->name('complectdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ, ВЫГРУЗКЕ, РЕДАКТИРОВАНИЯ УДАЛЕНИЯ АВТОМОБИЛЕЙ*/

Route::get('/carlist',			'CarController@list')		->name('carlist');

Route::get('/caradd',			'CarController@add')		->name('caradd');

Route::post('/caradd',			'CarController@put')		->name('caradd');

Route::get('/caredit/{id}',		'CarController@edit')		->name('caredit');

Route::post('/caredit/{id}',	'CarController@update')		->name('caredit');

Route::get('/cardel/{id}',		'CarController@delete')		->name('cardelete');

Route::delete('/cardel/{id}',	'CarController@destroy')	->name('cardelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ СТАТУСОВ АВТОМОБИЛЯ*/

Route::get('/carstatuslist',			'CarStatusController@list')		->name('carstatuslist');

Route::get('/carstatusadd',				'CarStatusController@add')		->name('carstatusadd');

Route::post('/carstatusadd',			'CarStatusController@put')		->name('carstatusadd');

Route::get('/carstatusedit/{id}',		'CarStatusController@edit')		->name('carstatusedit');

Route::post('/carstatusedit/{id}',		'CarStatusController@update')	->name('carstatusedit');

Route::get('/carstatusdel/{id}',		'CarStatusController@delete')	->name('carstatusdelete');

Route::delete('/carstatusdel/{id}',		'CarStatusController@destroy')	->name('carstatusdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ ПОСТАВОК АВТОМОБИЛЯ loc - location */

Route::get('/carloclist',			'CarLocController@list')	->name('carloclist');

Route::get('/carlocadd',			'CarLocController@add')		->name('carlocadd');

Route::post('/carlocadd',			'CarLocController@put')		->name('carlocadd');

Route::get('/carlocedit/{id}',		'CarLocController@edit')	->name('carlocedit');

Route::post('/carlocedit/{id}',		'CarLocController@update')	->name('carlocedit');

Route::get('/carlocdel/{id}',		'CarLocController@delete')	->name('carlocdelete');

Route::delete('/carlocdel/{id}',	'CarLocController@destroy')	->name('carlocdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ ДОП ОБОРУДОВАНИЯ*/

Route::get('/doplist',			'DopController@list')		->name('doplist');

Route::get('/dopadd',			'DopController@add')		->name('dopadd');

Route::post('/dopadd',			'DopController@put')		->name('dopadd');

Route::get('/dopedit/{id}',		'DopController@edit')		->name('dopedit');

Route::post('/dopedit/{id}',	'DopController@update')		->name('dopedit');

Route::get('/dopdel/{id}',		'DopController@delete')		->name('dopdelete');

Route::delete('/dopdel/{id}',	'DopController@destroy')	->name('dopdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ КРЕДИТОВ*/

Route::get('/kreditlist',			'KreditController@list')		->name('kreditlist');

Route::get('/kreditadd',			'KreditController@add')			->name('kreditadd');

Route::post('/kreditadd',			'KreditController@put')			->name('kreditadd');

Route::get('/kreditedit/{id}',		'KreditController@edit')		->name('kreditedit');

Route::post('/kreditedit/{id}',		'KreditController@update')		->name('kreditedit');

Route::get('/kreditdel/{id}',		'KreditController@delete')		->name('kreditdelete');

Route::delete('/kreditdel/{id}',	'KreditController@destroy')		->name('kreditdelete');

/*РОУТЫ ДЛЯ СОЗДАНИЯ КРЕДИТОВ*/

Route::get('/companylist',			'CompanyController@list')		->name('companylist');

Route::get('/companyadd',			'CompanyController@add')		->name('companyadd');

Route::post('/companyadd',			'CompanyController@put')		->name('companyadd');

Route::get('/companyedit/{id}',		'CompanyController@edit')		->name('companyedit');

Route::post('/companyedit/{id}',	'CompanyController@update')		->name('companyedit');

Route::get('/companydel/{id}',		'CompanyController@delete')		->name('companydelete');

Route::delete('/companydel/{id}',	'CompanyController@destroy')	->name('companydelete');

/* РОУТЫ ТИПОВ ФАЙЛОВ */

Route::get('/typeslist',			'FileTypeController@list')		->name('typeslist');

Route::get('/typesadd',				'FileTypeController@add')		->name('typesadd');

Route::post('/typesadd',			'FileTypeController@put')		->name('typesadd');

Route::get('/typesedit/{id}',		'FileTypeController@edit')		->name('typesedit');

Route::post('/typesedit/{id}',		'FileTypeController@update')	->name('typesedit');

Route::get('/typesdel/{id}',		'FileTypeController@delete')	->name('typesdelete');

Route::delete('/typesdel/{id}',		'FileTypeController@destroy')	->name('typesdelete');

/* РОУТЫ ФАЙЛОВ*/

Route::get('/fileslist',			'FileController@list')			->name('fileslist');

Route::get('/filesadd', 			'FileController@add')			->name('filesadd');

Route::post('/filesadd', 			'FileController@put')			->name('filesadd');

Route::get('/filesedit/{id}', 		'FileController@edit')			->name('filesedit');

Route::post('/filesedit/{id}', 		'FileController@update')		->name('filesedit');

Route::get('/filesdel/{id}',		'FileController@delete')		->name('filesdelete');

Route::delete('/filesdel/{id}',		'FileController@destroy')		->name('filesdelete');

/* РОУТЫ ХАРАКТЕРИСТИК */

Route::get('/characterlist', 			'CharacterController@list')		->name('characterlist');

Route::get('/characteradd', 			'CharacterController@add')		->name('characteradd');

Route::post('/characteradd', 			'CharacterController@put')		->name('characteradd');

Route::get('/characteredit/{id}', 		'CharacterController@edit')		->name('characteredit');

Route::post('/characteredit/{id}', 		'CharacterController@update')	->name('characteredit');

Route::get('/characterdel/{id}',		'CharacterController@delete')		->name('characterdel');

Route::delete('/characterdel/{id}',		'CharacterController@destroy')		->name('characterdel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* CRM */

Route::get('/crm', 'CRMMainController@main')->name('crm');