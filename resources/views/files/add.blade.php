@extends ('layout')

@section('right')
	<div>
		{!! Form::open(array('files'=>'true')) !!}
			<label>Название файла:</label>
			<input type="text" name="name" class="form-control" placeholder="Введите название файла">
			
			<br>

			<label>Тип:</label>
			<select class="form-control" name="type_id">
				@foreach($types as $key => $type)
					<option value="{{ $key }}">{{ $type }}</option>
				@endforeach
			</select>

			<br>

			{!! Form::label('title','Бренд:')!!}
			{!! Form::select('brand_id',$brands,'',['class'=>'form-control']) !!}

			<label>Модель:</label>
			<select class="form-control model" name="model_id">
				
			</select>

			<br>

			<label>Файл:</label>
			<input type="file" name="file">

			<br>

			<input type="submit" value="Создать" name="submit">
			<input type="submit" value="Отмена" name="cansel">
			{{ csrf_field() }}
		{!! Form::close() !!}
	</div>
@endsection