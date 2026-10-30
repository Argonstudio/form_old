<?
header('Content-Type: text/html; charset=utf-8');
include "JSON.php";
include "func.php";
$json=new Services_JSON();


$arr=NULL;
//$arFile=array("f1"=>"file4.txt","f2"=>"file2.txt","f3"=>"file3.txt");
$arFile=array("English Vocabulary in Use by Suart Redman (Pre-Intermediate/Intermediate)"=>"English Vocabulary in Use by Suart Redman (Pre-Intermediate/Intermediate): ссылка на файл
<p></p>
","Piazza Navona Часть 1"=>"Piazza Navona Часть 1: ссылка на файл
<p></p>
","Piazza Navona Часть 2"=>"Piazza Navona Часть 2: ссылка на файл
<p></p>
","Piazza Navona Часть 3"=>"Piazza Navona Часть 3: ссылка на файл
<p></p>
","Piazza Navona Аудио файлы"=>"Piazza Navona Аудио файлы: ссылка на файл
<p></p>
","Oxford Team 1 CD1"=>"Oxford Team 1 CD1: ссылка на файл
<p></p>
","Oxford Team 1 CD2"=>"Oxford Team 1 CD2: ссылка на файл
<p></p>
","New Total English Upper-int Audio"=>"New Total English Upper-int Audio: ссылка на файл<p></p>
","New Total English - Upper Intermediate - Students’ Book"=>"New Total English - Upper Intermediate - Students’ Book: ссылка на файл<p></p>
","New Total English Upper-Inter video.zip"=>"New Total English Upper-Inter video.zip: ссылка на файл<p></p>
","Foley M. - New Total English Upper-intermediate Workbook"=>"Foley M. - New Total English Upper-intermediate Workbook: ссылка на файл<p></p>
","New total Eng Upper int WB Audio.zip"=>"New total Eng Upper int WB Audio.zip: ссылка на файл<p></p>
","Muzzy Lesson 1 мультфильм"=>"Muzzy Lesson 1 мультфильм: ссылка на файл<p></p>
","Muzzy Lesson 2 мультфильм"=>"Muzzy Lesson 2 мультфильм: ссылка на файл
<p></p>
","Muzzy Lesson 3 мультфильм"=>"Muzzy Lesson 3 мультфильм: ссылка на файл
<p></p>
","Muzzy Lesson 4 мультфильм"=>"Muzzy Lesson 4 мультфильм: ссылка на файл
<p></p>
","Muzzy Lesson 5 мультфильм"=>"Muzzy Lesson 5 мультфильм: ссылка на файл
<p></p>
","Muzzy Lesson 6 мультфильм"=>"Muzzy Lesson 6 мультфильм: ссылка на файл
<p></p>
","Колыбельные на англ.zip"=>"Колыбельные на англ.zip: ссылка на файл<p></p>
","Колыбельные на английском.doc"=>"Колыбельные на английском.doc: ссылка на файл<p></p>


");

if($_POST['file'])
{

	if(preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$_POST["mail"])&&strlen($_POST['name'])>=2)
	{
		if($_POST['f']){
		 $form['to']        = $_POST['mail'];
	       $form['fromname']  = "Smart Apple";
	       $form['fromemail'] = "mail@example.com";
	       $form['subject']   = "Файлы от Smart Apple";
	       $message1  = "Здравствуйте, ".$_POST['name']." <p></p>Благодарим Вас за интерес к файлам Smapt Apple<p></p>";
                  foreach($_POST['f'] as $num=>$v){
			   		 $message1.="<div>".$arFile[$num]."</div>";
				}
	      $message1.="
          <div>С уважением,<br/>
компания Smart Apple
             </div>

          ";
	     $info = send_mail($form['to'],$form['subject'],$message1,$form['fromemail']);

    	if($info==1)
     		{
     		   $to        = "mail@example.com";
		       $fromname  = "Smart Apple";
		       $fromemail = "mail@example.com";
		       $subject   = "Файлы от Smart Apple";
		       $message1 = $form['message1'] = "<h1>Запрос файлов</h1>
		       <p>Имя: <b>".$_POST['name']."</b><br>
	       	   Email: <b>".$_POST['mail']."</b> </p>
		       Выбраны материалы:</div>";
	           $message1.="<ul>";
		  	   foreach($_POST['f'] as $num=>$v){
			   		 $message1.="<li>".$num."</li>";
				}
				$message1.="</ul>";
		    	$info1 = send_mail($to,$subject,$message1,$fromemail);

		    	if($info1==1){

     			$arr['mes']="0";
				$arr['class']="ok";
				$arr['mc'][]="0";
				}
				else {
		     		$arr['mes']="6";
					$arr['class']="error";
					$arr['mc'][]="6";
     			}
     		}
     	else {
     		$arr['mes']="6";
			$arr['class']="error";
			$arr['mc'][]="6";
     	}
  }


 }
 
 if(strlen($_POST['name'])<2){
     	$arr['mes']="3";
 		$arr['class']="error";
 		$arr['mc'][]="3";
     }
     

  if(!$_POST['f']) {
  	  	$arr['mes']="1";
		$arr['class']="error";
		$arr['mc'][]="1";
  }

 
 if(!preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$_POST["mail"]))
		{
			$arr['mes']="2";
			$arr['class']="error";
            $arr['mc'][]="2";
		}
}

 echo $json->encode($arr);
?>
