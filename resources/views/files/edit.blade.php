@extends ('layout')

@section('right')
	<div>
		{!! Form::open(array('files'=>'true')) !!}
			<label>Название файла:</label>
			<input type="text" name="name" class="form-control" placeholder="Введите название файла" value="{{ $file->name }}">
			
			<br>

			<label>Тип:</label>
			<select class="form-control" name="type_id">
				@foreach($types as $key => $type)
					<option value="{{ $key }}" <? if ($key == $file->type_id) echo ' selected'; ?> >{{ $type }}</option>
				@endforeach
			</select>

			<br>

			<label>Модель:</label>
			<select class="form-control" name="model_id">
				@foreach($models as $key => $model)
					<option value="{{ $key }}" <? if ($key == $file->model_id) echo ' selected'; ?> >{{ $model }}</option>
				@endforeach
			</select>

			<br>

			<label>Файл:</label>
			<input type="file" name="file">

			<br>

			<input type="submit" value="Обновить" name="submit">
			<input type="submit" value="Отмена" name="cansel">
			{{ csrf_field() }}
		{!! Form::close() !!}
	</div>
@endsection