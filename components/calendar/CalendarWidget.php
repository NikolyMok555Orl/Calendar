<?php
// подключаем пространство имен
namespace app\components\calendar;
// импортируем класс Windget и Html хелпер
use yii\base\Widget;
use yii\helpers\Html;
use DateTime;
// расширяем класс Widget
class CalendarWidget extends Widget
{
   // public $url;
    // функция описывает определенные действия
   public DateTime $date;
   public static $month=['1'=>"Январь", '2'=>"Февраль", '3'=>"Март", '4'=>"Апрель", '5'=>"Май", '6'=>"Июнь", '7'=>"Июль", '8'=>"Август", '9'=>"Сентябрь", '10'=>"Октябрь", '11'=>"Ноябрь", '12'=>"Декабрь"];
   public static $nameDate=['1'=>"Понедельник", '2'=>"Вторник", '3'=>"Среда", '4'=>"Четверг", '5'=>"Пятница", '6'=>"Суббота", '7'=>"Воскресенье"];

   public $css;

   public $dayWithNote;
    public function init()
    {
        parent::init();
        if ($this->date === null) {
            $this->date = date('d.m.Y', time());
        }
    }

    public function run()
    {
        //echo $this->date->format('Y-m-d');
        //echo $this->date->format('Y-m-d');
        if($this->date===null){
       $dateTime = new DateTime('2021-05-14');
        }else{
            $dateTime=$this->date;
        }

       // $dateTime = new DateTime('2021-05-14');
        $table=$this->GeneratorCalendate($dateTime, $this->dayWithNote);

        return $this->render('calendar', ['calendar'=>$table, 'date'=>$dateTime->format('Y-m-d')]);
    }



    private function GeneratorCalendate(DateTime $dateThis, $dayWithNote){
        //strpbrk($date,1234567890) && strtotime($date)
        //return $dateThis;
        
            
            $cols = 7; // количество столбцов, td
            //return  $dateThis->format('d.m.Y');
            $countDay=$dateThis->format('t');
            $rows =(int) ($countDay/$cols) +1; // количество строк, tr
            if($countDay%7!=0 ) $rows++;
            $table = '<div class="calendar"><table border=1>';
            $numberDay=1;
        for ($tr=0; $tr<$rows; $tr++){
            $table .= '<tr>';
            for ($td=0; $td<$cols; $td++){
                if($tr==0){
                $table .= '<td>'. CalendarWidget::$nameDate[$td+1] .'</td>';
                }elseif ($numberDay<=$countDay) {
                    $day=$numberDay.'-'.$dateThis->format('m-Y');
                    if(!array_key_exists($day, $dayWithNote)){
                   $table .= '<td>.<a href="index?r=site%2Findex&dateThis='.$day.'">'.$numberDay .'</a>'.'</td>';
                    }else{

                         $table .= '<td>.<a href="index?r=site%2Findex&dateThis='.$day.'"><b>'.$numberDay .'</b></a>'.'</td>';
                    }
                   $numberDay++;
                 /* $table .= '<td>'.'<input type="submit"  name ='.$numberDay.' value='.$numberDay.'onClick='.' >' .'</td>';*/
                 /*$table.='<td>'.'<?php Html::a($numberDay, [''car/view'', ''id''=>'.'new DateTime($date->format(Y-m'').'-'.$numberDay), ['class'=>'btn btn-primary']) '</td>';*/



                    //$numberDay++;
                }
            }
            $table .= '</tr>';
            }

        $table .= '</div></table>';
        $table .= $dateThis->format('d.m.Y');
        return $table;   
    }

    //Проверка даты
    public function  CheckInputIsDate($dateThis) { 
        return (bool)strpbrk($dateThis,1234567890) && strtotime($dateThis); 
    } 


    public function SetDate(){



    }
}



?>