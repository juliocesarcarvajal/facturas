<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estratos".
 *
 * @property integer $id
 * @property integer $estrato
 *
 * @property Valores[] $valores
 */
class Estratos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estratos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estrato'], 'required'],
            [['estrato'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estrato' => 'Estrato',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValores()
    {
        return $this->hasMany(Valores::className(), ['estrato_id' => 'id']);
    }
}
