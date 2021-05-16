<?php

/* @var $this yii\web\View */

$this->title = 'Календарь';
use app\components\calendar\CalendarWidget;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
?>
<div class="site-index">


    <div class="body-content">
            <h1><?= Html::encode($this->title) ?></h1>
            <div>
           <?php echo CalendarWidget::widget(['date'=>$date, 'dayWithNote'=>$dayWithNote]) 
            //echo $date->format('Y');
           ?>
            </div>
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

            [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{view} {update} {delete}',
        'buttons' => [
        'view' => function ($url,$model) {
            return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['note/view','id' => $model->id_note]);
        },
        'update' => function ($url,$model) {
            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['note/update','id' => $model->id_note]);
        },
        'delete' => function ($url,$model) {
            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['note/delete','id' => $model->id_note]);
        },
    ],
],


        ],


    ]); ?>


</div>
        </div>

    </div>
</div>
