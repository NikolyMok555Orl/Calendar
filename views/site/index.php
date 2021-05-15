<?php

/* @var $this yii\web\View */

$this->title = 'Календарь';
use app\components\CalendarWidget;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
?>
<div class="site-index">


    <div class="body-content">
            <h1><?= Html::encode($this->title) ?></h1>
           <?php echo CalendarWidget::widget(['date'=>$date]) 
            //echo $date->format('Y');
           ?>

            <div class="note-index">



    <p>
        <?= Html::a('Create Note', ['note/create', 'date'=>$date->format('d-m-Y')], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_note',
            //'dateNote',
            'header',
            'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
        </div>

    </div>
</div>
