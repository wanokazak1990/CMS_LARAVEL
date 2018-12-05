@extends('layout')



@section('right')
	{!! Form::open(array('files'=>'true')) !!}
		<div class="col-sm-2"> 
			{!! Form::label('title','Начало:*') !!}
				{!! Form::text('day_in',($company->day_in)?date('d.m.Y',$company->day_in):'',['class'=>'form-control calendar','required'=>'required'])!!}
		</div>

		<div class="col-sm-2"> 
			{!! Form::label('title','Конец:*') !!}
				{!! Form::text('day_out',($company->day_out)?date('d.m.Y',$company->day_out):'',['class'=>'form-control calendar','required'=>'required'])!!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Статус:*') !!}
			{!! Form::select('status',[0=>'Неактивна','1'=>'Активна'],$company->status,['class'=>'form-control','required'=>'required'])!!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Таймер:*') !!}
			{!! Form::select('timer',[0=>'Отключен','1'=>'Включен'],$company->timer,['class'=>'form-control', 'required' => 'required' ])!!}
		</div>

		<div class="clearfix"></div>

		<div class="col-sm-2">
			{!! Form::label('title','Раздел:*') !!}
			{!! Form::select('razdel',$company->getRazdels(), $company->razdel,['class'=>'form-control', 'required' => 'required' ])!!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Название:*') !!}
			{!! Form::text('name',$company->name,['class'=>'form-control']) !!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Сценарий:*') !!}
			{!! Form::select('scenario',$company->getScenario(), $company->scenario,['class'=>'form-control', 'required' => 'required' ])!!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Лояльность:*') !!}
			{!! Form::select('main',$company->getMains(), $company->main,['class'=>'form-control', 'required' => 'required' ])!!}
		</div>

		<div class="col-sm-2">
			{!! Form::label('title','Зависимость:*') !!}
			{!! Form::select('immortal',$company->getImmortals(), $company->immortal,['class'=>'form-control', 'required' => 'required' ])!!}
		</div>

		<div class="clearfix"></div>

		<div class="data">

		</div>

		<div class="clearfix"></div>

		<div class="col-sm-2"> 
		{!! Form::submit('Создать',	 ['class' => 'form-control','name'=>'submit']) !!}
		</div>
		
		<div class="col-sm-2">
		{!! Form::submit('Отмена',	 ['class' => 'form-control','name'=>'cansel']) !!}
		</div>

		{{ csrf_field() }}
	{!! Form::close() !!}
@endsection