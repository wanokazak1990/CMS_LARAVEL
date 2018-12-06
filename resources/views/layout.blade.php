<html>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ $title }}</title>
		<style>
			.pad-0{
				padding: 0px !important;
			}
			.pad-l-0{
				padding-left: 0px !important;
			}
			.pad-r-0{
				padding-right: 0px !important;
			}
			table form{padding: 0px; margin: 0px;}
			.avacars{font-size: 14px;}
			.delete-button{background: transparent;border: 0px;padding: 0px;color:#f44;}
			.active-menu{color:#a55;}
			.active-menu:hover{color: #a55;}
			.left-menu{height: 100vh;overflow-y: scroll;position: fixed;top:0;left: 0; width: inherit;padding-left: 15px;background: #ddd}
			.left-menu ul{list-style-type: none;padding-left: 0px;}
			.color div:hover,.option div:hover,.dop div:hover{background: #ff0;}
			.color div,.option div,.dop div{
				overflow: hidden;
				white-space: nowrap;
			}
			.color label,.option label,.dop label{font-weight: normal;width: 100%;}
			.color label:hover,.option label:hover,.dop label:hover{}
			.option input,.dop input {margin-right: 15px !important;display: inline-block;}
			tr:hover{background: #eee;}
			th,td{vertical-align: middle !important;}
			.font-16{font-size: 16px;}
			.font-14{font-size: 14px;}
			.font-12{font-size: 12px;}
			.exep div {padding: 0;}
			.company-dop{display:none;position: absolute;top: 50px;left: 5%;width: 90%;min-height: 90vh;background: #eee;z-index: 100;box-shadow: 0 0 15px #000;border-radius:5px;}
		</style>
	</head>

	<body>
		
		<div class="col-sm-3 col-lg-2">
			<div class="left-menu">
			@section('left')
			<h3>Меню</h3>
			<ul>
				<h4>Общие</h4>
				<li><a href="{{ route('brandlist') }}">Список брендов</a></li>
				<h4>Модельный ряд</h4>
				<li><a href="{{ route('countrylist') }}">Список стран производителей</a></li>
				<li><a href="{{ route('typemodellist') }}">Список типов автомобилей</a></li>
				<li><a href="{{ route('modellist') }}">Список моделей</a></li>
				<h4>Характеристики</h4>
				<li><a href="{{ route('characterlist') }}">Список характеристик</a></li>
				<h4>Файлы моделей</h4>
				<li><a href="{{ route('typeslist')}}">Список типов файлов</a></li>
				<li><a href="{{ route('fileslist')}}">Список файлов</a></li>
				<h4>Цветовая палитра</h4>
				<li><a href="{{ route('colorlist') }}">Список цветов</a></li>
				<h4>Основное и доп. оборудование</h4>
				<li><a href="{{ route('optparentlist') }}">Список разделов оборудования</a></li>
				<li><a href="{{ route('optionlist') }}">Список оборудования</a></li>
				<li><a href="{{ route('doplist') }}">Список доп. оборудования</a></li>
				<h4>Агрегаты</h4>
				<li><a href="{{ route('partmotorlist') }}">Список оборудования моторов</a></li>
				<li><a href="{{ route('motorlist') }}">Список моторов</a></li>
				<h4>Опции</h4>
				<li><a href="{{ route('packlist') }}">Список опций</a></li>
				<h4>Комплектации</h4>
				<li><a href="{{ route('complectlist') }}">Список комплектаций</a></li>
				<h4>Автомобили</h4>
				<li><a href="{{ route('carstatuslist') }}">Список статусов автомобилей</a></li>
				<li><a href="{{ route('carloclist') }}">Список поставок автомобилей</a></li>
				<li><a href="{{ route('carlist') }}">Список автомобилей</a></li>
				<h4>Кредитные программы</h4>
				<li><a href="{{ route('kreditlist') }}">Список кредитов</a></li>
				<h4>Коммерческие акции</h4>
				<li><a href="{{ route('companylist') }}">Список компаний</a></li>
			</ul>
			@show
			</div>
		</div>
		

		
		<div class="col-sm-9 col-lg-10">
			<h3>{{ $title }}</h3>
			@section('right')
			
			@show
		</div>
		

		<script src="/js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
		<script src="/lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="/js/main.js"></script>
		<script src="/js/jquery-ui.js"></script><!--http://api.jqueryui.com/datepicker/-->
		<link href='/css/jquery-ui.css' rel='stylesheet' type='text/css'>
		<script src="/js/calendar-ui.js"></script>

	</body>
</html>