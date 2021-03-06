@extends('crm')

@extends('crm.worklist')

@section('main')
<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 100%;">
		  <li class="nav-item">
		    <a class="nav-link" id="traffic-tab" data-toggle="tab" href="#traffic" role="tab" aria-controls="traffic" aria-selected="true">Трафик</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="contacts-tab" data-toggle="tab" href="#contacts" role="tab" aria-controls="contacts" aria-selected="false">Контакты</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link active" id="reserves-tab" data-toggle="tab" href="#reserves" role="tab" aria-controls="reserves" aria-selected="false">Резервы</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="deals-tab" data-toggle="tab" href="#deals" role="tab" aria-controls="deals" aria-selected="false">Сделки</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="refusals-tab" data-toggle="tab" href="#refusals" role="tab" aria-controls="refusals" aria-selected="false">Отказы</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="indicators-tab" data-toggle="tab" href="#indicators" role="tab" aria-controls="indicators" aria-selected="false">Показатели</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="demo-tab" data-toggle="tab" href="#demo" role="tab" aria-controls="demo" aria-selected="false">Демо</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="payments-tab" data-toggle="tab" href="#payments" role="tab" aria-controls="payments" aria-selected="false">Платежи</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="receipts-tab" data-toggle="tab" href="#receipts" role="tab" aria-controls="receipts" aria-selected="false">Поступления</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" id="more-tab" data-toggle="tab" href="#more" role="tab" aria-controls="more" aria-selected="false">Еще</a>
		  </li>
		</ul>

		<!-- Icons panel -->
		<div class="border" style="width: 100%;">
			<button type="button" class="btn btn-light"><i class="fas fa-cog"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-search"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-car-side"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-user-check"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-caret-square-down"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-filter"></i></button>
			<div style="float: right;">
				<button type="button" class="btn btn-light"><i class="fas fa-user-plus"></i></button>
				<button id="opening" type="button" class="btn btn-light"><i class="fas fa-arrow-circle-left"></i></button>			
			</div>
		</div>

		<!-- Tab panes -->
		<div class="tab-content" style="width: 100%;">
			<!-- Трафик -->
			<div class="tab-pane" id="traffic" role="tabpanel" aria-labelledby="traffic-tab">
				<h3 align="center">Трафик</h3>
			</div>
			<!-- Контакты -->
			<div class="tab-pane" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
				<h3 align="center">Контакты</h3>
			</div>
			<!-- Резервы -->
			<div class="tab-pane active" id="reserves" role="tabpanel" aria-labelledby="reserves-tab">
				<table class="table table-bordered table-sm">
					<thead>
						<tr>
							<th>Марка</th>
							<th>Модель</th>
							<th>Год</th>
							<th>VIN</th>
							<th>Цвет</th>
							<th>Опции</th>
							<th>Цена</th>
							<th>Аванс</th>
							<th>Клиент</th>
							<th>Телефон</th>
							<th>Менеджер</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Renault</td>
							<td>LOGAN (46L)</td>
							<td>2017</td>
							<td>X7L4SREA457723060</td>
							<td>RPL</td>
							<td>PM</td>
							<td>733 700р.</td>
							<td>0р.</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Renault</td>
							<td>DUSTER (79H)</td>
							<td>2017</td>
							<td>X7LHSRGAN57798929</td>
							<td>369</td>
							<td>Нет</td>
							<td>922 375р.</td>
							<td>1р.</td>
							<td>ФКУ ГБМСЭ РК МИНТРУДА РОССИИ</td>
							<td>8 (904) 100-1917</td>
							<td>Быков</td>
						</tr>
						<tr>
							<td>Renault</td>
							<td>STEPWAY (46B)</td>
							<td>2017</td>
							<td>X7L5SREAG58154872</td>
							<td>RPL</td>
							<td>PK5NVM, PBCH</td>
							<td>840 817р.</td>
							<td>10 000р.</td>
							<td>Ваховский Игорь Павлович</td>
							<td>8 (912) 946-1713</td>
							<td>Гарус</td>
						</tr>
					</tbody>
				</table>
				<div>
					<p>Количество: 3</p>
					<p>Сумма: 2 496 892 р.</p>
				</div>
			</div>
			<!-- Сделки -->
			<div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
				<h3 align="center">Сделки</h3>
			</div>
			<!-- Отказы -->
			<div class="tab-pane" id="refusals" role="tabpanel" aria-labelledby="refusals-tab">
				<h3 align="center">Отказы</h3>
			</div>
			<!-- Показатели -->
			<div class="tab-pane" id="indicators" role="tabpanel" aria-labelledby="indicators-tab">
				<h3 align="center">Показатели</h3>
			</div>
			<!-- Демо -->
			<div class="tab-pane" id="demo" role="tabpanel" aria-labelledby="demo-tab">
				<h3 align="center">Демо</h3>
			</div>
			<!-- Платежи -->
			<div class="tab-pane" id="payments" role="tabpanel" aria-labelledby="payments-tab">
				<h3 align="center">Платежи</h3>
			</div>
			<!-- Поступления -->
			<div class="tab-pane" id="receipts" role="tabpanel" aria-labelledby="receipts-tab">
				<h3 align="center">Поступления</h3>
			</div>
			<!-- Еще -->
			<div class="tab-pane" id="more" role="tabpanel" aria-labelledby="more-tab">
				<h3 align="center">Еще</h3>
			</div>
		</div>
@endsection