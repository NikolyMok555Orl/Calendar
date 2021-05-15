<?php

namespace app\components;
use app\components\CalendarWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use DateTime;
?>
  
<?php $form = ActiveForm::begin(); ?>


	<div>

		<p>
			<?php $dateMonthLast=((new DateTime($date))->modify('-1 month'))->format('d.m.Y');
				//echo gettype($dateMonthLast);
				 $dateMonthNext=((new DateTime($date))->modify('1 month'))->format('d.m.Y');

			?>
			<?= Html::a('<', ['index' , 'dateThis'=>$dateMonthLast], ['class'=>'btn btn-primary']) ?>
			<?php  echo (new DateTime($date))->format('Y').' '.CalendarWidget::$month[(int)(new DateTime($date))->format('m')]  ?>
			<?= Html::a('>', ['site/index', 'dateThis'=>$dateMonthNext], ['class'=>'btn btn-primary']) ?>
		</p>
	</div>
   <?php echo $calendar;?>






 <?php ActiveForm::end(); ?>


