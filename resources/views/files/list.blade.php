@extends ('layout')

@section('right')
	<a href="{{ route($route) }}">{{ $addTitle }}</a>
	<table class="table">
		@foreach($list as $key => $file)
		<tr>
			<td>{{ $key + 1 }}</td>
			<td>{{ $file->name }}</td>
			<td>{{ $file->type->name }}</td>
			<td>{{ $file->model->name }}</td>
			<td><a href="{{ route($edit, array('id'=>$file->id)) }}">Изменить</a></td>
			<td><a href="">Удалить</a></td>			
		</tr>
		@endforeach
	</table>
@endsection