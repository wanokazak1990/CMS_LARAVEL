var URI = document.location.pathname;
url = URI.split('/');

//ЗАГРУЖАЮТСЯ ПРИ ЗАГРУЗКЕ СТРАНИЦЫ ВСЕГДА

//выдать установленое значение ренджей лабелю
$('input[type="range"]').each(function(){
	setRange($(this));
})

$('input[type="range"]').mousemove(function(){
	setRange($(this));
})
function setRange(range)
{
	var label = range.parent().find('label');
	var labtext = label.html().split(':');
	label.html(labtext[0]+":"+range.val());
}
//Подсветка активных ссылок в меню
$(".left-menu ul a").each(function(){
	var origin = url[1];
	current = origin.slice(-4);
	current = current.replace('list','');
	current = current.replace('add','');
	current = current.replace('edit','');
	current = current.replace('del','');
	origin = '/'+origin.slice(0,-4)+current+'list';
	if($(this).attr('href').indexOf(origin) + 1) {
		$(this).addClass('active-menu');
		log(origin+' --- '+$(this).attr('href'))
	}
	
})




//ВЫЗЫВАЕМЫЕ ФУНКЦИИ 

function log(param)
{
	console.log(param);
}

function getColor(elem,type='check')//вернёт плитку цветов с инпутом 
{
	var formData = new FormData();
	var brand_id = elem.val();
	if(elem.attr('name')=='brand_id')
	{
		formData.append('brand_id',brand_id);
	}
	if(elem.attr('name')=='model_id')
	{
		formData.append('model_id',brand_id);
	}
	if(elem.attr('name')=='complect_id')
	{
		formData.append('complect_id',brand_id);
	}
    $.ajax({
        type: "POST",
        url: '/getcolor',
        dataType : "json", 
        cache: false,
        contentType: false,
        processData: false, 
        data: formData,
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
        success: function(param)
        {	
        	var str = '';
        	$(".color").html("");
        	//var objs = JSON.parse(param);
        	param.forEach(function(obj,i){
        		if(type=='check')
        		{
	        		str += '<div class="col-sm-2">';
	        			str += '<div>'+obj.name+' ('+obj.rn_code+')'+'</div>';
	        			str += '<div style="border:1px solid #ccc;height:20px;background:'+obj.web_code+'"></div>';
	        			str += '<label><input type="checkbox" name="color_id[]" value="'+obj.id+'"> Использовать</label>';
	        		str += '</div>';
	        	}
	        	if(type=='radio')
        		{
	        		str += '<div class="col-sm-2">';
	        			str += '<div>'+obj.name+' ('+obj.rn_code+')'+'</div>';
	        			str += '<div style="border:1px solid #ccc;height:20px;background:'+obj.web_code+'"></div>';
	        			str += '<label><input type="radio" name="color_id[]" value="'+obj.id+'"> Использовать</label>';
	        		str += '</div>';
	        	}
        	})
            $(".color").html(str);
        },
        error: function(msg){
            console.log('error');
        }
    });
}

function getOption(elem)
{
	var brand_id = elem.val();
	$.ajax({
		type: "GET",
		url: "/getoption",
		data: {'brand_id':brand_id},
		success: function(param)
		{
			var objs = JSON.parse(param);
			$('.option').html("");
			var str = '';
			objs.forEach(function(obj,i){
				str += '<div class="col-sm-3">';
					str += '<label>';
						str += "<input type='checkbox' name='pack_option[]' value='"+obj.id+"'>";
						str += obj.name;
					str += '</label>';
				str += '</div>';
			});
			$('.option').html(str);
		},
		error: function(msg){
            log('error');
        }
	})
}

function getModels(elem,type)
{
	var brand_id = elem.val();
	$.ajax({
		type: "GET",
		url: "/getmodels",
		data: {'brand_id':brand_id},
		success: function(param)
		{
			var objs = JSON.parse(param);
			$('.model').html("");
			var str = '';
			if(type=='string')
			{
				objs.forEach(function(obj,i){
					str += '<span>';
						str += '<label>';
							str += "<input type='checkbox' name='pack_model[]' value='"+obj.id+"'>";
							str += obj.name;
						str += '</label>';
					str += '</span>';
				});
				$('.model').html(str);
			}
			if(type=='list')
			{
				str += '<option selected disabled>Укажите параметр</option>';
				objs.forEach(function(obj,i){
					str += '<option value="'+obj.id+'">';
						str += obj.name;
					str += '</option>';
				});
				$('.model').html(str);
			}
		},
		error: function(msg){
            log('error');
        }
	})
}

function getMotors(elem)
{
	var brand_id = elem.val();
	$.ajax({
		type: "GET",
		url: "/getmotors",
		data: {'brand_id':brand_id},
		success: function(param){
			var objs = JSON.parse(param);
			$('.motor').html('');
			var str = '';
			str += '<option selected disabled>Укажите параметр</option>';
			objs.forEach(function(obj,i){
				str += '<option value="'+obj.id+'">';
					str += obj.name;
				str += '</option>';
			});
			$('.motor').html(str);
		},
		error: function(param)
		{
			log('error');
		}
	})
}

function getPacks(elem)
{
	var formData = new FormData();
	var brand_id = elem.val();
	if(elem.attr('name')=='model_id')
	{
		formData.append('model_id',brand_id);
	}
	if(elem.attr('name')=='complect_id')
	{
		formData.append('complect_id',brand_id);
	}
    $.ajax({
        type: "POST",
        url: '/getpacks',
        dataType : "json", 
        cache: false,
        contentType: false,
        processData: false, 
        data: formData,
        headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    },
		success: function(param){
			//log(param);
			//var objs = JSON.parse(param);
			$('.pack').html('');
			var str = '';
			str += '<tbody>';
			param.forEach(function(obj,i){
				str += '<tr>';
					str += '<td>';
						str += '<input type="checkbox" name="packs[]" value="'+obj.id+'">'
					
						str += obj.name;
					str += '</td>';

					str += '<td>';
						str += obj.code;
					str += '</td>';

					str += '<td>';
						str += obj.price+' руб.';
					str += '</td>';

					str += '<td class="font-12">';
						str += obj.optionlist;
					str += '</td>';
				str += '</tr>';
			});
			str += '</tbody>';
			$('.pack').html(str);
		},
		error: function(param)
		{
			log('error');
		}
	})
}

function getComplects(elem)
{
	var model_id = elem.val();
	$.ajax({
		type: "GET",
		url: "/getcomplects",
		data: {'model_id':model_id},
		success: function(param){
			var objs = JSON.parse(param);
			$('.complect').html('');
			var str = '';
			str += '<option selected disabled>Укажите параметр</option>';
			objs.forEach(function(obj,i){
				str += '<option value="'+obj.id+'">';
					str += obj.fullname;
				str += '</option>';
			});
			$('.complect').html(str);
		},
		error: function(param)
		{
			log('error');
		}
	})
}





/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
///////////////////////////РОУТЕР ДЛЯ JS/////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////

switch (url[1])
{
	case 'modeladd':
		$('select[name="brand_id"]').change(function(){
			getColor($(this));
		});
	break;

	case 'modeledit':
		var last_brand = $('select[name="brand_id"]').val();
		$('select[name="brand_id"]').change(function(){
			var res = confirm('При смене бренда удалятся все цвета, которые уже установлены на модели, продолжить?');
			if(res==true)
			{	
				getColor($(this));
				last_brand = $(this).val();
			}
			else
			{
				$(this).val(last_brand);
			}
		});
	break;

	case 'packadd':
		$('select[name="brand_id"]').change(function(){
			getOption($(this));
			getModels($(this),'string');
		});
	break;

	case 'packedit':
		var last_brand = $('select[name="brand_id"]').val();
		$('select[name="brand_id"]').change(function(){
			var res = confirm('При смене бренда удалятся все модели и оборудование бренда, которые уже включены в состав опции, продолжить?');
			if(res)
			{
				getOption($(this));
				getModels($(this),'string');
			}
			else
			{
				$(this).val(last_brand);
			}
		});
	break;

	case 'complectadd':
		$('select[name="brand_id"]').change(function(){
			getModels($(this),'list');
			getMotors($(this));
			getOption($(this));
		});
		$('select[name="model_id"]').change(function(){
			getPacks($(this));
			getColor($(this));
		});
	break;

	case 'caradd':
		$('select[name="brand_id"]').change(function(){
			getModels($(this),'list');
		});
		$('select[name="model_id"]').change(function(){
			getComplects($(this));
		});
		$(document).on('change','select[name="complect_id"]',function(){
			getPacks($(this));
			getColor($(this),'radio');			
		});
	break;

	case 'caredit':
		$('select[name="brand_id"]').change(function(){
			getModels($(this),'list');
		});
		$('select[name="model_id"]').change(function(){
			getComplects($(this));
		});
		$(document).on('change','select[name="complect_id"]',function(){
			getPacks($(this));
			getColor($(this),'radio');			
		});
	break;

	case 'kreditadd':
		$('select[name="brand_id"]').change(function(){
			getModels($(this),'string');
		});
	break;

	case 'kreditedit':
		var last_brand = $('select[name="brand_id"]').val();
		$('select[name="brand_id"]').change(function(){
			var res = confirm('При смене бренда удалятся все модели бренда, которые уже включены в состав кредита, продолжить?');
			if(res)
			{
				getModels($(this),'string');
			}
			else
			{
				$(this).val(last_brand);
			}			
		});
	break;

	case 'companyadd':
		$('select[name="brand_id"]').change(function(){
			getModels($(this),'string');
		});
	break;

	default:
	break;
}