<?php

namespace app\models;

use Yii;
use Datetime;

/**
 * This is the model class for table "note".
 *
 * @property int $id_note
 * @property string $dateNote
 * @property string $header Заголовок
 * @property string $text Основной текст
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'note';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dateNote', 'header', 'text'], 'required'],
            [['dateNote'], 'safe'],
            [['header'], 'string', 'max' => 40],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_note' => 'Id Note',
            'dateNote' => 'Date Note',
            'header' => 'Заголовок',
            'text' => 'Основной текст',
        ];
    }



    public static function getDayWithNote(Datetime $date){


        $notes =Note::find()->where(['between', 'dateNote', $date->format( 'Y-m-01'), $date->format( 'Y-m-t')])->all();

        $noteList;
         foreach ($notes as $note) {
            $day=(new Datetime($note->dateNote))->format('d-m-Y');
          $noteList[$day]= $day;
        }
        return $noteList;
    }
}
