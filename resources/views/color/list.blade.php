@extends ('layout')

@section('right')
	<a href="{{ route($route) }}">{{ $addTitle }}</a>
	<table class="table">
	@foreach($list as $key=> $color)
		<tr>
			<td>{{$key+1}}</td>
			<td>{{$color->name}}</td>
			<td>{{$color->rn_code}}</td>
			<td>
				@isset($color->brand)
					{{$color->brand->name}}
				@endisset
			</td>
			<td>
				<div style="border:1px solid #ccc;width: 100px;height: 30px;background: {{$color->web_code}}">
				</div>
			</td>
			<td><a href="{{ route($edit,['id'=>$color->id]) }}">Изменить</a>
			<td><a href="{{ route($delete,['id'=>$color->id]) }}">Удалить</a>
		</tr>
	@endforeach
	</table>
@endsection