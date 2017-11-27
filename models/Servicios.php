<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicios".
 *
 * @property integer $id
 * @property string $nombre
 * @property double $valor
 * @property integer $estrato_id
 *
 * @property Facturas[] $facturas
 * @property Estratos $estrato
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
            [['nombre', 'estrato_id'], 'required'],
            [['valor'], 'number'],
            [['estrato_id'], 'integer'],
            [['nombre'], 'string', 'max' => 64],
            [['estrato_id'], 'exist', 'skipOnError' => true, 'targetClass' => Estratos::className(), 'targetAttribute' => ['estrato_id' => 'id']],
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
            'estrato_id' => 'Estrato',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Facturas::className(), ['servicio_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstrato()
    {
        return $this->hasOne(Estratos::className(), ['id' => 'estrato_id']);
    }
}
