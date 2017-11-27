<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicios".
 *
 * @property integer $id
 * @property string $nombre
 * @property double $valor
 * @property integer $estrato
 *
 * @property Facturas[] $facturas
 */
class Servicios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'estrato'], 'required'],
            [['valor'], 'number'],
            [['estrato'], 'integer'],
            [['nombre'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'valor' => 'Valor',
            'estrato' => 'Estrato',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Facturas::className(), ['servicio_id' => 'id']);
    }
}
