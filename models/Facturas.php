<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "facturas".
 *
 * @property integer $id
 * @property string $fecha
 * @property integer $servicio_id
 * @property integer $cliente_id
 * @property double $tiempo
 * @property string $unidad_medida
 *
 * @property Consolidados[] $consolidados
 * @property Servicios $servicio
 * @property Clientes $cliente
 */
class Facturas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'facturas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha'], 'safe'],
            [['servicio_id', 'cliente_id'], 'required'],
            [['servicio_id', 'cliente_id'], 'integer'],
            [['tiempo'], 'number'],
            [['unidad_medida'], 'string', 'max' => 10],
            [['servicio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Servicios::className(), 'targetAttribute' => ['servicio_id' => 'id']],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Clientes::className(), 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'servicio_id' => 'Servicio ID',
            'cliente_id' => 'Cliente ID',
            'tiempo' => 'Tiempo',
            'unidad_medida' => 'Unidad Medida',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsolidados()
    {
        return $this->hasMany(Consolidados::className(), ['factura_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicios::className(), ['id' => 'servicio_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Clientes::className(), ['id' => 'cliente_id']);
    }
}
