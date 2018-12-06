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

		<div class="data"></div>
		<div class="company-dop">
			<div class="col-sm-8">
				<h4>Список номенклатуры</h4>
			</div>
			<div class="col-sm-4 text-right">
				<h4><button type="button" class="close">x</button></h4>
			</div>
			<div class="col-sm-12"></div> 
			<div class="dop"> 
			@isset($dops)
				@foreach($dops as $id=>$name)
					<div class="col-sm-4">
						<label>
							<input type="checkbox" name="dops[]" value="{{$id}}">
							{{$name}}
						</label>
					</div>
				@endforeach
			@endisset
			</div>
		</div>

		<div class="clearfix"></div>

		<div class='pos_exeptions'>
			<div class="col-sm-12"><h4>Включение:</h4></div>
			<div class="exep">
				<div class="col-sm-1" style="padding-left: 15px;">
					<label style="color: #fff;">&</label>
					<button type="button" class="clone form-control">Добавить</button>
					<input type="hidden" name="type[1]" value="1">
				</div>
				<div class="col-sm-2">
					{{Form::label('title','VIN:')}}
					{{Form::text('vin[1]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1" >
					{{	Form::label('title','Модель:')}}
					{{ Form::select('model_id[1]',$models,'',['class'=>'form-control'])}}
				</div>
				<div class="col-sm-2">
					{{	Form::label('title','Комплектация:')}}
					{{ Form::select('complect_id[]',[1],'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Трансмиссия:')}}
					{{ 	Form::select('transmission_id[1]',$transmissions,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Привод:')}}
					{{ 	Form::select('wheel_id[1]',$wheels,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Этап поставки:')}}
					{{ 	Form::select('location_id[1]',$locations,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{Form::label('title','Цена от (руб.):')}}
					{{Form::text('pricestart[1]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1">
					{{Form::label('title','Цена до (руб.):')}}
					{{Form::text('pricefinish[1]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1" style="padding-right: 15px;">
					<label style="color: #fff;">&</label>
					<button type="button" class="delete form-control">Удалить</button>
				</div>
			</div>
		</div>

		<div class='pos_exeptions'>
			<div class="col-sm-12"><h4>Исключение:</h4></div>
			<div class="exep">
				<div class="col-sm-1" style="padding-left: 15px;">
					<label style="color: #fff;">&</label>
					<button type="button" class="clone form-control">Добавить</button>
					<input type="hidden" name="type[2]" value="0">
				</div>
				<div class="col-sm-2">
					{{Form::label('title','VIN:')}}
					{{Form::text('vin[2]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1" >
					{{	Form::label('title','Модель:')}}
					{{ Form::select('model_id[2]',$models,'',['class'=>'form-control'])}}
				</div>
				<div class="col-sm-2">
					{{	Form::label('title','Комплектация:')}}
					{{ Form::select('complect_id[2]',[],'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Трансмиссия:')}}
					{{ 	Form::select('transmission_id[2]',$transmissions,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Привод:')}}
					{{ 	Form::select('wheel_id[2]',$wheels,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{	Form::label('title','Этап поставки:')}}
					{{ 	Form::select('location_id[2]',$locations,'',['class'=>'form-control complect'])}}
				</div>
				<div class="col-sm-1">
					{{Form::label('title','Цена от (руб.):')}}
					{{Form::text('pricestart[2]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1">
					{{Form::label('title','Цена до (руб.):')}}
					{{Form::text('pricefinish[2]','',['class'=>'form-control'])}}					
				</div>
				<div class="col-sm-1" style="padding-right: 15px;">
					<label style="color: #fff;">&</label>
					<button type="button" class="delete form-control">Удалить</button>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="col-sm-12"><h4>Виджет:</h4></div>
		<div class="col-sm-4">
			<ul>

    			<li>&lt;model&gt; - идентификатор модели</li>
    			<li>&lt;bydjet&gt; - идентификатор суммы бюджета</li>
    			<li>&lt;procent&gt; - идентификатор суммы скидки</li>
    			<li>&lt;vin&gt; - vin машины</li>
    			<li>&lt;nomen&gt; - номенклатура</li>

    		</ul>
		</div>
		<div class="col-sm-8">
			{{ Form::label('title','Заголовок')}}
			{{Form::text('title',$company->title,['class'=>'form-control'])}}

			{{ Form::label('title','Описание')}}
			{{Form::textarea('text',$company->text,['class'=>'form-control'])}}

			{{ Form::label('title','Офер')}}
			{{Form::text('ofer',$company->ofer,['class'=>'form-control'])}}
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