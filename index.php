<?php
header('Content-Type: text/html; charset=utf-8');

?>

<html>
<head>
<link type="text/css" href="style.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/mask.js" ></script>
<script type="text/javascript" src="js/placeholder.js" ></script>
<script type="text/javascript" src="js/json2.js" ></script>

<script>
var error={"0":"Сообщение отправлено","1":"Отметьте хотя бы 1 файл","2":"Введите правильно E-mail","3":"Заполните поле \"Имя\"","4":"Заполните поле \"Телефон\"","5":"Заполните поле \"Время звонка\"","6":"Не удалось отправить письмо"};
$(function(){

  $("#callback,#sendfile").on("submit",function(){
  	var selForm=$(this);
   	$(this).find("div.mes").attr("class","mes").text("Обработка данных...");
  	$.post("ajax/post.php",$(this).serializeArray(),function(data){
  		var resp=JSON.parse(data);
  		var i=0,str='';
  		while(i<resp['mc'].length){
  			str+=error[resp['mc'][i]];
  			if(i!=resp['mc'].length-1)str+=", ";
  			i++;
  		}

  		selForm.find("div.mes").text(str).addClass(resp['class']);
  		
  	});
  	return false;
  	});

});
</script>
</head>
<body>

<div id="cont">



<div class="contForm sendfile">

<form action="?" method="post"id="sendfile">

<div class="label"><label class="label2">Имя:</label><input name="name" type="text" placeholder="Иван Иванов" size="60" type="text" value="<?php echo $form['to']; ?>" /></div>

<div class="label1"><label class="label2">Email:</label><input name="mail" type="text" placeholder="mail@example.com"></div>

<div class="text-form1">Выберите интересующее Вас:</div>

<div class="div1"><input name="f[English Vocabulary in Use by Suart Redman (Pre-Intermediate/Intermediate)]" type="checkbox" id="c1" /> <label for="c1"><span></span><div class="div2">English Vocabulary in Use by Suart Redman (Pre-Intermediate/Intermediate)
</div></label></div>
<div class="div1"><input name="f[Piazza Navona Часть 1]" type="checkbox" id="c2" /> <label for="c2"><span></span><div class="div2">Piazza Navona Часть 1</div></label></div>
<div class="div1"><input name="f[Piazza Navona Часть 2]" type="checkbox" id="c3" /> <label for="c3"><span></span><div class="div2">Piazza Navona Часть 2
</div></label></div>
<div class="div1"><input name="f[Piazza Navona Часть 3]" type="checkbox" id="c4" /> <label for="c4"><span></span><div class="div2">Piazza Navona Часть 3
</div></label></div>
<div class="div1"><input name="f[Piazza Navona Аудио файлы]" type="checkbox" id="c5" /> <label for="c5"><span></span><div class="div2">Piazza Navona Аудио файлы
</div></label></div>
<div class="div1"><input name="f[Oxford Team 1 CD1]" type="checkbox" id="c6" /> <label for="c6"><span></span><div class="div2">Oxford Team 1 CD1
</div></label></div>
<div class="div1"><input name="f[Oxford Team 1 CD2]" type="checkbox" id="c7" /> <label for="c7"><span></span><div class="div2">Oxford Team 1 CD2
</div></label></div>

<div class="div1"><input name="f[New Total English Upper-int Audio]" type="checkbox" id="c8" /> <label for="c8"><span></span><div class="div2">New Total English Upper-int Audio
</div></label></div>
<div class="div1"><input name="f[New Total English - Upper Intermediate - Students’ Book]" type="checkbox" id="c9" /> <label for="c9"><span></span><div class="div2">New Total English - Upper Intermediate - Students’ Book</div></label></div>
<div class="div1"><input name="f[New Total English Upper-Inter video.zip]" type="checkbox" id="c10" /> <label for="c10"><span></span><div class="div2">New Total English Upper-Inter video.zip</div></label></div>
<div class="div1"><input name="f[Foley M. - New Total English Upper-intermediate Workbook]" type="checkbox" id="c11" /> <label for="c11"><span></span><div class="div2">Foley M. - New Total English Upper-intermediate Workbook</div></label></div>
<div class="div1"><input name="f[New total Eng Upper int WB Audio.zip]" type="checkbox" id="c12" /> <label for="c12"><span></span><div class="div2">New total Eng Upper int WB Audio.zip</div></label></div>
<div class="div1"><input name="f[Muzzy Lesson 1 мультфильм]" type="checkbox" id="c13" /> <label for="c13"><span></span><div class="div2">Muzzy Lesson 1 мультфильм</div></label></div>
<div class="div1"><input name="f[Muzzy Lesson 2 мультфильм]" type="checkbox" id="c14" /> <label for="c14"><span></span><div class="div2">Muzzy Lesson 2 мультфильм</div></label></div>

<div class="div1"><input name="f[Muzzy Lesson 3 мультфильм]" type="checkbox" id="c15" /> <label for="c15"><span></span><div class="div2">Muzzy Lesson 3 мультфильм</div></label></div>
<div class="div1"><input name="f[Muzzy Lesson 4 мультфильм]" type="checkbox" id="c16" /> <label for="c16"><span></span><div class="div2">Muzzy Lesson 4 мультфильм</div></label></div>
<div class="div1"><input name="f[Muzzy Lesson 5 мультфильм]" type="checkbox" id="c17" /> <label for="c17"><span></span><div class="div2">Muzzy Lesson 5 мультфильм</div></label></div>
<div class="div1"><input name="f[Muzzy Lesson 6 мультфильм]" type="checkbox" id="c18" /> <label for="c18"><span></span><div class="div2">Muzzy Lesson 6 мультфильм</div></label></div>
<div class="div1"><input name="f[Колыбельные на англ.zip]" type="checkbox" id="c19" /> <label for="c19"><span></span><div class="div2">Колыбельные на англ.zip</div></label></div>
<div class="div1"><input name="f[Колыбельные на английском.doc]" type="checkbox" id="c20" /> <label for="c20"><span></span><div class="div2">Колыбельные на английском.doc</div></label></div>

<input type="hidden" name="file" value=1>
<br />
<div class="mes"></div>
<input name="sendfile" type="submit" value="ПОЛУЧИТЬ МАТЕРИАЛЫ"/>
<div class="text-form2">На указанный адрес электронной почты Вы получите ссылки<br> по которым сможете скачать выбранное</div>
</form>

</div>
</div>
</body>
</html>















